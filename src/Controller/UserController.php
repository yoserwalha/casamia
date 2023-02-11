<?php

namespace App\Controller;

use Exception;

use App\Entity\User;
use App\Form\UserType;
use App\Form\InscriptionType;
use App\Form\ResetPasswordType;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Message;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;


class UserController extends AbstractController
{

    // ***************************** Partie Front ********************************

    /**
     * @Route("/user", name="app_user")
     */
    public function index(): Response
    {
        return $this->render('FrontOffice/user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Request $request , UserPasswordEncoderInterface $encoder): Response{
        $User = new User();
        $form=$this->createForm(InscriptionType::class, $User);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $hash = $encoder->encodePassword($User, $User->getPassword());
            $User->setPassword($hash);

            // $User->setScore(0);
            // $User->setRang(null);
            $User->setRole("ROLE_USER");
            $date = new \DateTime('@' . strtotime('now'));
            $User->setDateCreation($date);
            
            $User=$form->getData();
            $em=$this->getDoctrine()->getManager();
            $em->persist($User);
            $em->flush();
            // $this->addFlash('message','utilisateur bien ajouter');
            return $this->redirectToRoute('inscription');

            //return new Response("utilisateur ajouté");
            //return $this->render('utilisateur/back_utilisateur.html.twig',['formAjout'=>$form->createView()]);
        }
        return $this->render('FrontOffice/user/inscription.html.twig',[
            'formInscription'=>$form->createView()]);
    }

    /**
     * @Route ("/login" , name="login")
     */
    public function login(){
        // $User = new User();
        // $form=$this->createForm(InscriptionType::class, $User);
        return $this->render('FrontOffice/accueil/index.html.twig');
        // return $this->render('FrontOffice/user/inscription.html.twig',[
        //     'formInscription'=>$form->createView()]);
    }

    /**
     * @Route ("/logout" , name="logout")
     */
    public function logout(){}

    /**
     * @Route ("/base_front_connecte" , name="base_front_connecte")
     */
    public function base_front_connecte(){
        return $this->render('base_front_connecte.html.twig');
    }

    /**
     * @Route ("/check" , name="check")
     */
    public function check()
    {
        $utilisateur = $this->getUser();
        
            if (in_array('ROLE_ADMIN', $utilisateur->getRoles())) {
                return $this->redirectToRoute('app_dashboard');
            }elseif (in_array('ROLE_USER', $utilisateur->getRoles())) {
                return $this->redirectToRoute('base_front_connecte');
            }
           // return $this->redirectToRoute('login');
        

        return $this->redirectToRoute('logout');
    }


    /**
     * @Route ("/motDePasseOublie" , name = "motDePasseOubliee")
     */
    public function motDePasseOubliee(Request $request , UserRepository $utilisateurRepo, \Swift_Mailer $mailer,
    TokenGeneratorInterface $tokenGenerator){
        //on cree le formulaire
        $form = $this->createForm(ResetPasswordType::class);
        //on fait le traitement
        $form->handleRequest($request);
        //si le formulaire est valide
        if ($form->isSubmitted() && $form->isValid()){
            //on recupere les donnees
            $donnees = $form->getData();
            //on cherche si l'utilisateur a cet email
            $User = $utilisateurRepo->findOneBy(array('email' => $donnees));
            //si l'utilisateur n'existe pas
            if (!$User){
                //on envoie un msg flash
                $this->addFlash('danger','cette adresse email n\'existe pas');
                $this->redirectToRoute('inscription');
            }else{
                $token = $tokenGenerator->generateToken();
                try {
                    $User->setResetToken($token);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($User);
                    $entityManager->flush();
    
                }catch (Exception $e){
                    $this->addFlash('warning','une erreur est survenue :' .$e->getMessage() );
                    return $this->redirectToRoute('inscription');
                }
                 //on genere l url de reinisialisation de mdp
            $url = $this->generateUrl('resetPassword', ['token' => $token],
            UrlGeneratorInterface::ABSOLUTE_URL);
            // on envoie le message
            $message =(new \Swift_Message('Mot de passe oublié'))
                //on attribut l'expediteur
                ->setFrom('testutilisateurs1@gmail.com')
                //on atribut le destinataire
                ->setTo($User->getEmail())
                // on met le contenu
                ->setBody(
                    "<p>Bonjour,</p><p>Une demande de reinitialisation de mot de passe a ete effectuee pour le
                        site AMT . Veuiller cliquer sur le lien suivant : " .$url . '</p>',
                    'text/html'

                );
            //on envoie le mail
            $mailer->send($message);
            //on cree le msg flash
            $this->addFlash('message','Un mail de réinitialisation de mot de passe a ete envoyer sur votre mail');
            //return $this->redirectToRoute('login');
    
            }
        }
        //on envoie vers la page de demande de l email
        return $this->render('FrontOffice/user/motDePasseOubliee.html.twig',['emailForm'=> $form->createView()]);
    }


    /**
     * @Route ("/resetPassword/{token}" ,name = "resetPassword")
     */
    public function resetPassword($token,Request $request, UserPasswordEncoderInterface $passwordEncoder){
        //chercher l'utilisateur avec le token fourni
        $User= $this->getDoctrine()->getRepository(User::class)->findOneBy(['reset_token' => $token]);
        if (! $User){
            $this->addFlash('danger', 'Token inconnu');
            return $this->redirectToRoute('inscription');
        }
        //si le formulaire est envoee avec methode post
        if ($request->isMethod('POST')){
            //on supprime le token
            $User->setResetToken(null);
            //on chiffre le mdp
            $User->setPassword($passwordEncoder->encodePassword($User,$request->request->get('password')));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($User);
            $entityManager->flush();

            $this->addFlash('message','Mot de passe modifié avec succès');
            return $this->redirectToRoute('inscription');
        }else{
            return  $this->render('FrontOffice/user/resetPassword.html.twig',['token' => $token]);
        }
    }

     // ***************************** Partie Back ********************************

    // /**
    //  * @Route("/Dashboard/Users", name="userBack")
    //  */
    // public function afficher(): Response
    // {
    //     $this->denyAccessUnlessGranted('ROLE_ADMIN');
    //     //Récupérer le répository
    //     $r = $this->getDoctrine()->getRepository(Utilisateur::class);
    //     //Récupérer la fonction findAll()
    //     $Utilisateur = $r->findAll();
    //     return $this->render('BackOffice/user/afficher.html.twig', [
    //         'formU' => $Utilisateur
    //     ]);
    // }

    /**
     * @Route("/Dashboard/Users", name="userBack", methods={"GET"})
     */
    public function index2(UserRepository $UserRepository): Response
    {
        return $this->render('BackOffice/user/index.html.twig', [
            'user' => $UserRepository->findAll(),
        ]);
    }

    /**
     * @Route("/Dashboard/Users/new", name="app_user_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UserRepository $UserRepository,UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            // $user->setScore(0);
            // $user->setRang(null);
            // $user->setRole("ROLE_USER");
            $date = new \DateTime('@' . strtotime('now'));
            $user->setDateCreation($date);

            $UserRepository->add($user);
            return $this->redirectToRoute('userBack', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('BackOffice/user/ajouter.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'user' => $UserRepository->findAll(),
        ]);
    }

     /**
     * @Route("/Dashboard/Users/edit/{id}", name="app_user_edit", methods={"GET", "POST"}, requirements={"id":"\d+"})
     */
    public function edit(Request $request, User $user, UserRepository $UserRepository,UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $UserRepository->add($user);
            return $this->redirectToRoute('userBack', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('BackOffice/user/modifier.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'user' => $UserRepository->findAll(),
        ]);
    }

    /**
     * @Route("/Dashboard/Users/{id}", name="app_user_delete", methods={"POST"}, requirements={"id":"\d+"})
     */
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user);
        }

        return $this->redirectToRoute('userBack', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route ("/Dashboard/profile" , name="profile")
     */

    public function profile(){
        return $this->render('BackOffice/user/profile.html.twig');
    }

     /**
     * @Route("/Dashboard/profile/edit/{id}", name="app_user_edit_profile", methods={"GET", "POST"}, requirements={"id":"\d+"})
     */
    public function editProfile(Request $request, User $user, UserRepository $UserRepository,UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $UserRepository->add($user);
            return $this->redirectToRoute('profile', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('BackOffice/user/modifierProfile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'user' => $UserRepository->findAll(),
        ]);
    }
}

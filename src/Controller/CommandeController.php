<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CommandeController extends AbstractController
{
    /**
     * @Route("/Dashboard/commande", name="commande_index_back", methods={"GET"})
     */
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('BackOffice/commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/Dashboard/commande/new", name="commande_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CommandeRepository $commandeRepository): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeRepository->add($commande);
            return $this->redirectToRoute('commande_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('BackOffice/commande/ajouter.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    // /**
    //  * @Route("/{id}", name="app_commande_show", methods={"GET"})
    //  */
    // public function show(Commande $commande): Response
    // {
    //     return $this->render('commande/show.html.twig', [
    //         'commande' => $commande,
    //     ]);
    // }

    /**
     * @Route("/Dashboard/commande/{id}/edit", name="commande_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commande $commande, CommandeRepository $commandeRepository): Response
    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeRepository->add($commande);
            return $this->redirectToRoute('commande_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('BackOffice/commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/Dashboard/commande/{id}", name="commande_delete", methods={"POST"}, requirements={"id":"\d+"})
     */
    public function delete(Request $request, Commande $commande, CommandeRepository $commandeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $commandeRepository->remove($commande);
        }

        return $this->redirectToRoute('commande_index_back', [], Response::HTTP_SEE_OTHER);
    }
}

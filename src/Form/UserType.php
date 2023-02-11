<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('password', PasswordType::class )
            ->add('confirme_password', PasswordType::class)
            // ->add('score')
            // ->add('rang')
            ->add('role', ChoiceType::class,
            [
                'choices' => [
                    "Etudiant" => "ROLE_USER",
                    "Admin" => "ROLE_ADMIN"
                ],
                'expanded' => false,
            ])
            // ->add('date_creation')
            // ->add('reset_token')
            // ->add('mon_abo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

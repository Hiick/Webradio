<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom d\'utilisateur',
                    'class' => 'form-control'
                ]
            ])
            ->add('username', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom d\'utilisateur',
                    'class' => 'form-control'
                ]
            ])
            ->add('avatar', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom d\'utilisateur',
                    'class' => 'form-control'
                ]
            ])
            ->add('nom_chaine', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom d\'utilisateur',
                    'class' => 'form-control'
                ]
            ])
            ->add('roles', ChoiceType::class, [
                'required' => false,
                'label' => false,
                'choices' => [
                    'ADMIN' => 'ADMIN',
                    'USER' => 'USER',
                ],
                'attr' => [
                    'placeholder' => 'Nom d\'utilisateur',
                    'class' => 'form-control'
                ]
            ])
            ->add('status', TextType::class, [
                'required' => false,
                'label' => false,
                'choices' => [
                    'Active' => true,
                    'Inactive' => false,
                ],
                'attr' => [
                    'placeholder' => 'Nom d\'utilisateur',
                    'class' => 'form-control'
                ]
            ])
            ->add('password', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom d\'utilisateur',
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}

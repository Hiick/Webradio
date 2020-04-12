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
                    'placeholder' => 'email',
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
                    'placeholder' => 'avatar',
                    'class' => 'form-control'
                ]
            ])
            ->add('nomChaine', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'nom de la chaine',
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
                    'class' => 'form-control'
                ]
            ])
            ->add('status', ChoiceType::class, [
                'required' => false,
                'label' => false,
                'choices' => $this->getChoices(),
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('password', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'password',
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

    private function getChoices()
    {
        $choices = Users::DefaultStatus;
        $output = [];
        foreach($choices as $k => $v) {
            $output[$v] = $k;
        }
        return $output;
    }
}

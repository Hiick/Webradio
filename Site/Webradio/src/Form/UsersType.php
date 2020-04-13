<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
                    'placeholder' => 'Email',
                    'class' => 'form-control text-center text-black'
                ]
            ])
            ->add('username', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom d\'utilisateur',
                    'class' => 'form-control text-center text-black'
                ]
            ])
            ->add('nomChaine', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Chaîne',
                    'class' => 'form-control text-center text-black'
                ]
            ])
            ->add('roleUser', ChoiceType::class, [
                'required' => false,
                'label' => false,
                'choices' => $this->getRoleChoices(),
                'attr' => [
                    'class' => 'form-control',
                    'id'    => 'sel1',
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

    private function getRoleChoices()
    {
        $choicesRole = Users::DefaultRole;
        foreach($choicesRole as $k => $v) {
            $output[$v] = $k;
        }
        return $output;

    }
}

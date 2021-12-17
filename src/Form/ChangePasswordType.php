<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Votre prénom',
                'disabled' => true
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Votre nom',
                'disabled' => true
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre email',
                'disabled' => true
            ])
            ->add('password', RepeatedType::class, [
                'constraints' => new Length([
                    'min' => 2,
                    'max' => 30
                ]),
                'type' => PasswordType::class,
                'invalid_message' => 'les mots de passe ne correspondent pas.',
                'required' => true,
                'first_options' => [
                    'label' => 'Entrez votre nouveau mot de passe',
                    'attr' => ['placeholder' => 'Entrez votre nouveau mot de passe']
                ],
                'second_options' => [
                    'label' => 'Confirmez votre nouveau mot de passe',
                    'attr' => ['placeholder' => 'Confirmez votre nouveau mot de passe']
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Modifier mon mot de passe',
                'attr' => ['class' => 'btn-primary btn btn-block']
            ]);;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

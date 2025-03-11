<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UpdatePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('currentPassword', PasswordType::class, [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'form.current_password.blank',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'form.new_password.password.min_length',
                        'max' => 255,
                        'maxMessage' => 'form.new_password.password.max_length',
                    ])
                ]
            ])
            ->add('plainPassword', RepeatedType::class, [
                'mapped' => false,
                'type' => PasswordType::class,
                'first_name'  => 'new_password',
                'second_name' => 'confirm_password',
                'first_options'  => ['label' => 'form.new_password.label'],
                'second_options' => ['label' => 'form.confirm_password.label'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'form.new_password.blank',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'form.new_password.password.min_length',
                        'max' => 255,
                        'maxMessage' => 'form.new_password.password.max_length',
                    ])
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

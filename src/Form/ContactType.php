<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('text', TextareaType::class, [
                'required' => true,
                'attr' => [
                    'rows' => 10,
                    'placeholder' => 'Votre message...',
                ],
            ])
            ->add('topic', TextType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'minMessage' => 'Minimum of 5 characters',
                        'max' => 255,
                        'maxMessage' => 'Maximum of 255 characters',
                    ])
                ],
                'attr' => [
                    'placeholder' => 'Votre topic...',
                ]
            ])
            ->add('nom',  TextType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'minMessage' => 'Minimum of 5 characters',
                        'max' => 255,
                        'maxMessage' => 'Maximum of 255 characters',
                    ])
                ],
                'attr' => [
                    'placeholder' => 'Votre nom...',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
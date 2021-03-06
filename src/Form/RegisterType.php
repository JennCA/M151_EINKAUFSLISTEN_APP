<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'userName',
                TextType::class,
                array(
                    'attr' =>
                    array(
                        'class' => 'input'
                    ),
                )
            )
            ->add(
                'password',
                PasswordType::class,
                array(
                    'attr' =>
                    array(
                        'class' => 'input'
                    )
                )
            )
            ->add(
                'submit',
                SubmitType::class,
                array(
                    'attr' =>
                    array(
                        'class' => 'button is-primary'
                    )
                )
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([ ]);
    }
}

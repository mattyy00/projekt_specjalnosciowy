<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user_name',TextType::class,[
                'row_attr' => [ 'class' => 'form-floating mb-3'],
                'attr' => [ 'class' => 'form-control'],
                'label' => 'Nazwa użytkownika'
            ])
            ->add('e_mail',EmailType::class,[
                'row_attr' => [ 'class' => 'form-floating mb-3'],
                'attr' => [ 'class' => 'form-control'],
                'label' => 'Adres e-mail'
            ])
            ->add('Comment',TextType::class,[
        'row_attr' => [ 'class' => 'form-floating mb-3'],
        'attr' => [ 'class' => 'form-control'],
        'label' => 'Wpisz komentarz'
    ])
            ->add('Submit',SubmitType::class,[
        'attr' => [ 'class' => 'w-100 btn btn-lg btn-primary'],
        'label' => 'Wyślij'
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

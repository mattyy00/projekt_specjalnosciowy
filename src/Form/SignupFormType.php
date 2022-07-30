<?php

namespace App\Form;

use App\Entity\Signup;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SignupFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $formTypeOptions=[

            'row_attr' =>[
                'class' => 'form-floating mb-3',
            ],
            'label_attr' =>[
                'class' => 'col-form-label',
            ],
            'attr' =>[
                'class' => 'form-control',
            ],
            'label' => 'Siema'
        ];

        $builder
            ->add('name1',TextType::class,[
                'row_attr' =>[
                    'class' => 'form-floating mb-3',
                ],
                'attr' =>[
                    'class' => 'form-control',
                ],
                'label' => 'Imię'
            ])
            ->add('name2',TextType::class,[
                'row_attr' =>[
                    'class' => 'form-floating mb-3',
                ],
                'label_attr' =>[
                    'class' => 'col-form-label',
                ],
                'attr' =>[
                    'class' => 'form-control',
                ],
                'label' => 'Nazwisko'
            ])
            ->add('e_mail',EmailType::class,[
                'row_attr' =>[
                    'class' => 'form-floating mb-3',
                ],
                'label_attr' =>[
                    'class' => 'col-form-label',
                ],
                'attr' =>[
                    'class' => 'form-control',
                ],
                'label' => 'Adres e-mail'
            ])
            ->add('phone',TelType::class,[
                'row_attr' =>[
                    'class' => 'form-floating mb-3',
                ],
                'label_attr' =>[
                    'class' => 'col-form-label',
                ],
                'attr' =>[
                    'class' => 'form-control',
                ],
                'label' => 'Numer tel'
            ])
            ->add('course',ChoiceType::class,[
                'row_attr' =>[
                    'class' => 'checkbox mb-3',
                ],
                'choices' =>[
                    'HTML' => 1,
                    'CSS' => 2,
                    'PHP' => 3,
                    'Symfony' => 4,
                ],
                'attr' =>[
                    'class' => 'form-select',
                ],
                'label' => 'Wybierz kurs'
            ])
            ->add('Submit',SubmitType::class,[
                'attr' =>[
                    'class' => 'w-100 btn btn-lg btn-primary',
                ],
                'label' => 'Zapisz się',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Signup::class,
        ]);
    }
}

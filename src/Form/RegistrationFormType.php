<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Vich\UploaderBundle\Form\Type\VichFileType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageFile',VichFileType::class,[
                'label'=>false,
                'attr'=>
                    ['placeholder'=>'Choose an image',
                        'button_label'=>'Import']

            ])
            ->add('prenomUser',TextType::class,['label'=>false,'attr'=>['placeholder'=>'Firstname','class'=>'form-control']])
            ->add('nomUser',TextType::class,['label'=>false,'attr'=>['placeholder'=>'Lastname','class'=>'form-control']])
            ->add('dateNaiss',DateType::class,[ 'placeholder' => [
                'Year' => 'Year', 'Month' => 'Month', 'Day' => 'Day'],'years' => range(date('Y') - 100, date('Y'))])// Range of 100 years from now])
            ->add('telUser',TextType::class,['label'=>false,'attr'=>['placeholder'=>'Phone number','class'=>'form-control']])
            ->add('sexe',ChoiceType::class,['label'=>false,'attr'=>['class'=>'form-control'],'choices'=>[
                'Female'=>'Female',
                'Male'=>'Male',
            ],'expanded'=>true])
            ->add('adresse',ChoiceType::class,[
                'choices'=>[
                    'Tunis'=>'Tunis',
                    'Sfax'=>'Sfax',
                    'Sousse'=>'Sousse',
                    'Kairouan'=>'Kairouan',
                    'Métouia'=>'Métouia',
                    'Kebili'=>'Kebili',
                    'Bizerte'=>'Bizerte',
                    'Sidi Bouzid'=>'Sidi Bouzid',
                    'Gabés'=>'Gabés',
                    'Ariana'=>'Ariana',
                    'Béja'=>'Béja',

                ]
            ])
            ->add('role', ChoiceType::class, [
                'label' => false,'attr'=>['class'=>'form-control'],
                'choices' => [
                    'Artist' => 'artist',
                    'Client' => 'client',
                ],
                'expanded' => true
            ])

            ->add('email',TextType::class,['label'=>false,'attr'=>['placeholder'=>'Your email','class'=>'form-control']])
            ->add('password',PasswordType::class,['label'=>false,'attr'=>['placeholder'=>'Password','class'=>'form-control']])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Reclam;
use App\Entity\Typereclamation;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ReclamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',TextType::class,['label'=>false,'attr'=>['placeholder'=>'Title','class'=>'form-control']])
            ->add('description',TextareaType::class,['label'=>false,'attr'=>['placeholder'=>'Description','class'=>'form-control']])
            ->add('imageFile',VichImageType::class,[
                'label'=>false,
                'attr'=>
                    ['placeholder'=>'Choose an image',
                        'button_label'=>'Import']

            ])
            ->add('idtyper',EntityType::class,['label'=>false,'class'=>Typereclamation::class,'choice_label'=>'nom'])


        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclam::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Articles;
use App\Entity\Galeries;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Vich\UploaderBundle\Form\Type\VichFileType;
class ArticlesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titreArticle',TextType::class,['label'=>false,'attr'=>['placeholder'=>'Article Title','class'=>'form-control']])
            ->add('nomArtiste',TextType::class,['label'=>false,'attr'=>['placeholder'=>'Artist Name','class'=>'form-control']])
            ->add('prixArticle',NumberType::class,['label'=>false,'attr'=>['placeholder'=>'Price','class'=>'form-control']])
            ->add('descArticle',TextareaType::class,['label'=>false,'attr'=>['placeholder'=>'Description','class'=>'form-control']])
            ->add('quantiteArticle',IntegerType::class,['label'=>false,'attr'=>['placeholder'=>'Quantity','class'=>'form-control']])
            ->add('fileFile', VichFileType::class, [
                
                'label' => 'Choose an article ( image or video)',
            ])
            ->add('idGalerie',EntityType::class,['label'=>false,'class'=>Galeries::class,'choice_label'=>'titreGalerie','attr'=>['class'=>'form-control']])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Articles::class,
        ]);
    }
}

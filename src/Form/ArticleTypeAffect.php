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
class ArticleTypeAffect extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {$article = $options['data'] ?? null;
        $builder
            ->add('titreArticle',TextType::class,['label'=>'Article','disabled'=>true,'attr'=>['placeholder'=>'Article Title','class'=>'form-control']])
            ->add('idGalerie',EntityType::class,['label'=>'Gallery','class'=>Galeries::class,'choice_label'=>'titreGalerie','attr'=>['class'=>'form-control']])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Articles::class,
        ]);
    }
}

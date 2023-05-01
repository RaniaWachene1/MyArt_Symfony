<?php

namespace App\Form;

use App\Entity\Galeries;
use App\Entity\Articles;
use App\Form\ArticleTypeAffect;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DeleteType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
    
        ->add('articles', CollectionType::class, [
            'entry_type' => ArticleTypeAffect::class,
            'entry_options' => [
                'label' => false,
                'attr' => ['class' => 'article'],
            ],
        ])

    ;


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}

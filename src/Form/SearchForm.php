<?php

namespace App\Form;

use App\Data\SearchLivre;
use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Language;
use App\Entity\Level;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Rechercher'
                ]
            ])
            ->add('categories', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Categorie::class
            ])
            ->add('levels', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Level::class
            ])
            ->add('languages', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Language::class
            ])
            ->add('auteurs', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Auteur::class
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SearchLivre::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }

}
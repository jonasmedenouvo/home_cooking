<?php

namespace AppBundle\Form;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecipeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',TextType::class,array('label'=>'Nom'))
                ->add('description')
                ->add('ingredients')
                ->add('fullrecipe',CKEditorType::class,array('label' => 'Préparation:'))
                ->add('duration',TimeType::class,array('label' => 'Durée de préparation'))
                ->add('type',ChoiceType::class,array('choices'
                    => array('Dessert'=> true,'Plat Principal' => true,'Entrée' => true,)))
                ->add('image',FileType::class, array('data_class' => null))
                ->add('save',SubmitType::class, array('label' => 'Sauvegarder'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Recipe'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_recipe';
    }


}

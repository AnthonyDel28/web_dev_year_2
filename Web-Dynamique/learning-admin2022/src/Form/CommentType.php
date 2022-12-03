<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
          ->add('title', TextType::class, [
            'label' => 'Titre du commentaire',
          ])
          ->add('rating', ChoiceType::class, [
            'label'       => 'Note du commentaire',
            'placeholder' => 'Sélectionnez...',
            'choices'     => [
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
            ]
          ])
          ->add('comment', TextareaType::class, [
            'label' => 'Texte du commentaire',
          ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}

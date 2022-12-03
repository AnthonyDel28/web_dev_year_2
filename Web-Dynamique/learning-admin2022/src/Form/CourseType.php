<?php

namespace App\Form;

use App\Entity\Course;
use App\Entity\CourseCategory;
use App\Entity\CourseLevel;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CourseType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $builder
      ->add('name', TextType::class, [
        'label' => 'Nom du cours',
      ])
      ->add('smallDescription', TextType::class, [
        'label' => 'Description courte',
      ])
      ->add('fullDescription', CKEditorType::class, [
        'label' => 'Description complète',
      ])
      ->add('duration', IntegerType::class, [
        'label' => 'Durée de la formation',
      ])
      ->add('price', MoneyType::class, [
        'label' => 'Prix de la formation',
      ])
      ->add('imageFile', VichImageType::class, [
        'label' => 'image du cours',
        'required' => false,
        'allow_delete' => false,
        'download_uri' => false,
      ])
      ->add('programFile', VichFileType::class, [
        'label' => 'Programme de la formation',
        'required' => false,
        'allow_delete' => false,
        'download_uri' => false,
      ])
      ->add('category', EntityType::class, [
        'label' => 'Catégorie de la formation',
        'placeholder' => 'Sélectionnez...',
        'class' => CourseCategory::class,
        'query_builder' => function(EntityRepository $repository) {
          return $repository->createQueryBuilder('c')->orderBy('c.name', 'ASC');
        },
        'choice_label' => 'name',
      ])
      ->add('level', EntityType::class, [
        'label' => 'Niveau de la formation',
        'placeholder' => 'Sélectionnez...',
        'class' => CourseLevel::class,
        'choice_label' => 'name',
      ])
    ;
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults([
      'data_class' => Course::class,
    ]);
  }
}

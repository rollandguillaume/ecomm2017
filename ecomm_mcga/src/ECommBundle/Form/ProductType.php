<?php
namespace ECommBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use ECommBundle\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProductType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('nom', TextType::class)
    ->add('description', TextType::class)
    ->add('prix', MoneyType::class, array(
      'currency' => false
    ))
    ->add('quantity', IntegerType::class)
    ->add('category', EntityType::class, array(
      // query choices from this entity
      'class' => 'ECommBundle:Category',

      'choice_label' => 'name',
    ))
    ->add('imagefile', FileType::class)
    ->add('save', SubmitType::class)
    ;
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => Product::class,
    ));
  }
}

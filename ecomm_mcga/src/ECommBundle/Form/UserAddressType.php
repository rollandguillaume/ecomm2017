<?php
namespace ECommBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

use ECommBundle\Entity\UserAddress;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserAddressType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('name', TextType::class)
    ->add('lastname', TextType::class)
    ->add('state', TextType::class)
    ->add('phone', NumberType::class)
    ->add('address', TextType::class)
    ->add('address2', TextType::class)
    ->add('zip', NumberType::class)
    ->add('city', TextType::class)
    ;
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => UserAddress::class,
    ));
  }
}

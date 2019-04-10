<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DeutorType extends AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('name', TextType::class, ['label' => 'Deudor'])
      ->add('cif', TextType::class, ['label' => 'CIF/NIF'])
      ->add('phone', TextType::class, ['label' => 'Teléfono'])
      ->add('contact', TextType::class, ['label' => 'Persona de contacto'])
      ->add('address', TextType::class, ['label' => 'Dirección'])
      ->add('postalCode', TextType::class, ['label' => 'Código postal'])
      ->add('city', TextType::class, ['label' => 'Población'])
      ->add('email', EmailType::class, ['label' => 'Email'])
      ->add('date', DateType::class, ['label' => 'Fecha', 'widget' => 'single_text'])
      ->add('ammount', NumberType::class, ['label' => 'Importe'])
    ;
  }
}
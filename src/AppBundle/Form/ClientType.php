<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ClientType extends AbstractType {
	
	public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('name', TextType::class, ['label' => 'Cliente (nombre fiscal)', 'required' => true])
      ->add('cif', TextType::class, ['label' => 'CIF/NIF'])
      ->add('phone', TextType::class, ['label' => 'Teléfono'])
      ->add('contact', TextType::class, ['label' => 'Persona de contacto'])
      ->add('address', TextType::class, ['label' => 'Dirección'])
      ->add('postalCode', TextType::class, ['label' => 'Código postal'])
      ->add('city', TextType::class, ['label' => 'Población'])
      ->add('email', EmailType::class, ['label' => 'Email'])
      ->add('comments', TextareaType::class, ['label' => 'Comentarios'])
      ->add('deutors', CollectionType::class, [
        'entry_type' => DeutorType::class,
        'entry_options' => ['label' => false],
        'allow_add' => true,
      ])
    ;
  }
}
<?php
namespace digit\synergyBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('type');
}
public function getName()
{
return 'type';
}

public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$resolver->setDefaults(array(
'type' => 'digit\synergyBundle\Entity\Type'
));
}
}
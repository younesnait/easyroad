<?php

namespace digit\synergyBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AreaType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('area');
}
public function getName()
{
return 'area';
}

public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$resolver->setDefaults(array(
'area' => 'digit\synergyBundle\Entity\Area'
));
}
}
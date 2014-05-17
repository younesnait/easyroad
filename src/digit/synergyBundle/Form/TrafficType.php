<?php

namespace digit\synergyBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TrafficType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('title')
->add('description')
->add('startingtime')
->add('endingtime')
->add('largitude')
->add('longitude')


->add('save', 'submit');
}
public function getName()
{
return 'title';
}

public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$resolver->setDefaults(array(
'trafficjam' => 'digit\synergyBundle\Entity\Trafficjam',
'cascade_validation' => true,
));
}
}
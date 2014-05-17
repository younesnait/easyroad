<?php
namespace digit\synergyBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('user');
}
public function getName()
{
return 'user';
}

public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$resolver->setDefaults(array(
'user' => 'digit\synergyBundle\Entity\User'
));
}
}
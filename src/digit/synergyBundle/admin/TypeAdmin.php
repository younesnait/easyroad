<?php

namespace digit\synergyBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use digit\synergyBundle\Entity\Type;
 
class TypeAdmin extends Admin
{
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'type'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('type')
            
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('type')
           
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('type')
            
            ->add('_action', 'actions', array(
            'actions' => array(
                'view' => array(),
                'calculate' => array('template' => 'digitsynergyBundle:CRUD:list__action_calculate.html.twig'),
                'edit' => array(),
            )
        ))
        ;
    }
}
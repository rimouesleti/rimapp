<?php
/**
 * Created by PhpStorm.
 * User: roueslati
 * Date: 12/06/2018
 * Time: 16:53
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class VisitorAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('firstName');
        $formMapper->add('lastName');
        $formMapper->add('email');
        $formMapper->add('phone');
        $formMapper->add('address');
        $formMapper->add('postal');
        $formMapper->add('city');

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('firstName');

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('firstName');
        $listMapper->add('lastName');
        $listMapper->add('email');
        $listMapper->add('phone');
        $listMapper->add('address');
        $listMapper->add('postal');
        $listMapper->add('city');
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('name')
            ->assertLength(['max' => 32])
            ->end()
        ;
    }
}
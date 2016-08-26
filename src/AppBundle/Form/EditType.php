<?php

// src/AppBundle/Form/EditType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('domain');
        $builder->add('position');
        $builder->add('phone');
        $builder->add('fax');
        $builder->add('FOAF');
        $builder->add('photo');
        $builder->add('resumePdf');
        $builder->add('resumeLatex');
        $builder->add('hindex');
        $builder->add('qrcode');
		$builder->add('page');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_edit';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}

?>

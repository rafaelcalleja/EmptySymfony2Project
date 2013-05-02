<?php

namespace Acme\DemoBundle\Admin\Document;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use FOS\UserBundle\Model\UserManagerInterface;

class UserAdmin extends Admin
{
    protected $formOptions = array(
        'validation_groups' => 'Profile'
    );

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('email')
            ->add('roles')
            ->add('enabled', null, array('editable' => true))
            ->add('locked', null, array('editable' => true))
            ->add('createdAt')
        ;

        if ($this->isGranted('ROLE_ALLOWED_TO_SWITCH')) {
            $listMapper
                ->add('impersonating', 'string', array('template' => 'SonataUserBundle:Admin:Field/impersonating.html.twig'))
            ;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $filterMapper)
    {
    	
        $filterMapper
            ->add('id', 'doctrine_mongo_number')
            ->add('username', 'doctrine_mongo_choice')
            ->add('locked')
            ->add('enabled') 
            ->add('email', 'doctrine_mongo_choice')
            ->add('groups', 'doctrine_mongo_model', array('field_options' => array('class' => 'ApplicationSonataUserBundle:Group'), 'field_mapping' => true))
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('General')
                ->add('username')
                ->add('email')
            ->end()
            ->with('Groups')
                ->add('groups')
            ->end()
            ->with('Profile')
                ->add('dateOfBirth', 'birthday')
                ->add('firstname')
                ->add('lastname')
                ->add('website')
                ->add('biography')
                ->add('gender')
                ->add('locale')
                ->add('timezone')
                ->add('phone')
            ->end()
            ->with('Social')
                ->add('facebookUid')
                ->add('facebookName')
                ->add('twitterUid')
                ->add('twitterName')
                ->add('gplusUid')
                ->add('gplusName')
            ->end()
            ->with('Security')
                ->add('token')
                ->add('twoStepVerificationCode')
            ->end()
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('username')
                ->add('email')
                ->add('plainPassword', 'text', array('required' => false))
            ->end()
            ->with('Groups')
                ->add('groups', 'sonata_type_model', array('class'    => 'ApplicationSonataUserBundle:Group', 'required' => false, 'expanded' => true, 'multiple' => true))
            ->end()
            ->with('Profile')
                ->add('dateOfBirth', 'birthday', array('required' => false))
                ->add('firstname', 'text', array('required' => false))
                ->add('lastname', 'text', array('required' => false))
                ->add('website', 'url', array('required' => false))
                ->add('biography', 'text', array('required' => false))
                ->add('gender', 'textarea', array('required' => false))
                ->add('locale', 'locale', array('required' => false))
                ->add('timezone', 'timezone', array('required' => false))
                ->add('phone', 'text', array('required' => false))
            ->end()
            ->with('Social')
                ->add('facebookUid', 'text', array('required' => false))
                ->add('facebookName', 'text', array('required' => false))
                ->add('twitterUid', 'text', array('required' => false))
                ->add('twitterName', 'text', array('required' => false))
                ->add('gplusUid', 'text', array('required' => false))
                ->add('gplusName', 'text', array('required' => false))
            ->end()
        ;

        if (!$this->getSubject()->hasRole('ROLE_SUPER_ADMIN')) {
            $formMapper
                ->with('Management')
                    ->add('roles', 'sonata_security_roles', array(
                        'expanded' => true,
                        'multiple' => true,
                        'required' => false
                    ))
                    ->add('locked', null, array('required' => false))
                    ->add('expired', null, array('required' => false))
                    ->add('enabled', null, array('required' => false))
                    ->add('credentialsExpired', 'sonata_type_boolean', array('required' => false))
                ->end()
            ;
        }

        $formMapper
            ->with('Security')
                ->add('token', 'text', array('required' => false))
                ->add('twoStepVerificationCode', 'text', array('required' => false))
            ->end()
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function preUpdate($user)
    {
        $this->getUserManager()->updateCanonicalFields($user);
        $this->getUserManager()->updatePassword($user);
    }

    /**
     * @param UserManagerInterface $userManager
     */
    public function setUserManager(UserManagerInterface $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * @return UserManagerInterface
     */
    public function getUserManager()
    {
        return $this->userManager;
    }
}

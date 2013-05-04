<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;

class TwitterController extends Controller {
    
    public function indexAction(){
    	
    	$api = $this->get('fos_twitter.api');
    	
    	$query = 'Cristiano Ronaldo';
    	
    	$result = $api->get('https://api.twitter.com/1.1/search/tweets.json', array('q' => $query) );

    	
    	
    	var_dump(get_object_vars($result)); 
    
        return array();
    }

    
    public function contactAction()
    {
        $form = $this->get('form.factory')->create(new ContactType());

        $request = $this->get('request');
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $mailer = $this->get('mailer');
                // .. setup a message and send it
                // http://symfony.com/doc/current/cookbook/email.html

                $this->get('session')->getFlashBag()->set('notice', 'Message sent!');

                return new RedirectResponse($this->generateUrl('_demo'));
            }
        }

        return array('form' => $form->createView());
    }
}

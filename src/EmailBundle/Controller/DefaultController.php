<?php

namespace EmailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $email = $this->get('email.email');
        $email->getEmails();
        die();
        return $this->render('EmailBundle:Default:index.html.twig', array());
    }
}

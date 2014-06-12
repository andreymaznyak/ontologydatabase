<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MetaOntologyBundle:Default:index.html.twig', array('name' => $name));
    }
}

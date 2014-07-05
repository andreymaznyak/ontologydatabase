<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CreateDataBaseController extends Controller
{
    public function wizardAction(){
        
        return $this->render('MetaOntologyBundle:CreateDataBase:index.html.twig', array());
        
    }
}


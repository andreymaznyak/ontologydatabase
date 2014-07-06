<?php

namespace Meta\ClassificationLegalEntitiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('MetaClassificationLegalEntitiesBundle:Default:index.html.twig');
    }
}

<?php

namespace Meta\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MetaResumeBundle:Default:index.html.twig');
    }
}

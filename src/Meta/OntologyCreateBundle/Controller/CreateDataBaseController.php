<?php

namespace Meta\OntologyCreateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Console\NullOutput;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class CreateDataBaseController extends Controller
{
    public function wizardAction(){
        
        return $this->render('MetaOntologyBundle:CreateDataBase:index.html.twig', array());
    }
    public function createAction(){
//        $em = $this->getDoctrine()->getEntityManager();
//        $qb = $em->createQueryBuilder();
//        $q = $qb
//              ->select("c.id")
//              ->addSelect("IF(c.parent IS NULL, c.name, CONCAT(CONCAT(t.name, ' / '), c.name))")
//              ->from("MetaOntologyCreateBundle:Ontology", "c")
//              ->leftJoin("c.parent", "t");
        

        $input = new ArgvInput(Array('generate:bundle','--namespace=Test/TestBundle','--dir=src','--no-interaction'));
        $env = $input->getParameterOption(array('--env', '-e'), getenv('SYMFONY_ENV') ?: 'dev');
        $debug = getenv('SYMFONY_DEBUG') !== '0' && !$input->hasParameterOption(array('--no-debug', '')) && $env !== 'prod';
        
        $kernel = new AppKernel($env, $debug);
        $application = new Application($kernel);
        //file_put_contents ( __DIR__.'/logs/mylog.txt' , serialize($input) );
        $output = new \Symfony\Component\Console\Output\NullOutput();
        try{
//            $application->run($input,$output);
        }
        finally{
            return new Response('<html><body>Hello world!</body></html>');
        }
        $logger = $this->get('logger');
        $logger->info('I just got the logger');
        $logger->error('An error occurred');
//        echo $q->getQuery()->getSQL();
        return new RedirectResponse($this->generateUrl('createdatabase_wizard'));
    }
}


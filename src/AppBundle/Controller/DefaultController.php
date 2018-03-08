<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(){

        $data = array( "klesti", "deni", "testing");

        return $this->render('default/klesti.html.twig', [
            "data" => $data
        ]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function testAction(){

        $data = array( "klesti", "deni", "testing");
        $test = array(1, 2, 3);

        return $this->render('default/test.html.twig', [
            'data' => $data,
            'test' => $test
        ]);
    }
}

<?php

namespace Shandong\OperaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ShandongOperaBundle:Default:index.html.twig', array('name' => $name));
    }
}

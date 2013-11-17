<?php

namespace Shandong\OperaAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ShandongOperaAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Shandong\OperaAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Shandong\OperaAdminBundle\Entity\NewsClasses;
use Symfony\Component\HttpFoundation\Request;

class NewsclassController extends Controller
{
    public function AddBigClassAction($name = 'roy')
    {
    $nc = new NewsClasses;
    $form = $this->createFormBuilder($nc)
        ->add('nClassname', 'text')
	->add('pOrder', 'text')
	->add('save', 'submit')
        ->getForm();

	return $this->render('ShandongOperaAdminBundle:newsclass:newsclass.html.twig', array(
	                'form' => $form->createView(),
		        ));
    }
}

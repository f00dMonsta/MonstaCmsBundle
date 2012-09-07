<?php

namespace Monsta\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MonstaCmsBundle:Default:index.html.twig', array('name' => $name));
    }
}

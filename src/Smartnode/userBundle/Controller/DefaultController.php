<?php

namespace Smartnode\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SmartnodeuserBundle:Default:index.html.twig', array('name' => $name));
    }
}

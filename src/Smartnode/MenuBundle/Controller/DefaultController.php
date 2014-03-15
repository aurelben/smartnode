<?php

namespace Smartnode\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SmartnodeMenuBundle:Default:index.html.twig', array('name' => $name));
    }
}

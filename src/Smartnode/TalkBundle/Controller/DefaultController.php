<?php

namespace Smartnode\TalkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SmartnodeTalkBundle:Default:index.html.twig', array('name' => $name));
    }
}

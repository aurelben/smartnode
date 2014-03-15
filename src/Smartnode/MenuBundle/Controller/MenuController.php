<?php

namespace Smartnode\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SmartnodeMenuBundle:Menu:index.html.twig', array('name' => $name));
    }



    public function displayMenuAction() {

        $em = $this->getDoctrine()->getManager();
        $chanrepo = $em->getRepository('SmartnodeTalkBundle:Chan');
        $chanlist = $chanrepo->findAll();

        $chanmenu = array();
        foreach ($chanlist as $chanview) {

            $chanmenu[] = array('channame'=> $chanview->getChanname(), $this->generateUrl('smartnode_talk_chanview', array('id' => $chanview->getId())));

        }

        $primary_menu = array(
            array(
                'title' => 'Channel',
                'url' => $this->generateUrl('smartnode_talk_chanview', array('id' => 1)),
                'child' => $chanmenu
            ),
        );
        return $this->render('SmartnodeMenuBundle:Menu:primary_menu.html.twig', array('menu' => $primary_menu));




    }
}






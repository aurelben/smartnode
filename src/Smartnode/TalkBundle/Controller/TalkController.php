<?php

namespace Smartnode\TalkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TalkController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SmartnodeTalkBundle:Default:index.html.twig', array('name' => $name));
    }

    public function chanAction()
    {
        return new Response("Acccueil page des chan");
    }

    public function addChanAction()
    {
        $chan = new Chan();
        $chan->setTitle('Mon chan');

        $form = $this->createForm(new ChanType(), $chan);

        return $this->render('SmartnodeTalkBundle:Chan:addchan.html.twig', array('formulaire' => $form->createView()));
    }

    public function viewChanAction($id)
    {
        return new Response("Acccueil page view du chan ".$id);
    }

    public function listChanAction()
    {
        return new Response("Acccueil page list des chan");
    }

    public function updateChanAction($id)
    {
        return new Response("Acccueil page update du chan ".$id);
    }

    public function delChanAction($id)
    {
        return new Response("Acccueil page delete du chan ".$id);
    }

    public function viewPostAction($id)
    {
        return new Response("Acccueil page du post ".$id);
    }

    public function addPostAction()
    {
        return new Response("Acccueil page add des posts");
    }

    public function listPostAction()
    {
        return new Response("Acccueil page list des posts");
    }

    public function updatePostAction($id)
    {
        return new Response("Acccueil page update du Post ".$id);
    }

    public function delPostAction($id)
    {
        return new Response("Acccueil page delete du Post ".$id);
    }






}



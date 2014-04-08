<?php

namespace Smartnode\TalkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Smartnode\TalkBundle\Entity\Chan;
use Smartnode\TalkBundle\Entity\Post;
use Smartnode\TalkBundle\Form\ChanType;
use Smartnode\TalkBundle\Form\PostType;
use Smartnode\TalkBundle\Form\PostChanType;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class TalkController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmartnodeTalkBundle:Default:index.html.twig', array());
    }

    public function chanAction()
    {
        return new Response("Acccueil page des chan");
    }

    public function addChanAction(Request $request)
    {
        $chan = new Chan();
        $chan->setChanname('Mon chan');
        $user = $this->getUser();
        $form = $this->createForm(new ChanType(), $chan);



        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $chan->setCreationdate(new \DateTime('now'));
            $chan->setOwnerid($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($chan);
            $em->flush();
            return $this->redirect($this->generateUrl('smartnode_talk_chanview', array('id' => $chan->getId())));
        }

        return $this->render('SmartnodeTalkBundle:Talk:addchan.html.twig', array('formulaire' => $form->createView()));
    }

    public function viewChanAction($id, $_format, Request $request)
    {
        $session = $request->getSession();

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('SmartnodeTalkBundle:Chan');
        $chan = $repository->find($id);
        //$posts->$this->setPostchan($id);
        $session->set('chanid', $id);

        $postrepo = $em->getRepository('SmartnodeTalkBundle:Post');
        $listpost = $postrepo->findByPostchan($id);



        $chanid = $session->get('chanid');
        $post = new Post();

        $user = $this->getUser();

        $form = $this->createForm(new PostChanType(), $post);
        $form->handleRequest($request);

        //echo "<pre>";print_r($request);echo "</pre>";
        //echo $request->getMethod();
        //echo $chanid;



        //$form->bind($request);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $post->setCreationdate(new \DateTime('now'));
            $post->setPostowner($user);
            //$chanid->$this->;
            $post->setPostchan($chanid);
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();



            return $this->redirect($this->generateUrl('smartnode_talk_post', array('id' => $post->getId())));
        }




        if($chan == null) {
            throw $this->createNotFoundException('Channel inexistant.');
        }

        switch ($_format) {
            case 'json':
                $response = new Response(json_encode(array('chan' => $chan, 'post' => $listpost)));
            $response->headers->set('Content-Type', 'application/json');
            return $response;

                break;

            default:
                return $this->render('SmartnodeTalkBundle:Talk:viewchan.html.twig', array('chan' => $chan, 'post' => $listpost, 'formulaire' => $form->createView()));
                break;
        }


        //return new Response("Acccueil page view du chan ".$id);
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

    public function addPostAction(Request $request)
    {

        $post = new Post();

        $user = $this->getUser();

        $form = $this->createForm(new PostType(), $post);
        //$form = $this->get('smartnode_talk.type.talk');


        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $post->setCreationdate(new \DateTime('now'));
            $post->setPostowner($user);

            //$post->setPostchan($chanid);
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            return $this->redirect($this->generateUrl('smartnode_talk_post', array('id' => $post->getId())));
        }

        return $this->render('SmartnodeTalkBundle:Talk:addpost.html.twig', array('formulaire' => $form->createView()));
    }

    public function addPostChanAction(Request $request)
    {
        $session = $request->getSession();
        $chanid = $session->get('chanid');
        $post = new Post();

        $user = $this->getUser();

        $form = $this->createForm(new PostChanType(), $post);
        $form->handleRequest($request);

        //echo "<pre>";print_r($request);echo "</pre>";
        //echo $request->getMethod();
        //echo $chanid;


        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $post->setCreationdate(new \DateTime('now'));
            $post->setPostowner($user);
            //$chanid->$this->;
            $post->setPostchan($chanid);
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();



            return $this->redirect($this->generateUrl('smartnode_talk_post', array('id' => $post->getId())));
        }



        return $this->render('SmartnodeTalkBundle:Talk:addpostchan.html.twig', array('formulaire' => $form->createView()));




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





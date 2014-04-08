<?php

namespace Smartnode\TalkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Smartnode\TalkBundle\Entity\Chan;
use Smartnode\TalkBundle\Entity\Post;
use Smartnode\TalkBundle\Form\ChanType;
use Smartnode\TalkBundle\Form\PostType;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\Get;

class TalkRestController extends Controller
{
    /**
     * GET Route annotation.
     * @Get("/chans/{idchan}")
     */
  public function getChanPostAction ($idchan){
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('SmartnodeTalkBundle:Post');
        $chanpost = $repository->findByPostchan($idchan);

        /*if(!is_object($chanpost)){
            throw $this->createNotFoundException();
        }*/
        return $chanpost ;
    }



}

<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // smartnode_talk_hellopage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartnode_talk_hellopage')), array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\DefaultController::indexAction',));
        }

        // smartnode_talk_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'smartnode_talk_homepage');
            }

            return array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::indexAction',  '_route' => 'smartnode_talk_homepage',);
        }

        if (0 === strpos($pathinfo, '/chan')) {
            // smartnode_talk_chan
            if ($pathinfo === '/chan') {
                return array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::chanAction',  '_route' => 'smartnode_talk_chan',);
            }

            // smartnode_talk_chanadd
            if ($pathinfo === '/chan/add') {
                return array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\talkController::addChanAction',  '_route' => 'smartnode_talk_chanadd',);
            }

            // smartnode_talk_chanview
            if (0 === strpos($pathinfo, '/chan/view') && preg_match('#^/chan/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartnode_talk_chanview')), array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::viewChanAction',));
            }

            // smartnode_talk_chanlist
            if ($pathinfo === '/chan/list') {
                return array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::listChanAction',  '_route' => 'smartnode_talk_chanlist',);
            }

            // smartnode_talk_chanupdate
            if (0 === strpos($pathinfo, '/chan/update') && preg_match('#^/chan/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartnode_talk_chanupdate')), array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::updateChanAction',));
            }

            // smartnode_talk_chandel
            if (0 === strpos($pathinfo, '/chan/del') && preg_match('#^/chan/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartnode_talk_chandel')), array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::delChanAction',));
            }

        }

        if (0 === strpos($pathinfo, '/post')) {
            // smartnode_talk_post
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartnode_talk_post')), array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::viewPostAction',));
            }

            // smartnode_talk_postadd
            if ($pathinfo === '/post/add') {
                return array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::addPostAction',  '_route' => 'smartnode_talk_postadd',);
            }

            // smartnode_talk_postlist
            if (rtrim($pathinfo, '/') === '/post/list') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'smartnode_talk_postlist');
                }

                return array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::listPostAction',  '_route' => 'smartnode_talk_postlist',);
            }

            // smartnode_talk_postupdate
            if (0 === strpos($pathinfo, '/post/update') && preg_match('#^/post/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartnode_talk_postupdate')), array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::updatePostAction',));
            }

            // smartnode_talk_postdel
            if (0 === strpos($pathinfo, '/post/del') && preg_match('#^/post/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smartnode_talk_postdel')), array (  '_controller' => 'Smartnode\\TalkBundle\\Controller\\TalkController::delPostAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

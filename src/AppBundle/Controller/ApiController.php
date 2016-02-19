<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/api")
 */
class ApiController extends Controller
{
    /**
     * @Route("/hello")
     */
    public function helloAction()
    {
        return new JsonResponse(array('world' => 'world'));
    }
    public function getUserAction($username){
      $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneByUsernameCanonical($username);
      if(!is_object($user)){
        throw $this->createNotFoundException();
      }
      return $user;
    }

    /**
    *
    */
    public function getMeAction(){
     $this->forwardIfNotAuthenticated();
     return $this->getUser();
    }

    /**
    * Shortcut to throw a AccessDeniedException($message) if the user is not authenticated
    * @param String $message The message to display (default:'warn.user.notAuthenticated')
    */
    protected function forwardIfNotAuthenticated($message='warn.user.notAuthenticated'){
     if (!is_object($this->getUser()))
     {
         throw new AccessDeniedException($message);
     }
    }
    public function getProjetAction($nomProjet){
     $user = $this->getDoctrine()->getRepository('CoolLabBundle:Projet')->findOneByNom($nomProjet);
     if(!is_object($user)){
       throw $this->createNotFoundException();
     }
     return $user;
    }
    /**
     * @Route("/todos")
     */
    public function todosAction()
    {
        $todos = array(
            array('text'=>'learn angular', 'done'=>true),
            array('text'=>'build an angular app', 'done'=>false),
            );
        return new JsonResponse($todos);
    }
}

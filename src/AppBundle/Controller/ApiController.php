<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use AppBundle\Entity\Projet;
use AppBundle\Entity\Ticket;


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
      $repository = $this
      ->getDoctrine()
      ->getManager()
      ->getRepository('AppBundle:User')
      ;
      $user = $repository->findOneByUsernameCanonical($username);
      if(!is_object($user)){
        throw $this->createNotFoundException();
      }
      $serializer = $this->container->get('serializer');
      $reports = $serializer->serialize($user, 'json');
      return new Response($reports);
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

    public function getProjetsAction($username){
              $repository = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:Developpeur')
        ;
        $listAdverts = $repository->findByNom($username);
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($listAdverts, 'json');
        return new Response($reports); // should be $reports as $doctrineobject is not serialized
    //  return new JsonResponse($listAdverts);
    }
    public function postProjetAction(Request $request){
      $em = $this->getDoctrine()->getManager();
      $chef = $em->getRepository('AppBundle:Developpeur')->findOneById(intval($request->get('idchef')));;
      $serializer = $this->container->get('serializer');
      $projet = new Projet();
      $projet->setNom($request->get('nom'));
      $projet->setDescription($request->get('description'));
      $projet->setCategorie($request->get('categorie'));
      $projet->setIdchef($chef);
      $projet->addIddev($chef);
      $chef->addIdproj($projet);
      $date = date('Y-m-d H:i:s');
      $projet->setDatecrea(new \DateTime($request->get('datecrea')));
      $em->persist($projet);
      $em->flush();

      return new Response($serializer->serialize($projet, 'json'));
    }
    public function postTicketAction(Request $request){
      $em = $this->getDoctrine()->getManager();
      $projet = $em->getRepository('AppBundle:Projet')->findOneById(intval($request->get('idproj')));
      $dev = $em->getRepository('AppBundle:Developpeur')->findOneById(intval($request->get('iddev')));
      $serializer = $this->container->get('serializer');
      $ticket = new Ticket();
      $ticket->setLibelle($request->get('nom'));
      $ticket->setDescription($request->get('description'));
      $ticket->setDatecrea(new \DateTime($request->get('datecrea')));
      $ticket->setIdproj($projet);
      $ticket->addIddev($dev);
      $dev->addIdtick($ticket);
      $em->persist($ticket);
      $em->flush();

      return new Response($serializer->serialize($ticket, 'json'));
    }
    public function postUpdateTicketAction($id, Request $request){
      $em = $this->getDoctrine()->getManager();
      $ticket = $em->getRepository('AppBundle:Ticket')->findOneById(intval($request->get('id')));
      $serializer = $this->container->get('serializer');

      $ticket->setEtat($request->get('etat'));
      $em->persist($ticket);
      $em->flush();
      return new Response($serializer->serialize($ticket, 'json'));
    }
    public function postDeleteTicketAction($id, Request $request){
      $em = $this->getDoctrine()->getManager();
      $ticket = $em->getRepository('AppBundle:Ticket')->findOneById(intval($request->get('id')));
      $serializer = $this->container->get('serializer');

      $em->remove($ticket);
      $em->flush();
      return new Response($serializer->serialize("deleted", 'json'));
    }
    /**
     * @Route("/tickets/{iddev}/{idproj}", requirements={"iddev" = "\w+","idproj" = "\w+"})
     */
    public function getTicketsAction($iddev,$idproj){
              $repository = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:Developpeur')
        ;
        $dev = $repository->findOneById($iddev);
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Projet')
        ;
        $projet = $repository->findOneById($idproj);
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Ticket')
        ;
        $projet = $repository->createQueryBuilder('t')
            ->select('t')
            ->innerJoin('t.iddev', 'd')
            ->where('d.id = :dev_id')
            ->andWhere('t.idproj = :proj_id')
            ->setParameter('dev_id', $iddev)
            ->setParameter('proj_id', $idproj)
            ->getQuery()->getResult();
        // $projet = $repository->findBy(array('iddev' => array($dev), 'idproj' =>  array($projet)));
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($projet, 'json');
        return new Response($reports); // should be $reports as $doctrineobject is not serialized
    //  return new JsonResponse($listAdverts);
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

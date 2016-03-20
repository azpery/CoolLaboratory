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
use JMS\Serializer\SerializationContext;

use AppBundle\Entity\Projet;
use AppBundle\Entity\Ticket;
use AppBundle\Entity\Discussion;
use AppBundle\Entity\Message;




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
      $reports = $serializer->serialize($user, 'json', SerializationContext::create()->enableMaxDepthChecks());
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

    public function getProjetsAction($id){
        $em = $this
          ->getDoctrine()
          ->getManager();
        $dev = $em->getRepository('AppBundle:Developpeur')->findById($id);
        if(count($em->getRepository('AppBundle:User')->findOneById($id)->getRoles()) >=2 ) {
          $proj = $em
            ->getRepository('AppBundle:Projet')
            ->findAll()
          ;
          foreach ($proj as $e) {
            $dev[0]->addIdproj($e);
          }

        }

        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($dev, 'json', SerializationContext::create()->enableMaxDepthChecks());
        return new Response($reports); // should be $reports as $doctrineobject is not serialized
    //  return new JsonResponse($listAdverts);
    }
    public function getRssAction($idproj){
              $repository = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:Rss')
        ;
        $projet = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Projet')
        ->findOneById($idproj)
        ;
        $listAdverts = $repository->findByIdproj($projet);
        $array=array();
        $place = false;
        $cpt=0;

        foreach ($listAdverts as $rss) {
          $cpt=0;
          $place=false;
          foreach ($array as $key ) {
            $cpt++;
            if($key["date"] == $rss->getPubdate()->format('Y-m-d') ){
              $place=true;
              break;
            }
          }
          if(!$place){
              $array[] = array("date"=>$rss->getPubdate()->format('Y-m-d'),"flux"=>array($rss));
          }else {
            $array[$cpt-1]["flux"][]=$rss;
          }

        }
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($array, 'json', SerializationContext::create()->enableMaxDepthChecks());
        return new Response($reports); // should be $reports as $doctrineobject is not serialized
    //  return new JsonResponse($listAdverts);
    }
    public function getOneProjetsAction($idProjet){
              $repository = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:Projet')
        ;
        $listAdverts = $repository->findOneById($idProjet);
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($listAdverts, 'json', SerializationContext::create()->enableMaxDepthChecks());
        return new Response($reports); // should be $reports as $doctrineobject is not serialized
    //  return new JsonResponse($listAdverts);
    }
    public function getTeamAction($idproj){
              $repository = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:Projet')
        ;
        $listAdverts = $repository->findOneById($idproj);
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($listAdverts->getIddev(), 'json', SerializationContext::create()->enableMaxDepthChecks());
        return new Response($reports); // should be $reports as $doctrineobject is not serialized
    //  return new JsonResponse($listAdverts);
    }
    public function getAllUserAction(){
              $repository = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:Developpeur')
        ;
        $listAdverts = $repository->findAll();
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($listAdverts, 'json', SerializationContext::create()->enableMaxDepthChecks());
        return new Response($reports); // should be $reports as $doctrineobject is not serialized
    //  return new JsonResponse($listAdverts);
    }
    public function getDiscussionAction($idproj){
              $repository = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:Discussion')
        ;
        $listAdverts = $repository->findByIdproj($idproj);
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($listAdverts, 'json', SerializationContext::create()->enableMaxDepthChecks());
        return new Response($reports); // should be $reports as $doctrineobject is not serialized
    //  return new JsonResponse($listAdverts);
    }
    public function getMessageAction($iddisc){
              $repository = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:Message')
        ;
        $listAdverts = $repository->findByIddisc($iddisc);
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($listAdverts, 'json', SerializationContext::create()->enableMaxDepthChecks());
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
      $em->persist($chef);
      $em->flush();

      return new Response($serializer->serialize($projet, 'json', SerializationContext::create()->enableMaxDepthChecks()));
    }
    public function postTicketAction(Request $request){
      $em = $this->getDoctrine()->getManager();
      $projet = $em->getRepository('AppBundle:Projet')->findOneById(intval($request->get('idproj')));
      $dev = $em->getRepository('AppBundle:Developpeur')->findById(intval($request->get('iddev')));
      $serializer = $this->container->get('serializer');
      $ticket = new Ticket();
      $ticket->setLibelle($request->get('nom'));
      $ticket->setDescription($request->get('description'));
      $ticket->setDatecrea(new \DateTime($request->get('datecrea')));
      $ticket->setIdproj($projet);
      foreach ($projet->getIddev() as $dev){
        $ticket->addIddev($dev);
        $dev->addIdtick($ticket);
        $em->persist($ticket);
        $em->flush();
        $em->persist($dev);
        $em->flush();
      }


      return new Response($serializer->serialize($ticket, 'json', SerializationContext::create()->enableMaxDepthChecks()));
    }
    public function postUpdateTicketAction($id, Request $request){
      $em = $this->getDoctrine()->getManager();
      $ticket = $em->getRepository('AppBundle:Ticket')->findOneById(intval($request->get('id')));
      $serializer = $this->container->get('serializer');

      $ticket->setEtat($request->get('etat'));
      $em->persist($ticket);
      $em->flush();
      return new Response($serializer->serialize($ticket, 'json', SerializationContext::create()->enableMaxDepthChecks()));
    }
    public function postDeleteTicketAction($id, Request $request){
      $em = $this->getDoctrine()->getManager();
      $ticket = $em->getRepository('AppBundle:Ticket')->findOneById(intval($request->get('id')));
      $serializer = $this->container->get('serializer');

      $em->remove($ticket);
      $em->flush();
      return new Response($serializer->serialize("deleted", 'json', SerializationContext::create()->enableMaxDepthChecks()));
    }
    public function postUpdateTeammateAction(Request $request){
      $em = $this->getDoctrine()->getManager();
      $projet = $em->getRepository('AppBundle:Projet')->findOneById(intval($request->get('idproj')));
      $user = $em->getRepository('AppBundle:Developpeur')->findOneById(intval($request->get('iddev')));
      $projet->addIddev($user);
      $user->addIdproj($projet);
      $em->persist($projet);
      $em->flush();
      $em->persist($user);
      $em->flush();
      $serializer = $this->container->get('serializer');
      return new Response($serializer->serialize($user, 'json', SerializationContext::create()->enableMaxDepthChecks()));
    }
    public function postDeleteTeammateAction(Request $request){
      $em = $this->getDoctrine()->getManager();
      $projet = $em->getRepository('AppBundle:Projet')->findOneById(intval($request->get('idproj')));
      $user = $em->getRepository('AppBundle:Developpeur')->findOneById(intval($request->get('iddev')));
      $projet->removeIddev($user);
      $user->removeIdproj($projet);
      $em->persist($projet);
      $em->flush();
      $em->persist($user);
      $em->flush();
      $serializer = $this->container->get('serializer');
      return new Response($serializer->serialize("Deleted", 'json', SerializationContext::create()->enableMaxDepthChecks()));
    }
    public function postDiscussionAction(Request $request){
      $em = $this->getDoctrine()->getManager();
      $repository =$em->getRepository('AppBundle:Projet');
      $projet = $repository->findOneById($request->get('idproj'));
      $discussion = new Discussion();
      $discussion->setDescription($request->get("description"));
      $discussion->setDatecreation(new \DateTime($request->get('datecrea')));
      $discussion->setEtat(0);
      $discussion->setIdproj($projet);
      $serializer = $this->container->get('serializer');
      $em->persist($discussion);
      $em->flush();
      return new Response($serializer->serialize($discussion, 'json', SerializationContext::create()->enableMaxDepthChecks()));
    }
    public function postMessageAction($iddisc, Request $request){
      $em = $this->getDoctrine()->getManager();
      $dev = $em->getRepository('AppBundle:Developpeur')->findOneById($request->get("iddev"));
      $disc = $em->getRepository('AppBundle:Discussion')->findOneById($iddisc);
      $message = new Message();
      $message->setMessage($request->get("description"));
      $message->setDateenvoi(new \DateTime($request->get('datecrea')));
      $message->setMessage($request->get('message'));
      $message->setIddev($dev);
      $message->setIddisc($disc);
      $em->persist($message);
      $em->flush();
      $serializer = $this->container->get('serializer');
      $reports = $serializer->serialize($message, 'json', SerializationContext::create()->enableMaxDepthChecks());
      return new Response($reports); // should be $reports as $doctrineobject is not serialized
    //  return new JsonResponse($listAdverts);
    }
    /**
     * @Route("/tickets/{iddev}/{idproj}", requirements={"iddev" = "\w+","idproj" = "\w+"})
     */
    public function getTicketsAction($iddev,$idproj){
        $em = $this
        ->getDoctrine()
        ->getManager();
        $repository =
        $em
        ->getRepository('AppBundle:Developpeur')
        ;
        $dev = $repository->findOneById($iddev);
        $repository =
        $em
        ->getRepository('AppBundle:Projet')
        ;
        $projet = $repository->findOneById($idproj);
        $repository =
        $em
        ->getRepository('AppBundle:Ticket')
        ;
        $projet = $repository->createQueryBuilder('t')
            ->select('t.id, t.libelle,t.description, t.etat')
            ->innerJoin('t.iddev', 'd')
            ->where('d.id = :dev_id')
            ->andWhere('t.idproj = :proj_id')
            ->setParameter('dev_id', $iddev)
            ->setParameter('proj_id', $idproj)
            ->getQuery()->getResult();
            if(count($em->getRepository('AppBundle:User')->findOneById($iddev)->getRoles()) >=2 ) {
              $projet =
              $em
              ->getRepository('AppBundle:Ticket')
              ->findByIdproj($idproj)
              ;

            }
        // $projet = $repository->findBy(array('iddev' => array($dev), 'idproj' =>  array($projet)));
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($projet, 'json', SerializationContext::create()->enableMaxDepthChecks());
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

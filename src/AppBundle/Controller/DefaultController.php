<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Entity\Developpeur;
use Symfony\Component\HttpKernel\Exception\HttpException;
use JMS\Serializer\SerializationContext;

/**
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    /**
     * @Route("/user")
     */
    public function getUserAction(){
      $repository = $this
      ->getDoctrine()
      ->getManager()
      ->getRepository('AppBundle:User')
      ;
      $user = $repository->findOneByUsernameCanonical("lol");
      if(!is_object($user)){
        throw $this->createNotFoundException();
      }
      $serializer = $this->container->get('serializer');
      $reports = $serializer->serialize($user->getRoles(), 'json', SerializationContext::create()->enableMaxDepthChecks());
      return new Response($reports);
    }
    /**
     * @Route("/{username}/salt", requirements={"username" = "\w+"})
     */
    public function saltAction($username)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $user = $userManager->findUserByUsername($username);
        if ( is_null($user) )
        {
            throw new HttpException(400, "Error User Not Found");
        }

        return new JsonResponse(array('salt' => $user->getSalt()));
    }
    /**
     * Generate the article feed
     *
     * @Route("/rss", defaults={"_format"="xml"})
     * @return Response XML Feed
     */
    public function rssAction()
    {
        $articles = $this->getDoctrine()->getRepository('AppBundle:Rss')->findAll();

        $feed = $this->get('eko_feed.feed.manager')->get('rss');
        $feed->addFromArray($articles);
        // $response->headers->set('Content-Type', 'xml');

        return new Response($feed->render('rss')); // or 'atom'
    }
    /**
     * @Route("/signup")
     */
    public function signup(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $chef = $em->getRepository('AppBundle:Developpeur');
      $serializer = $this->container->get('serializer');
      $user1 = new User() ;
      $user1->setEmail($request->get('email')) ;
      $user1->setEmailCanonical($request->get('email')) ;

      $user1->setUsername($request->get('username')) ;
      $user1->setUsernameCanonical($request->get('username')) ;
      $user1->setPlainPassword($request->get('password')) ;
      $user1->setEnabled(true) ;
      $user1->setRoles( array(User::ROLE_DEFAULT) ) ;
      $em->persist($user1);
      $em->flush();
      $developpeur = new Developpeur();
      $developpeur->setId($user1->getId());
      $developpeur->setNom($request->get('nom'));
      $developpeur->setPrenom($request->get('prenom'));
      $em->persist($developpeur);
      $metadata = $em->getClassMetaData(get_class($developpeur));
      $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
      $em->flush();
      $developpeur->setId($user1->getId());
      return new Response($serializer->serialize($user1, 'json'));
    }
    /**
     * @Route("/{username}/info", requirements={"username" = "\w+"})
     */
    public function infoAction($username)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $user = $userManager->findUserByUsername($username);
        if ( is_null($user) )
        {
            throw new HttpException(400, "Error User Not Found");
        }

        return new JsonResponse(array('username' => array('salt' => $user->getSalt())));
    }

}

<?php // AuthenticationListener.php

namespace AdminBundle\Event;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\Security\Http\SecurityEvents;

use ECommBundle\Entity\BigBrowser;

use ECommBundle\Entity\Category;

class AuthenticationListener extends Controller implements EventSubscriberInterface
{
  /**
  * @var EntityManagerInterface
  */
  protected $em;

  /**
  * @param EntityManagerInterface $em
  */
  public function __construct(Container $container)
  {
    $this->container = $container;
  }



  /**
  * getSubscribedEvents
  * @return 	array
  */
  public static function getSubscribedEvents()
  {
    return array(
      AuthenticationEvents::AUTHENTICATION_FAILURE => 'onAuthenticationFailure',
      SecurityEvents::INTERACTIVE_LOGIN => 'onAuthenticationSuccess',
    );
  }

  /**
  * onAuthenticationFailure
  * @param 	AuthenticationFailureEvent $event
  */
  public function onAuthenticationFailure( AuthenticationFailureEvent $event )
  {
    $em=$this->container->get('doctrine')->getManager();
    $identifiant=$event->getAuthenticationToken()->getUser();

    $userRepository=$em->getRepository('ECommBundle:User');
    $user=$userRepository->findOneByEmail($identifiant);
    if (null != $user){
      $tabroles=$user->getRoles();
      if (in_array('ROLE_VENDEUR',$tabroles)){
        $BigBrowser = new BigBrowser();
        $ip=$this->container->get('request_stack')->getMasterRequest()->getClientIp();
        $BigBrowser->setAuthentification(false);
        $BigBrowser->setIp($ip);
        $BigBrowser->setUtilisateur($user);
        $BigBrowser->setDate(new \DateTime());

        $em->persist($BigBrowser);
        $em->flush();
      }
    }
  }
  /**
  * onAuthenticationSuccess
  * @param 	AuthenticationEvent $event
  */
  public function onAuthenticationSuccess( 	InteractiveLoginEvent $event )
  {
    $em=$this->container->get('doctrine')->getManager();
    $identifiant=$event->getAuthenticationToken()->getUser();

    if (null != $identifiant){
      $tabroles=$identifiant->getRoles();
      if (in_array('ROLE_VENDEUR',$tabroles)){
        $BigBrowser = new BigBrowser();
        $ip=$this->container->get('request_stack')->getMasterRequest()->getClientIp();
        $BigBrowser->setAuthentification(true);
        $BigBrowser->setIp($ip);
        $BigBrowser->setUtilisateur($identifiant);
        $BigBrowser->setDate(new \DateTime());

        $em->persist($BigBrowser);
        $em->flush();
      }
    }
  }
}

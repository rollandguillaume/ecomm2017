<?php
namespace ECommBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class CommandesController extends Controller
{
  /**
   * Page d'accueil
   */
  public function validationAction()
  {

    return new Response("validation en cours de dev");
  }
}

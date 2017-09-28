<?php
namespace ECommBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
  /**
   * Page d'accueil
   */
  public function indexAction()
  {
    return $this->render('ECommBundle:Page:index.html.twig');
  }
}

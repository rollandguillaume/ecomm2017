<?php

namespace ECommBundle\Controller;


use ECommBundle\Entity\Produits;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ProduitsController extends Controller

{

  public function indexAction($page)

  {

    if ($page < 1) {

      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');

    }


    // Pour récupérer la liste de toutes les annonces : on utilise findAll()

    $listProduits = $this->getDoctrine()

      ->getManager()

      ->getRepository('ECommBundle:Produits')

      ->findAll()

    ;


    // L'appel de la vue ne change pas

    return $this->render('ECommBundle:Produits:index.html.twig', array(

      'listProduits' => $listProduits,

    ));

  }
}


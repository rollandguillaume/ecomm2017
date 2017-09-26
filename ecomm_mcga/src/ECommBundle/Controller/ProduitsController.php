<?php

namespace ECommBundle\Controller;


use ECommBundle\Entity\Produits;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ProduitsController extends Controller

{
  private $pagenotfound = 'la page demandée n\'existe pas';

  public function indexAction(Request $req, $page=1, $msgAjout="")
  {
    if ($page < 1) {
      throw new NotFoundHttpException($this->pagenotfound);
    } else {
      // Pour récupérer la liste de toutes les annonces : on utilise findAll()
      $listProduits = $this->getDoctrine()
      ->getManager()
      ->getRepository('ECommBundle:Produits')
      ->findAll()
      ;
    }

    return $this->render('ECommBundle:Produits:index.html.twig', array(
      'listProduits' => $listProduits,
      'msgAjout' => $msgAjout
    ));

  }


  /**
   * Consulter l'article choisi par l'utilisateur
   */
  public function consultationAction ($id) {
    //recuperer dans la bdd, l'objet corespondant a l'id du Produit (doit etre existant)
    $Produit = $this->getDoctrine()
      ->getManager()
      ->getRepository('ECommBundle:Produits')
      ->find($id);

    //render si existe, page404 sinon
    if ($Produit) {
      return $this->render('ECommBundle:Produits:consultation.html.twig',
      array('produit' => $Produit,
      ));
    } else {
      throw new NotFoundHttpException($this->pagenotfound);
    }

  }

}

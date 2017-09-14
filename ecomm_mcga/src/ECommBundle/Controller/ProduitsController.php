<?php

namespace ECommBundle\Controller;


use ECommBundle\Entity\Produits;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ProduitsController extends Controller

{

  public function indexAction(Request $req, $page)
  {
    // $panier = $this->getPanier($req);
    // $panier["test"] = 10;
    // var_dump($panier);

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

  /**
   * Retourne le panier de l'utilisateur si existant
   * sinon initialise un panier vide
   */
  private function getPanier (Request $req) {
    $req->getSession()->set('panier', array());
    return $req->getSession()->get('panier');
  }

  /**
   * Ajouter l'article choisi par l'utilisateur en quantite demander au panier
   */
  public function addAction () {

  }

  /**
   * Remove l'article choisi par l'utilisateur en quantite demander au panier
   */
  public function removeAction () {

  }

  /**
   * Valider la commande utilisateur apres confirmation de paiement
   * Edite la facture
   */
  public function validerCommandeAction () {

  }

  /**
  * Editer la facture en fonction du panier
  * en retirant les qte de la bdd
  */
  private function editFactureAction () {

  }


}

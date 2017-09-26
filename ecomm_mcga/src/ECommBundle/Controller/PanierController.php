<?php

namespace ECommBundle\Controller;


use ECommBundle\Entity\Produits;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class PanierController extends Controller

{
  private $namePanier = 'panier';
  private $pagenotfound = 'la page demandée n\'existe pas';

  /**
   * Retourne le panier de l'utilisateur si existant
   * sinon initialise un panier vide
   */
  private function getPanier (Request $req) {
    $panier = $req->getSession()->get($this->namePanier);
    if (!(isset($panier) && ($panier !== null))) {
      $req->getSession()->set($this->namePanier, array());
    }
    return $panier;
  }

  /**
   *
   */
  private function setPanier ($req, $newPanier) {
    $req->getSession()->set($this->namePanier, $newPanier);
  }

  /**
   * Ajouter l'article choisi par l'utilisateur en quantite demander au panier
   *
   * pre: l'objet ajouter doit etre existant en bdd
   */
  public function addAction (Request $req) {
    $msgAjout = "";

    $post = $req->request;

    $nomProduit = $post->get('nomProduit');
    $qte = $post->get('qte');

    if ($qte > 0) {//si qte positive


      $panier = $this->getPanier($req);
      $oldQte = 0;
      if (isset($panier[$nomProduit]["qte"])) {
        $oldQte = $panier[$nomProduit]["qte"];
      }
      $panier[$nomProduit] = array("nomProduit"=>$nomProduit, "qte"=>($oldQte+$qte));
      $this->setPanier($req, $panier);

      $msgAjout = "ajout de ".$qte." fois ".$nomProduit;

    } else {
      $msgAjout = "la quantité n'est pas correcte";
    }

    return $this->forward('ECommBundle:Produits:index', array(
      'page' => 1,
      'msgAjout' => $msgAjout
    ));

  }

  /**
   * Affichage du contenu du panier
   *
   * pre: le panier doit contenir que des produit existant
   */
  public function panierAction (Request $req) {
    $panier = $this->getPanier($req);

    return $this->render('ECommBundle:Produits:panier.html.twig', array(
      'panier' => $panier
    ));
  }

  /**
   * Vide le panier
   * redirige vers la page du panier
   */
  public function emptyPanierAction (Request $req) {
    $this->setPanier($req, null);
    return $this->redirectToRoute('panier_produit');
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

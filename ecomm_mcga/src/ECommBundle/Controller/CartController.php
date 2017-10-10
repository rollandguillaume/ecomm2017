<?php

namespace ECommBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ECommBundle\Entity\Product;


class CartController extends Controller

{
  private $namePanier = 'panier';

  /**
  * Retourne le panier de l'utilisateur si existant
  * sinon initialise un panier vide
  */
  private function getPanier () {
    // $panier = $req->getSession()->get($this->namePanier);
    $panier = $this->get('session')->get($this->namePanier);
    if (!(isset($panier) && ($panier !== null))) {
      // $req->getSession()->set($this->namePanier, array());
      $this->get('session')->set($this->namePanier, array());
    }
    return $panier;
  }

  /**
  *
  */
  private function setPanier ($newPanier) {
    // $req->getSession()->set($this->namePanier, $newPanier);
    $this->get('session')->set($this->namePanier, $newPanier);
  }

  /**
  * Ajouter l'article choisi par l'utilisateur en quantite demander au panier
  *
  * pre: l'objet ajouter doit etre existant en bdd
  */
  public function addAction (Request $req) {
    $msgAjout = "";
    $dejaPanier = false;

    $post = $req->request;

    $idProduit = $post->get('nomProduit');
    $qte = $post->get('qte');

    if ($qte > 0) {//si qte positive

      $repoProduit = $this->getDoctrine()
      ->getManager()
      ->getRepository('ECommBundle:Product')
      ;

      if ($repoProduit->existProduit($idProduit)) {
        $produit = $repoProduit->find($idProduit);

        $panier = $this->getPanier();
        $oldQte = 0;
        if (isset($panier[$idProduit]["qte"])) {
          $oldQte = $panier[$idProduit]["qte"];
          $dejaPanier = true;
        }

        $panier[$idProduit] = array(
          "produit"=>$produit,
          "qte"=>($oldQte+$qte)
        );
        $this->setPanier($panier);

        $ajout = "ajout de ".$qte." fois ".$produit->getNom();
        if ($dejaPanier) {
          $msgAjout = "produit déjà présent dans votre panier : ".$ajout.". Quantité actuelle : ".($oldQte+$qte);
        } else {
          $msgAjout = $ajout;
        }

      } else {
        $msgAjout = "produit indisponible";
      }
    } else {
      $msgAjout = "la quantité n'est pas correcte";
    }

    return $this->forward('ECommBundle:Product:index', array(
      'page' => 1,
      'msgAjout' => $msgAjout
    ));

  }

  /**
  * Affichage du contenu du panier
  *
  * pre: le panier doit contenir que des produit existant
  */
  public function panierAction () {
    $panier = $this->getPanier();

    return $this->render('ECommBundle:Cart:cart.html.twig', array(
      'panier' => $panier
    ));
  }

  /**
  * Vide le panier
  * redirige vers la page du panier
  */
  public function emptyPanierAction () {
    $this->setPanier(null);
    return $this->redirectToRoute('panier_produit');
  }

  /**
  * Remove l'article choisi par l'utilisateur en quantite demander au panier
  */
  public function removeAction ($id) {
    $panier = $this->getPanier();
    if (isset($panier[$id])) {
      unset($panier[$id]);
      $this->setPanier($panier);
    }
    return $this->redirectToRoute('panier_produit');
  }

}
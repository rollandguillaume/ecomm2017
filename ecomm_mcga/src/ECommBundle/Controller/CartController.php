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
  * Ajouter l'article choisi par l'utilisateur en quantite demandée au panier
  *
  * pre: l'objet ajouté doit etre existant en bdd
  */
  public function addAction (Request $req) {
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

        $ajout = "Ajout de ".$qte." unité(s) de ".$produit->getNom()." dans votre panier.";
        if ($dejaPanier) {
          $this->addFlash('notice', 'Le produit '.$produit->getNom().' était déjà présent dans votre panier. '.$ajout.' Quantité actuelle de '.$produit->getNom().': '.($oldQte+$qte));
        } else {
          $this->addFlash('notice', $ajout);
        }

      } else {
        $this->addFlash('notice', 'Le produit est actuellement indisponible.');
      }
    } else {
      $this->addFlash('noticeFail', 'La quantité demandée n\'est pas correcte. Merci de réessayer.');
    }

    return $this->redirectToRoute('ecomm_home', array(
      'page' => 1
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

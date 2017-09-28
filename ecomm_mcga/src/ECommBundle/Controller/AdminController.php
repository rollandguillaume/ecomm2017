<?php
namespace ECommBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ECommBundle\Form\ProduitsType;
use ECommBundle\Entity\Produits;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{
  public function indexAction () {
    return $this->render('ECommBundle:Admin:index.html.twig');

  }

  /**
   * ajouter un nouveau produit
   */
  public function addProduitAction(Request $request)
  {
    $produit = new Produits();
    $msg = "";

    $form = $this->get('form.factory')
      ->create(ProduitsType::class, $produit);

      if ($request->isMethod('POST')) {
        $form->handleRequest($request);

        if ($form->isValid()) {

          $em = $this->getDoctrine()->getManager();
          $em->persist($produit);
          $em->flush();

          $msg = "ajout du nouveau produit";
        }
      }

      return $this->render('ECommBundle:Admin:addNewProduits.html.twig', array(
        'form' => $form->createView(),
        'msg' => $msg
      ));
  }

  public function removeProduitAction(Request $request)
  {
    $msg = "";

    $repoProduit = $this->getDoctrine()
      ->getManager()
      ->getRepository('ECommBundle:Produits')
    ;

    if ($request->isMethod('POST')) {

      $post = $request->request;
      $produit = $repoProduit->find($post->get('id'));

      if ($produit) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();

        $msg = "suppression du produit ".$produit->getNom();
      } else {
        $msg = "produit inexistant";
      }
    }

    return $this->render('ECommBundle:Admin:removeProduit.html.twig', array(
      'produits' => $repoProduit->findAll(),
      'msg' => $msg
    ));

  }

}

<?php
namespace ECommBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ECommBundle\Form\ProductType;
use ECommBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{
  public function indexAction () {
    return $this->render('ECommBundle:Admin:index.html.twig');

  }

  /**
   * ajouter un nouveau produit
   */
  public function addProductAction(Request $request)
  {
    $produit = new Product();
    $msg = "";

    $form = $this->get('form.factory')
      ->create(ProductType::class, $produit);

      if ($request->isMethod('POST')) {
        $form->handleRequest($request);

        if ($form->isValid()) {

          $em = $this->getDoctrine()->getManager();
          $em->persist($produit);
          $em->flush();

          $msg = "ajout du nouveau produit";
        }
      }

      return $this->render('ECommBundle:Admin:addNewProduct.html.twig', array(
        'form' => $form->createView(),
        'msg' => $msg
      ));
  }

  public function removeProductAction(Request $request)
  {
    $msg = "";

    $repoProduit = $this->getDoctrine()
      ->getManager()
      ->getRepository('ECommBundle:Product')
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

    return $this->render('ECommBundle:Admin:removeProduct.html.twig', array(
      'produits' => $repoProduit->findAll(),
      'msg' => $msg
    ));

  }

}

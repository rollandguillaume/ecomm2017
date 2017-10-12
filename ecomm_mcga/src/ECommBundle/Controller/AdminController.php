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

    $form = $this->get('form.factory')
      ->create(ProductType::class, $produit);

      if ($request->isMethod('POST')) {
        $form->handleRequest($request);

        if ($form->isValid()) {

          $em = $this->getDoctrine()->getManager();
          $em->persist($produit);
          $em->flush();

          $this->addFlash('notice', 'ajout du nouveau produit');
        }
      }

      return $this->render('ECommBundle:Admin:addNewProduct.html.twig', array(
        'form' => $form->createView()
      ));
  }

  public function removeProductAction(Request $request)
  {
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

        $this->addFlash('notice', 'suppression du produit '.$produit->getNom());
      } else {
        $this->addFlash('notice', 'produit inexistant');
      }
    }

    return $this->render('ECommBundle:Admin:removeProduct.html.twig', array(
      'produits' => $repoProduit->findAll()
    ));

  }

}

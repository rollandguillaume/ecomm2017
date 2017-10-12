<?php

namespace ECommBundle\Controller;

use ECommBundle\Entity\Product;
use ECommBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller

{

  /**
  * Lists all Product entities.
  * @Method("GET")
  * @Template()
  */
  public function indexAction(Request $req, $page=1)
  {
    if ($page < 1) {
      throw new NotFoundHttpException();
    } else {
      // Pour récupérer la liste de toutes les annonces : on utilise findAll()
      $em = $this->getDoctrine()->getManager();
      $productRepository=$em->getRepository('ECommBundle:Product');
      $categoryRepository = $em->getRepository('ECommBundle:Category');

      $listProduct=$productRepository->getAllProduct();
      $categories = $categoryRepository->getAllCategories();
    }

    return $this->render('ECommBundle:Product:index.html.twig', array(
      'listProduct' => $listProduct,
      'categories' => $categories
    ));
  }


  /**
  * Consulter l'article choisi par l'utilisateur
  */
  public function consultationAction ($id) {
    //recuperer dans la bdd, l'objet corespondant a l'id du Produit (doit etre existant)
    $Produit = $this->getDoctrine()
    ->getManager()
    ->getRepository('ECommBundle:Product')
    ->find($id);

    //render si existe, page404 sinon
    if ($Produit) {
      return $this->render('ECommBundle:Product:consultation.html.twig',
      array('produit' => $Produit,
    ));
  } else {
    throw new NotFoundHttpException();
  }
}

/**
 *
 * @Method("GET")
 * @Template()
 */
public function categoryAction(Request $request, Category $category)
{
    /**
     * @var $em EntityManager
     */
    $em = $this->getDoctrine()->getManager();
    $productRepository = $em->getRepository('ECommBundle:Product');
    $categoryRepository = $em->getRepository('ECommBundle:Category');

    $productsQuery = $productRepository->findByCategory($category);
    $categories = $categoryRepository->getAllCategories();


    return $this->render('ECommBundle:Product:index.html.twig', array(
      'listProduct' => $productsQuery,
      'categories' => $categories,
      'category' => $category,
    ));
}

}

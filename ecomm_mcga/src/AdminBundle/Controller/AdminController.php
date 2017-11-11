<?php
namespace AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ECommBundle\Entity\Product;
use ECommBundle\Form\ProductType;
use Symfony\Component\HttpFoundation\Request;

use ECommBundle\Entity\Category;
use ECommBundle\Form\ProductCategoryType;

use ECommBundle\Entity\User;
use ECommBundle\Form\UserType;


class AdminController extends Controller
{
  /**
  * Lists all User entities.
  */
  public function userAction(Request $request)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $userRepository=$em->getRepository('ECommBundle:User');

    //form
    $user = new User();
    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      // save the Product!
      $em = $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();
      $this->addFlash('notice', 'Utilisateur ajouté ');
    }

    $listUser=$userRepository->findAll();

    return $this->render('AdminBundle:Admin:user.html.twig', array(
      'listuser' => $listUser,
      'form' => $form->createView()
    ));
  }

  /**
  * Lists all Categories entities.
  */
  public function categoryAction(Request $request)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $categoryRepository=$em->getRepository('ECommBundle:Category');

    //form
    $category = new Category();
    $form = $this->createForm(ProductCategoryType::class, $category);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      // save the Product!
      $em = $this->getDoctrine()->getManager();
      $em->persist($category);
      $em->flush();
      $this->addFlash('notice', 'Catégorie ajoutée');
    }

    $listcategory=$categoryRepository->findAll();

    return $this->render('AdminBundle:Admin:category.html.twig', array(
      'listcategory' => $listcategory,
      'form' => $form->createView()
    ));
  }

  /**
  * Lists all Product entities.
  */
  public function productAction(Request $request)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $productRepository=$em->getRepository('ECommBundle:Product');

    //form
    $product = new Product();
    $form = $this->createForm(ProductType::class, $product);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      // save the Product!
      $em = $this->getDoctrine()->getManager();
      $em->persist($product);
      $em->flush();
      $this->addFlash('notice', 'Produit ajouté');
    }

    $listproduct=$productRepository->findAll();

    return $this->render('AdminBundle:Admin:product.html.twig', array(
      'listproduct' => $listproduct,
      'form' => $form->createView()
    ));
  }


  public function indexAction () {
    return $this->render('AdminBundle:Admin:index.html.twig');
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
        $this->addFlash('notice', 'Suppression du produit '.$produit->getNom());
      } else {
        $this->addFlash('notice', 'Produit inexistant');
      }
    }
    return $this->render('AdminBundle:Admin:removeProduct.html.twig', array(
      'produits' => $repoProduit->findAll()
    ));
  }

  /**
  * Lists all Categories entities.
  */
  public function orderAction(Request $req)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $orderRepository=$em->getRepository('ECommBundle:Order');

    $listorder=$orderRepository->findAll();

    return $this->render('AdminBundle:Admin:order.html.twig', array(
      'listorder' => $listorder
    ));
  }


}

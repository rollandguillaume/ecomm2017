<?php
namespace AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ECommBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{
  /**
  * Lists all User entities.
  */
  public function userAction(Request $req)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $userRepository=$em->getRepository('ECommBundle:User');

    $listUser=$userRepository->findAll();

    return $this->render('AdminBundle:Admin:user.html.twig', array(
      'listuser' => $listUser
    ));
  }

  /**
  * Lists all Categories entities.
  */
  public function categoryAction(Request $req)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $categoryRepository=$em->getRepository('ECommBundle:Category');

    $listcategory=$categoryRepository->findAll();

    return $this->render('AdminBundle:Admin:category.html.twig', array(
      'listcategory' => $listcategory
    ));
  }

  /**
  * Lists all Product entities.
  */
  public function productAction(Request $req)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $productRepository=$em->getRepository('ECommBundle:Product');

    $listproduct=$productRepository->findAll();

    return $this->render('AdminBundle:Admin:product.html.twig', array(
      'listproduct' => $listproduct
    ));
  }





  public function indexttAction () {
    return $this->render('AdminBundle:Admin:user.html.twig');

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

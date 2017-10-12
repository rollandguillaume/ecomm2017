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

    return $this->render('AdminBundle:Admin:addNewProduct.html.twig', array(
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

    return $this->render('AdminBundle:Admin:removeProduct.html.twig', array(
      'produits' => $repoProduit->findAll(),
      'msg' => $msg
    ));

  }

}

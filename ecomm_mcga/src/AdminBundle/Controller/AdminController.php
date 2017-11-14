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

use ECommBundle\Entity\Order;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class AdminController extends Controller
{
  /**
  * Lists all User entities.
  */
  public function userAction(Request $request,$id=null)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $userRepository=$em->getRepository('ECommBundle:User');

    if (null === $id) {
      $user = new User();
    }else {
      $user=$userRepository->find($id);
      if (null === $user) {
        throw new NotFoundHttpException();
      }
    }

    //form
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
  public function categoryAction(Request $request,$id=null)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $categoryRepository=$em->getRepository('ECommBundle:Category');

    if (null === $id) {
      $category = new Category();
    }else {
      $category=$categoryRepository->find($id);
      if (null === $category) {
        throw new NotFoundHttpException();
      }
    }

    //form
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

  public function categorydeleteAction(Request $request,$id)
{
    $em = $this->getDoctrine()->getManager();
    $categoryRepository=$em->getRepository('ECommBundle:Category');
    $category=$categoryRepository->find($id);

    if (null === $category) {
      throw new NotFoundHttpException();
    }
    else {
      $ProductCategoryRepository=$em->getRepository('ECommBundle:Product');
      $listproductcategory=$ProductCategoryRepository->findByCategory($category);
      foreach ($listproductcategory as $product) {
        $product->setCategory(null);
        $em->persist($product);
      }
      $em->remove($category);
      $em->flush();
      $this->addFlash('notice', 'Catégorie supprimé');
      return $this->redirect($this->generateUrl('category_admin'));
    }
}
  public function userdeleteAction(Request $request,$id)
{
    $em = $this->getDoctrine()->getManager();
    $userRepository=$em->getRepository('ECommBundle:User');
    $user=$userRepository->find($id);

    if (null === $user) {
      throw new NotFoundHttpException();
    }
    else {
      $userorderRepository=$em->getRepository('ECommBundle:Order');
      $listuserorder=$userorderRepository->findByUtilisateur($user);
      foreach ($listuserorder as $order) {
        $order->setUtilisateur(null);
        $em->persist($order);
      }
      $em->remove($user);
      $em->flush();
      $this->addFlash('notice', 'Utilisateur supprimé');
      return $this->redirect($this->generateUrl('user_admin'));
    }
}
  public function productdeleteAction(Request $request,$id)
{
    $em = $this->getDoctrine()->getManager();
    $productRepository=$em->getRepository('ECommBundle:Product');
    $product=$productRepository->find($id);

    if (null === $product) {
      throw new NotFoundHttpException();
    }
    else {
      $em->remove($product);
      $em->flush();
      $this->addFlash('notice', 'Produit supprimé');
      return $this->redirect($this->generateUrl('product_admin'));
    }
}
  public function orderdeleteAction(Request $request,$id)
{
    $em = $this->getDoctrine()->getManager();
    $orderRepository=$em->getRepository('ECommBundle:Order');
    $order=$orderRepository->find($id);

    if (null === $order) {
      throw new NotFoundHttpException();
    }
    else {
      $em->remove($order);
      $em->flush();
      $this->addFlash('notice', 'Commande supprimé');
      return $this->redirect($this->generateUrl('order_admin'));
    }
}

  /**
  * Lists all Product entities.
  */
  public function productAction(Request $request,$id=null)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $productRepository=$em->getRepository('ECommBundle:Product');

    if (null === $id) {
      $product = new Product();
    }else {
      $product =$productRepository->find($id);
      if (null === $product ) {
        throw new NotFoundHttpException();
      }
    }

    //form
    $form = $this->createForm(ProductType::class, $product);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
      $file = $product->getImagefile();
      $fileName = md5(uniqid()).'.'.$file->guessExtension();
      $file->move(
        $this->getParameter('images_directory'),
        $fileName
      );
      $product->setImagefile($fileName);
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


  public function ordershowAction(Request $req,$id)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $orderRepository=$em->getRepository('ECommBundle:Order');

    $order=$orderRepository->find($id);

    if (null === $order) {
      throw new NotFoundHttpException();
    }
    return $this->render('AdminBundle:Admin:ordershow.html.twig', array(
      'order' => $order
    ));
  }


}

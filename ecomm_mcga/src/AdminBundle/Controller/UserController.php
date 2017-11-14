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


class UserController extends Controller
{
  /**
  * Lists all User entities.
  */
  public function userAction(Request $request)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $userRepository=$em->getRepository('ECommBundle:User');


    if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
      $user = $this->get('security.token_storage')->getToken()->getUser();
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

    return $this->render('AdminBundle:User:user.html.twig', array(
      'listuser' => $listUser,
      'form' => $form->createView()
    ));
  }


  public function userdeleteAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
      $user = $this->get('security.token_storage')->getToken()->getUser();
    }

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
      $this->get('security.token_storage')->setToken(null);
      $this->get('session')->invalidate();
      $this->addFlash('notice', 'Utilisateur supprimé');
      return $this->redirect($this->generateUrl('ecomm_home'));
    }
  }

  /**
  * Lists all Categories entities.
  */
  public function orderAction(Request $req)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $orderRepository=$em->getRepository('ECommBundle:Order');

    if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
      $userLog = $this->get('security.token_storage')->getToken()->getUser();
    }

    $listorder=$orderRepository->findByUtilisateur($userLog);

    return $this->render('AdminBundle:User:order.html.twig', array(
      'listorder' => $listorder
    ));
  }


  public function ordershowAction(Request $req,$id)
  {
    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $em = $this->getDoctrine()->getManager();
    $orderRepository=$em->getRepository('ECommBundle:Order');

    $order=$orderRepository->find($id);

    if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
      $userLog = $this->get('security.token_storage')->getToken()->getUser();
    }

    if ((null === $order)|| ($userLog != $order->getUtilisateur())) {
      throw new NotFoundHttpException();
    }
    return $this->render('AdminBundle:User:ordershow.html.twig', array(
      'order' => $order
    ));
  }


}

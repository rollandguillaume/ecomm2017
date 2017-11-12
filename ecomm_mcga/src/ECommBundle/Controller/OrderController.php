<?php
namespace ECommBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ECommBundle\Entity\Order;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpFoundation\Request;

use ECommBundle\Form\UserAddressType;
use ECommBundle\Entity\UserAddress;


class OrderController extends Controller
{
  /**
  *
  */
  public function recapAction(Request $request) {

    if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
      $userLog = $this->get('security.token_storage')->getToken()->getUser();
      $address =$userLog->getAddress();

      if (!$address) {//pas d'address alors initialisation
        $address = new UserAddress();
      }

      // 1) build the form
      $form = $this->createForm(UserAddressType::class, $address);

      // 2) handle the submit (will only happen on POST)
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $userLog->SetAddress($address);
        $em = $this->getDoctrine()->getManager();
        $em->persist($userLog);
        $em->flush();

        return $this->validationAction();
      }

      return $this->render('ECommBundle:Order:orderRecap.html.twig', array(
        'recapitulatif' => $this->makeListCommande(),
        'form' => $form->createView()
      ));

    }else {
      throw new UnauthorizedHttpException(null, "Non connecté");
    }
  }

  /**
  * Page de validation
  * voir app/config/security.yml pour la redirection sur page de connection si non authentifié
  */
  public function validationAction()
  {
    if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
      $userLog = $this->get('security.token_storage')->getToken()->getUser();
      $panier = $this->get('session')->get('panier');
      // var_dump($userLog);
      // var_dump($panier);

      if (!$panier) {//pas de panier alors redirection page du panier
        return $this->redirectToRoute('panier_produit');
      } else {
        //sinon creer l'objet commande dans la bdd
        $commande = new Order();
        $commande->setDate(new \DateTime());
        $commande->setValider(0);
        $commande->setUtilisateur($userLog);
        $listCommande = $this->makeListCommande();
        $commande->setCommande($listCommande);
        $listUserAddress = $this->makeListUserAddress();
        $commande->setUseraddress($listUserAddress);

        $em = $this->getDoctrine()->getManager();
        $em->persist($commande);
        $em->flush();

        //vider le panier
        $this->get('session')->set('panier', array());

        $this->addFlash('notice', 'Votre commande a été validée');

        return $this->render('ECommBundle:Order:orderValid.html.twig', array(
          'recapitulatif' => $listCommande
        ));
      }
    } else {
      throw new UnauthorizedHttpException(null, "Non connecté");
    }

  }

  /**
  * pre: panier de session doit exister
  */
  private function makeListCommande () {
    $panier = $this->get('session')->get('panier');
    $listCommande = array();

    $prixTot = 0;
    foreach ($panier as $item) {
      $produit = $item['produit'];
      $qte = $item['qte'];
      $prixLot = $qte*$produit->getPrix();
      $prixTot += $prixLot;

      $listCommande['produits'][$produit->getId()] = array(
        "nom" => $produit->getNom(),
        "prix" => $produit->getPrix(),
        "qte" => $qte,
        "prixLot" => $prixLot
      );
    }

    $listCommande["prixTot"] = $prixTot;

    return $listCommande;
  }

  /**
  * pre: utilisateur doit avoir une address et etre connecté
  */
  private function makeListUserAddress () {
    $userLog = $this->get('security.token_storage')->getToken()->getUser();
    $address =$userLog->getAddress();
    $listUserAddress = array();

    $listUserAddress['address'] = array(
      "name" => $address->getName(),
      "lastname" => $address->getLastName(),
      "state" => $address->getState(),
      "phone" => $address->getPhone(),
      "address" => $address->getAddress(),
      "address2" => $address->getAddress2(),
      "zip" => $address->getZip(),
      "city" => $address->getCity()
    );

    return $listUserAddress;
  }



  /**
  * demande fictive à banque ??
  */
  private function confirmBank () {
    return true;
  }
}

<?php
namespace ECommBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ECommBundle\Entity\Commandes;


class CommandesController extends Controller
{
  /**
   * Page de validation
   * voir app/config/security.yml pour la redirection sur page de connection si non authentifié
   */
  public function validationAction()
  {
    $userLog = $this->get('security.token_storage')->getToken()->getUser();
    $panier = $this->get('session')->get('panier');
    // var_dump($userLog);
    // var_dump($panier);

    if (!$panier) {//pas de panier alors redirection page du panier
      return $this->redirectToRoute('panier_produit');
    } else {
      //sinon creer l'objet commande dans la bdd
      $commande = new Commandes();
      $commande->setDate(new \DateTime());
      $commande->setValider(0);
      $commande->setUtilisateur($userLog);
        $listCommande = $this->makeListCommande();
      $commande->setCommande($listCommande);

      $em = $this->getDoctrine()->getManager();
      $em->persist($commande);
      $em->flush();

      //vider le panier
      // $this->get('session')->set('panier', array());

      return $this->render('ECommBundle:Commande:commande.html.twig', array(
        'msg' => 'commande validée',
        'recapitulatif' => $listCommande
      ));
    }

    // return new Response("\nvalidation en cours de dev");
  }

  /**
   * pre: panier de session doit exister
   */
  private function makeListCommande () {
    $panier = $this->get('session')->get('panier');
    $listCommande = array();

    foreach ($panier as $key => $value) {

      $listCommande["idproduit"] = array(
        "nom" => "produitname",
        "prix" => 1.99,
      );
    }


    return $listCommande;
  }



  /**
   * demande fictive à banque ??
   */
  private function confimBank () {
    return true;
  }
}

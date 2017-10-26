<?php
namespace ECommBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
  /**
   * Page d'accueil
   */
  public function indexAction()
  {
    return $this->render('ECommBundle:Page:index.html.twig');
  }

  public function contactAction(Request $request) {

    $post = $request->request;
    if (!(($post->get('subject') === null) || ($post->get('contenu') === null))) {

      $sujet = $post->get('subject');
      $contenu = $post->get('contenu');

      if ((strlen($sujet)>=5) && (strlen($contenu)>=50)) {
        $message = (new \Swift_Message($sujet))
        ->setFrom('send@example.com')
        ->setTo('recipient@example.com')
        ->setBody(
          $this->renderView(
            // app/Resources/views/Emails/registration.html.twig
            'Emails/contactMail.html.twig',
            array(
              'contenu' => $contenu,
            )
          ),
          'text/html'
          )
          ;
          $this->get('mailer')->send($message);
      }

    }

    return $this->render('ECommBundle:Page:contact.html.twig');
  }

}

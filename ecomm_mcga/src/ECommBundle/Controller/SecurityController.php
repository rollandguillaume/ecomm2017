<?php

namespace ECommBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#use for register
use ECommBundle\Form\UserType;
use ECommBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends Controller
{
    /**
    * @Route("/login", name="login")
    */
    public function loginAction(Request $request)
    {
      $authUtils = $this->get('security.authentication_utils');
      // get the login error if there is one
      $error = $authUtils->getLastAuthenticationError();
      // last username entered by the user
      $lastUsername = $authUtils->getLastUsername();
      return $this->render('ECommBundle:Security:login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
      ));
     }



     /**
     * @Route("/register", name="user_registration")
     */
     public function registerAction(Request $request)
     {
        $passwordEncoder = $this->get('security.password_encoder');
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $this->addFlash('notice', 'Votre compte a été enregistré.');
            return $this->redirectToRoute('page_home');
        }

        return $this->render(
            'ECommBundle:Security:register.html.twig',
            array('form' => $form->createView())
        );
    }





}

<?php

namespace ECommBundle\Controller;



class SecurityController extends Controller
{
    
    /**
    * @Route("/login", name="login")
    */
    public function loginAction(Request $request)
    {
    }

    /**
    * @Route("/logout", name="logout")
    */
    public function logoutAction(Request $request)
    {
    }
    /**
    * @Route("/register", name="register")
    */
    public function registerAction(Request $request)
    {
    //creation nouvel utilisateur
    }

    /**
    * @Route("/profile", name="register")
    */
    public function profileAction(Request $request)
    {
    }
    
}

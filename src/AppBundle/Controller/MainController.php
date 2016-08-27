<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class MainController extends Controller
{
    public function indexAction(Request $request){
        if($request->query->has("title") && $request->query->get("title") == "Special:UserLogin"){ # change route for login
            if($request->query->has("type") && $request->query->get("type") == "signup")
                return $this->redirectToRoute('fos_user_registration_register');
            return $this->redirectToRoute('fos_user_security_login');
        }

        if($request->query->has("title") && $request->query->get("title") == "Special:Search"){ # change route for search
            if($request->query->has("search"))
                return $this->redirectToRoute('search', array('search' => $request->query->get("search")), 301);
            else
                return $this->redirectToRoute('search');
        }

        return $this->render(
                'default/home.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Home",
                    'content' => "basic index"
                ]
            );
    }

    public function homeAction(Request $request)
    {
        return $this->render(
                'default/home.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Home",
                    'content' => "Nothing to display for now"
                ]
            );
    }

    public function eventAction(Request $request)
    {
        return $this->render(
                'default/home.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Event",
                    'content' => "Coucou ça gaz ?"
                ]
            );
    }

}

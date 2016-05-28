<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    public function homeAction(Request $request)
    {
        return $this->render(
                'default/index.html.twig', 
                [
                    'title' => "Home",
                    'content' => "Nothing to display for now"
                ]
            );
    }

    public function eventAction(Request $request)
    {
        return $this->render(
                'default/index.html.twig', 
                [
                    'title' => "Event",
                    'content' => "Coucou ça gaz ?"
                ]
            );
    }
}

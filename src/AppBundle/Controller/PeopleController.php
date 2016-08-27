<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Model\User;

class PeopleController extends Controller
{
    public function peopleAction(Request $request){

        $repository = $this->getDoctrine()->getRepository('AppBundle:User');
        $user = $repository->findOneByUsername($request->attributes->get("people"));

        return $this->render(
                'default/show.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => $user->getName(),
                    'user' => $user
                ]
            );
    }

}

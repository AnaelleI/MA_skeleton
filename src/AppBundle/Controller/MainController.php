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
                    'content' => "received"
                ]
            );
    }

	public function researchAction(Request $request)
    {
        return $this->render(
                'default/research.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Research",
                    'content' => ""
                ]
            );
    }
	
	public function publicationAction(Request $request)
    {
        return $this->render(
                'default/publication.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Publication",
                    'content' => ""
                ]
            );
    }
	
	public function projectAction(Request $request)
    {
        return $this->render(
                'default/project.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Project",
                    'content' => ""
                ]
            );
    }
	
	public function platformAction(Request $request)
    {
        return $this->render(
                'default/platform.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Platforms & Software",
                    'content' => ""
                ]
            );
    }
	
	public function patentsAction(Request $request)
    {
        return $this->render(
                'default/patents.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Patents",
                    'content' => ""
                ]
            );
    }
	
	public function parnersAction(Request $request)
    {
        return $this->render(
                'default/parners.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Parners",
                    'content' => ""
                ]
            );
    }
	
	public function currentMemberAction(Request $request)
    {
        return $this->render(
                'default/currentMember.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Current Members",
                    'content' => ""
                ]
            );
    }
	
	public function associateMemberAction(Request $request)
    {
        return $this->render(
                'default/associateMember.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Associate Members",
                    'content' => ""
                ]
            );
    }
	
	public function formerMemberAction(Request $request)
    {
        return $this->render(
                'default/formerMember.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Former Members",
                    'content' => ""
                ]
            );
    }
	
		public function phdThesesAction(Request $request)
    {
        return $this->render(
                'default/phdTheses.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "PhD Theses",
                    'content' => ""
                ]
            );
    }
	
	public function jobVacanciesAction(Request $request)
    {
        return $this->render(
                'default/jobVacancies.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Job Vacancies",
                    'content' => ""
                ]
            );
    }
	
	public function conferencesWorkshopsAction(Request $request)
    {
        return $this->render(
                'default/conferencesWorkshops.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Conferences and Workshops",
                    'content' => ""
                ]
            );
    }
	
	public function seminarsAction(Request $request)
    {
        return $this->render(
                'default/seminars.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Seminars",
                    'content' => ""
                ]
            );
    }
	
	public function venueAction(Request $request)
    {
        return $this->render(
                'default/venue.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Venue",
                    'content' => ""
                ]
            );
    }
	
	public function contactAction(Request $request)
    {
        return $this->render(
                'default/contact.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Contact",
                    'content' => ""
                ]
            );
    }
	
	public function publicationGuidelinesAction(Request $request)
    {
        return $this->render(
                'default/publicationGuidelines.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Publication Guidelines",
                    'content' => ""
                ]
            );
    }
	
	public function developerGuidelinesAction(Request $request)
    {
        return $this->render(
                'default/developerGuidelines.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Developer Guidelines",
                    'content' => ""
                ]
            );
    }
	
	public function whatLinkHereAction(Request $request)
    {
        return $this->render(
                'default/whatLinkHere.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "What link here",
                    'content' => ""
                ]
            );
    }
	
	public function relatedChangesAction(Request $request)
    {
        return $this->render(
                'default/relatedChanges.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Related changes",
                    'content' => ""
                ]
            );
    }
	
	public function specialPagesAction(Request $request)
    {
        return $this->render(
                'default/specialPages.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Special pages",
                    'content' => ""
                ]
            );
    }
	
	public function printableVersionAction(Request $request)
    {
        return $this->render(
                'default/printableVersion.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Printable version",
                    'content' => ""
                ]
            );
    }
	
	public function permanentLinkAction(Request $request)
    {
        return $this->render(
                'default/permanentLink.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Permanent link",
                    'content' => ""
                ]
            );
    }
}

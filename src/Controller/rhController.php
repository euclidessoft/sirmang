<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Recherche;
use App\Entity\User;
use App\Entity\Poste;
use App\Entity\Region;
use App\Repository\UserRepository;
use App\Form\RechercheType;


class rhController extends AbstractController
{
    
   
    /**
     * @Route("/Rh", name="tam_rh")
     */
    public function index(UserRepository $repo, Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_ADMIN_CELL'))
        {
        $recherche = new Recherche();
        $form = $this->createForm(RechercheType::class, $recherche);
        $form->handleRequest($request);
        
        $recherche = $repo->dispo($recherche);
        
        $response = $this->render('rh/users.html.twig', [
            'form' => $form->createView(),'users' => $recherche
        ]);
        $response->setSharedMaxAge(0);
                $response->headers->addCacheControlDirective('no-cache', true);
                $response->headers->addCacheControlDirective('no-store', true);
                $response->headers->addCacheControlDirective('must-revalidate', true);
                $response->setCache([
                    'max_age' => 0,
                    'private' => true,
                ]);
                return $response;
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_login');
    }
    }

     /**
     * @Route("/RH/CA", name="tam_ca")
     */
    public function ca(UserRepository $repo, Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
            
       // $membre = $this->getDoctrine()->getManager()->getRepository(Poste::class)->findBy(['brureau' => 'CA']);
        $response = $this->render('rh/ca.html.twig', [
            'postes' => $this->getDoctrine()->getManager()->getRepository(Poste::class)->findBy(['bureau' => 'CA']),
        ]);
        $response->setSharedMaxAge(0);
                $response->headers->addCacheControlDirective('no-cache', true);
                $response->headers->addCacheControlDirective('no-store', true);
                $response->headers->addCacheControlDirective('must-revalidate', true);
                $response->setCache([
                    'max_age' => 0,
                    'private' => true,
                ]);
                return $response;
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_login');
    }
    }

    /**
     * @Route("/RH/BEN", name="tam_ben")
     */
    public function ben(UserRepository $repo, Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
            
       // $membre = $this->getDoctrine()->getManager()->getRepository(Poste::class)->findBy(['brureau' => 'CA']);
        $response = $this->render('rh/ben.html.twig', [
        ]);
        $response->setSharedMaxAge(0);
                $response->headers->addCacheControlDirective('no-cache', true);
                $response->headers->addCacheControlDirective('no-store', true);
                $response->headers->addCacheControlDirective('must-revalidate', true);
                $response->setCache([
                    'max_age' => 0,
                    'private' => true,
                ]);
                return $response;
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_login');
    }
    }
   /* 
    /**
     * @Route("Offres/{produit}", name="public_produit_show", methods={"GET"})
     
    public function show(Produit $produit): Response
    {
        return $this->render('pulic/produit/detail.html.twig', [
            'appart' => $produit,
        ]);
    }*/
}

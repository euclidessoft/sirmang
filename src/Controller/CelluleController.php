<?php

namespace App\Controller;

use App\Entity\Cellule;
use App\Entity\User;
use App\Entity\Recherche;
use App\Form\CelluleType;
use App\Form\RechercheType;
use App\Repository\CelluleRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cellule")
 */
class CelluleController extends AbstractController
{
    /**
     * @Route("/", name="cellule_index", methods={"GET"})
     */
    public function index(CelluleRepository $celluleRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
        return $this->render('cellule/index.html.twig', [
            'cellules' => $celluleRepository->findAll(),
        ]);
        }
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_login');
        }
    }

    /**
     * @Route("/new", name="cellule_new", methods={"GET","POST"})
     */
    public function new(Request $request, CelluleRepository $celluleRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL'))
        {
        $cellule = new Cellule();
        $form = $this->createForm(CelluleType::class, $cellule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cellule);
            $entityManager->flush();

            return $this->redirectToRoute('cellule_index');
        }

        return $this->render('cellule/new.html.twig', [
            'cellule' => $cellule,
            'form' => $form->createView(),
        ]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_login');
    }
    }

    /**
     * @Route("/{id}", name="cellule_show", methods={"GET"})
     */
    public function show(Cellule $cellule,UserRepository $userRepository, Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_ADMIN_CELL'))
        {

        $recherche = new Recherche();
        $form = $this->createForm(RechercheType::class, $recherche);
        $form->handleRequest($request);


        $users = $userRepository->dispoCellule($recherche, $cellule->getId());

        if($request->get('zone'))
        {
            $response = $this->render('cellule/show.html.twig', [
                'cellule' => $cellule,
                'users' => $users,
                'form' => $form->createView(),
               // 'zone' => $zone,
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
        
        $response = $this->render('cellule/show.html.twig', [
            'cellule' => $cellule,
            'users' => $users,
            'form' => $form->createView(),
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
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_login');
    }
    }

    /**
     * @Route("/{id}/edit", name="cellule_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN'))
        {
        $form = $this->createForm(CelluleType::class, $cellule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cellule_index', [
                'id' => $cellule->getId(),
            ]);
        }

        return $this->render('cellule/edit.html.twig', [
            'cellule' => $cellule,
            'form' => $form->createView(),
        ]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_login');
    }
    }

    /**
     * @Route("/{id}", name="cellule_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN'))
        {
        if ($this->isCsrfTokenValid('delete'.$cellule->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($cellule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cellule_index');
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_login');
    }
    }

    /**
     * @Route("joindre/{user}/{cellule}", name="cellule_joindre", methods={"GET"})
     */
    public function joindre(User $user, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
        
        
            $user->setCellule($cellule);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('notice', 'Opération réussie');
            
            
        
        $response = $this->redirectToRoute('security_profile');
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
     * @Route("joindreAdmin/{user}/{cellule}", name="cellule_joindre_admin", methods={"GET"})
     */
    public function joindreadmin(User $user, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL'))
        {
            if(!$this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN') && $user->getZone() != $this->getUser()->getZone())
            return $this->redirectToRoute('security_login');
        
            $user->setCellule($cellule);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('notice', 'Opération réussie');
            
            
        
        $response = $this->redirectToRoute('security_user', [ 'user' => $user->getId()]);
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
    
}

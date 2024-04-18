<?php

namespace App\Controller;

use App\Entity\Zone;
use App\Entity\Recherche;
use App\Form\ZoneType;
use App\Repository\ZoneRepository;
use App\Repository\RegionRepository;
use App\Repository\UserRepository;
use App\Repository\CelluleRepository;
use App\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/zone")
 */
class ZoneController extends AbstractController
{
    /**
     * @Route("/", name="zone_index", methods={"GET"})
     */
    public function index(ZoneRepository $zoneRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
        return $this->render('zone/index.html.twig', [
            'zones' => $zoneRepository->findAll(),
        ]);
    }
    else
        return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/new", name="zone_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL'))
        {
        $zone = new Zone();
        $form = $this->createForm(ZoneType::class, $zone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($zone);
            $entityManager->flush();

            return $this->redirectToRoute('zone_index');
        }

        return $this->render('zone/new.html.twig', [
            'zone' => $zone,
            'form' => $form->createView(),
        ]);
    }
    else
        return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/{id}", name="zone_show", methods={"GET"})
     */
    public function show(Request $request, Zone $zone,UserRepository $userRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
            $recherche = new Recherche();
            $form = $this->createForm(RechercheType::class, $recherche);
            $form->handleRequest($request);
            
            if($this->get('security.authorization_checker')->isGranted('ROLE_PRESI_CELL') && !$this->get('security.authorization_checker')->isGranted('ROLE_PRESI'))
            {
                if($this->getUser()->getZone() == $zone )
                    $users = $userRepository->dispoZone($recherche, $zone->getId());
                else $users = null;
            }else
            $users = $userRepository->dispoZone($recherche, $zone->getId());

       

       
        $response = $this->render('zone/show.html.twig', [
            'users' => $users,
            'form' => $form->createView(),
            'zone' => $zone,
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
        return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/{id}/edit", name="zone_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Zone $zone): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL'))
        {
        $form = $this->createForm(ZoneType::class, $zone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('zone_index', [
                'id' => $zone->getId(),
            ]);
        }

        return $this->render('zone/edit.html.twig', [
            'zone' => $zone,
            'form' => $form->createView(),
        ]);
    }
    else
        return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/{id}", name="zone_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Zone $zone): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL'))
        {
        if ($this->isCsrfTokenValid('delete'.$zone->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($zone);
            $entityManager->flush();
        }

        return $this->redirectToRoute('zone_index');
    }
    else
        return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/region/{id}", name="zone_region", methods={"GET"})
     */
    public function region(Zone $zone,RegionRepository $regionRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
            

        return $this->render('zone/regions.html.twig', [
            'zone' => $zone,
            'regions' => $regionRepository->findBy(['zone' => $zone->getId()])
        ]);
        }
        else
            return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/Cellule/{id}", name="zone_cellule", methods={"GET"})
     */
    public function cellule(Zone $zone,CelluleRepository $celluleRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {

        return $this->render('zone/cellules.html.twig', [
            'zone' => $zone,
            'cellules' => $celluleRepository->findBy(['zone' => $zone->getId()])
        ]);
        }
        else
            return $this->redirectToRoute('security_logout');
    }
}

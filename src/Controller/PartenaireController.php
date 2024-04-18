<?php

namespace App\Controller;

use App\Entity\Partenaire;
use App\Entity\Financement;
use App\Entity\Credit;
use App\Form\PartenaireType;
use App\Form\FinancementType;
use App\Repository\PartenaireRepository;
use App\Repository\FinancementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/partenaire")
 */
class PartenaireController extends AbstractController
{
    /**
     * @Route("/", name="partenaire_index", methods={"GET"})
     */
    public function index(PartenaireRepository $partenaireRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
        return $this->render('partenaire/index.html.twig', [
            'partenaires' => $partenaireRepository->findAll(),
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/new", name="partenaire_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $partenaire = new Partenaire();
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partenaire);
            $entityManager->flush();

            return $this->redirectToRoute('partenaire_index');
        }

        return $this->render('partenaire/new.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/{id}", name="partenaire_show", methods={"GET"})
     */
    public function show(Partenaire $partenaire, FinancementRepository $financement): Response
    {
        
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
        $financements = $financement->findBy(['partenaire' => $partenaire->getId()]);
        
        $response = $this->render('partenaire/show.html.twig', [
            'partenaire' => $partenaire,
            'financements' => $financements,
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
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/{id}/edit", name="partenaire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Partenaire $partenaire): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('partenaire_index', [
                'id' => $partenaire->getId(),
            ]);
        }

        return $this->render('partenaire/edit.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/{id}", name="partenaire_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Partenaire $partenaire): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        if ($this->isCsrfTokenValid('delete'.$partenaire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($partenaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('partenaire_index');
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }
    /**
     * @Route("/Financement/{partenaire}", name="partenaire_financement", methods={"GET","POST"})
     */
    public function financement(Request $request, Partenaire $partenaire): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $financement = new Financement();
        $form = $this->createForm(FinancementType::class, $financement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $financement->setDate(date_create_from_format('j/m/Y', $financement->getDatefinance()));//creation de la date de naissance
            $financement->setPartenaire($partenaire);
            $entityManager->persist($financement);
            $credit = New Credit();
            $credit->setMontant($financement->getMontant());
            $credit->setFinancement($financement);
            $entityManager->persist($credit);
            $this->addFlash('notice', 'Fianancement enregistré avec succés');
            $entityManager->flush();

            return $this->redirectToRoute('partenaire_show', ['id' => $partenaire->getId()]);
            
        }

        return $this->render('partenaire/financement.html.twig', [
            'form' => $form->createView(),
            'partenaire' => $partenaire,
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }
}

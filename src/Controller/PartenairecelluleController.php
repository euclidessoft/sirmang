<?php

namespace App\Controller;

use App\Entity\Partenairecellule;
use App\Entity\Financementcellule;
use App\Entity\Cellule;
use App\Entity\Creditcellule;
use App\Form\PartenairecelluleType;
use App\Form\FinancementcelluleType;
use App\Repository\PartenairecelluleRepository;
use App\Repository\FinancementcelluleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/partenairecellule")
 */
class PartenairecelluleController extends AbstractController
{
    /**
     * @Route("/Cellule/{cellule}", name="partenairecellule_index", methods={"GET"})
     */
    public function index(PartenairecelluleRepository $partenairecelluleRepository, Cellule $cellule): Response
    {   if(($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_CELL') && $cellule == $this->getUser()->getCellule()) || !$this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {


            if($this->get('security.authorization_checker')->isGranted('ROLE_PRESI_CELL') && !$this->get('security.authorization_checker')->isGranted('ROLE_PRESI'))
            {// decoonexion presi zone appartenant pas a la zone
                if($cellule->getId() != $this->getUser()->getCellule()->getId())
                return $this->redirect($this->generateUrl('security_logout'));
            }

        return $this->render('partenairecellule/index.html.twig', [
            'partenairecellules' => $partenairecelluleRepository->findBy([ 'cellule' => $cellule->getId()]),
            'cellule' => $cellule,
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/{cellule}/new", name="partenairecellule_new", methods={"GET","POST"})
     */
    public function new(Request $request, Cellule $cellule): Response
    {
        if(($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL') && $cellule == $this->getUser()->getCellule()) || $this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $partenairecellule = new Partenairecellule();
        $form = $this->createForm(PartenairecelluleType::class, $partenairecellule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $partenairecellule->setCellule($cellule);
            $entityManager->persist($partenairecellule);
            $entityManager->flush();

            return $this->redirectToRoute('partenairecellule_index' , [ 'cellule' => $cellule->getId()]);
        }

        return $this->render('partenairecellule/new.html.twig', [
            'partenairecellule' => $partenairecellule,
            'form' => $form->createView(),
            'cellule' => $cellule,
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/{cellule}/{id}", name="partenairecellule_show", methods={"GET"})
     */
    public function show(Partenairecellule $partenairecellule, PartenairecelluleRepository $partenairecelluleRepository, Cellule $cellule, FinancementcelluleRepository $financement): Response
    {
        if(($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL') && $cellule == $this->getUser()->getCellule()) || $this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
            if($this->get('security.authorization_checker')->isGranted('ROLE_PRESI_CELL') && !$this->get('security.authorization_checker')->isGranted('ROLE_PRESI'))
            {// decoonexion presi zone appartenant pas a la zone
                if($cellule->getId() != $this->getUser()->getCellule()->getId())
                return $this->redirect($this->generateUrl('security_logout'));
            }
        $partenairecellule = $partenairecelluleRepository->findOneBy([ 'cellule' => $cellule->getId(), 'id' => $partenairecellule->getId()]);
        $financements = $financement->findBy(['partenaire' => $partenairecellule->getId(), 'cellule' => $cellule->getId() ]);

        return $this->render('partenairecellule/show.html.twig', [
            'partenairecellule' => $partenairecellule,
            'financements' => $financements,
            'cellule' => $cellule,
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/{cellule}/{id}/edit", name="partenairecellule_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cellule $cellule, Partenairecellule $partenairecellule): Response
    {
        if(($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL') && $cellule == $this->getUser()->getCellule()) || $this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $form = $this->createForm(PartenairecelluleType::class, $partenairecellule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('partenairecellule_index', [
                'id' => $partenairecellule->getId(),
                'cellule' => $cellule->getId(),
            ]);
        }

        return $this->render('partenairecellule/edit.html.twig', [
            'partenairecellule' => $partenairecellule,
            'form' => $form->createView(),
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/{id}", name="partenairecellule_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Partenairecellule $partenairecellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
        {
        if ($this->isCsrfTokenValid('delete'.$partenairecellule->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($partenairecellule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('partenairecellule_index', [ 'cellule' => $this->getUser()->getCellule()->getId()]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/Financement/{cellule}/{partenaire}", name="partenairecellule_financement", methods={"GET","POST"})
     */
    public function financement(Request $request, Partenairecellule $partenaire, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL') && $cellule == $this->getUser()->getCellule())
        {
        $financement = new Financementcellule();
        $form = $this->createForm(FinancementcelluleType::class, $financement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $financement->setDate(date_create_from_format('j/m/Y', $financement->getDatefinance()));//creation de la date de naissance
            $financement->setPartenaire($partenaire);
            $financement->setCellule($cellule);
            $entityManager->persist($financement);
            $credit = New Creditcellule();
            $credit->setMontant($financement->getMontant());
            $credit->setFinancementcellule($financement);
            $credit->setCellule($cellule);
            $entityManager->persist($credit);
            $this->addFlash('notice', 'Fianancement enregistré avec succés');
            $entityManager->flush();

            return $this->redirectToRoute('partenairecellule_show', [ 'cellule' => $cellule->getId(),'id' => $partenaire->getId()]);
        }

        return $this->render('partenairecellule/financement.html.twig', [
            'form' => $form->createView(),
            'partenaire' => $partenaire,
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }
}

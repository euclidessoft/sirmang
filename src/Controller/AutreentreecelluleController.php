<?php

namespace App\Controller;

use App\Entity\Autreentreecellule;
use App\Entity\Cellule;
use App\Entity\Creditcellule;
use App\Form\AutreentreecelluleType;
use App\Repository\AutreentreecelluleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/autreentreecellule")
 */
class AutreentreecelluleController extends AbstractController
{
    /**
     * @Route("/{cellule}", name="autreentreecellule_index", methods={"GET"})
     */
    public function index(AutreentreecelluleRepository $autreentreecelluleRepository, Cellule $cellule): Response
    {
        return $this->render('autreentreecellule/index.html.twig', [
            'autreentreecellules' => $autreentreecelluleRepository->findAll(),
            'cellule' => $cellule,
        ]);
    }

    /**
     * @Route("/new/{cellule}", name="autreentreecellule_new", methods={"GET","POST"})
     */
    public function new(Request $request, Cellule $cellule): Response
    {
        $autreentreecellule = new Autreentreecellule();
        $form = $this->createForm(AutreentreecelluleType::class, $autreentreecellule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $autreentreecellule->setCellule($cellule);
            $entityManager->persist($autreentreecellule);
            $credit = New Creditcellule();
            $credit->setMontant($autreentreecellule->getMontant());
            $credit->setAutreentree($autreentreecellule);
            $credit->setCellule($cellule);
            $entityManager->persist($credit);
            $this->addFlash('notice', 'Enregistré avec succés');
            $entityManager->flush();

            return $this->redirectToRoute('autreentreecellule_index', ['cellule' => $cellule->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('autreentreecellule/new.html.twig', [
            'autreentreecellule' => $autreentreecellule,
            'form' => $form->createView(),
            'cellule' => $cellule,
        ]);
    }

    /*
     * @Route("/{cellule}/{id}", name="autreentreecellule_show", methods={"GET"})
     
    public function show(Autreentreecellule $autreentreecellule): Response
    {
        return $this->render('autreentreecellule/show.html.twig', [
            'autreentreecellule' => $autreentreecellule,
        ]);
    }*/

    /**
     * @Route("/{cellule}/{id}/edit", name="autreentreecellule_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Autreentreecellule $autreentreecellule, Cellule $cellule): Response
    {
        $form = $this->createForm(AutreentreecelluleType::class, $autreentreecellule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $credit = $em->getRepository(Creditcellule::class)->findOneBy([ 'autreentree' => $autreentreecellule->getId(), 'cellule' => $cellule->getId()]);
            $credit->setMontant($autreentreecellule->getMontant());
            $em->persist($credit);

            $em->flush();
            $this->addFlash('notice', 'Modifiée avec succés');

            return $this->redirectToRoute('autreentreecellule_index', [ 'cellule' => $cellule->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('autreentreecellule/edit.html.twig', [
            'autreentreecellule' => $autreentreecellule,
            'form' => $form->createView(),
            'cellule' => $cellule,
        ]);
    }

    /**
     * @Route("/{id}", name="autreentreecellule_delete", methods={"POST"})
     */
    public function delete(Request $request, Autreentreecellule $autreentreecellule): Response
    {
        if ($this->isCsrfTokenValid('delete'.$autreentreecellule->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $credit = $entityManager->getRepository(Creditcellule::class)->findOneBy([ 'autreentree' => $autreentreecellule->getId()]);
            $entityManager->remove($credit);
            $entityManager->remove($autreentreecellule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('autreentreecellule_index', ['cellule' => $this->getUser()->getCellule->getId()], Response::HTTP_SEE_OTHER);
    }
}

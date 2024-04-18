<?php

namespace App\Controller;

use App\Entity\Transfert;
use App\Entity\Debit;
use App\Entity\Creditcellule;
use App\Form\TransfertType;
use App\Repository\TransfertRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/transfert")
 */
class TransfertController extends AbstractController
{
    /**
     * @Route("/", name="transfert_index", methods={"GET"})
     */
    public function index(TransfertRepository $transfertRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
        return $this->render('transfert/index.html.twig', [
            'transferts' => $transfertRepository->findAll(),
        ]);
        }
        else
            return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/new", name="transfert_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $transfert = new Transfert();
        $form = $this->createForm(TransfertType::class, $transfert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($transfert);

            $debit = new Debit();
            $debit->setMontant($transfert->getMontant());
            $debit->setTransfert($transfert);
            $entityManager->persist($debit);

            $creditcellule = New Creditcellule();
            $creditcellule->setMontant($transfert->getMontant());
            $creditcellule->setCellule($transfert->getCellule());
            $creditcellule->setTransfert($transfert);
            $entityManager->persist($creditcellule);

            $entityManager->flush();

            return $this->redirectToRoute('transfert_index');
        }

        return $this->render('transfert/new.html.twig', [
            'transfert' => $transfert,
            'form' => $form->createView(),
        ]);
    }
    else
        return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/{id}/edit", name="transfert_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Transfert $transfert): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $form = $this->createForm(TransfertType::class, $transfert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($transfert);

            $debit = $entityManager->getRepository(Debit::class)->findOneBy([ 'transfert' => $transfert->getId()]);
            $debit->setMontant($transfert->getMontant());
            $entityManager->persist($debit);

            $creditcellule = $entityManager->getRepository(Creditcellule::class)->findOneBy([ 'transfert' => $transfert->getId()]);
            $creditcellule->setMontant($transfert->getMontant());
            $entityManager->persist($creditcellule);

            
            $entityManager->flush();

            return $this->redirectToRoute('transfert_index');
        }

        return $this->render('transfert/edit.html.twig', [
            'transfert' => $transfert,
            'form' => $form->createView(),
        ]);
    }
    else
        return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/{id}", name="transfert_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Transfert $transfert): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        if ($this->isCsrfTokenValid('delete'.$transfert->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            
            $debit = $entityManager->getRepository(Debit::class)->findOneBy([ 'transfert' => $transfert->getId()]);
            
            $creditcellule = $entityManager->getRepository(Creditcellule::class)->findOneBy([ 'transfert' => $transfert->getId()]);
            
            $entityManager->remove($transfert);
            $entityManager->remove($debit);
            $entityManager->remove($creditcellule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('transfert_index');
    }
    else
        return $this->redirectToRoute('security_logout');
    }
}

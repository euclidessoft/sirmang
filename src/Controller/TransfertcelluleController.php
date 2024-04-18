<?php

namespace App\Controller;

use App\Entity\Transfertcellule;
use App\Entity\Cellule;
use App\Entity\Debitcellule;
use App\Entity\Credit;
use App\Form\TransfertcelluleType;
use App\Repository\TransfertcelluleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/transfertcellule")
 */
class TransfertcelluleController extends AbstractController
{
    /**
     * @Route("/{cellule}", name="transfertcellule_index", methods={"GET"})
     */
    public function index(TransfertcelluleRepository $transfertcelluleRepository, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_CELL'))
        {
            if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL') && $cellule != $this->getUser()->getCellule())
            {// decoonexion si povoir de modifier et n'appartenant a la cellule
                return $this->redirect($this->generateUrl('security_logout'));
            }

            if($this->get('security.authorization_checker')->isGranted('ROLE_PRESI_CELL') && !$this->get('security.authorization_checker')->isGranted('ROLE_PRESI'))
            {// decoonexion presi zone appartenant pas a la zone
                if($cellule->getId() != $this->getUser()->getCellule()->getId())
                return $this->redirect($this->generateUrl('security_logout'));
            }
        return $this->render('transfertcellule/index.html.twig', [
            'transferts' => $transfertcelluleRepository->findBy([ 'cellule' => $cellule->getId()]),
            'cellule' => $cellule,
        ]);
        }
        else
            return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/new/{cellule}", name="transfertcellule_new", methods={"GET","POST"})
     */
    public function new(Request $request, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
        {
            if($cellule->getId() != $this->getUser()->getCellule()->getId())// regle de modification
            return $this->redirect($this->generateUrl('security_logout'));
            
        $transfert = new Transfertcellule();
        $transfert->setCellule($cellule);
        $form = $this->createForm(TransfertcelluleType::class, $transfert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($transfert);

            $debit = new Debitcellule();
            $debit->setMontant($transfert->getMontant());
            $debit->setCellule($cellule);
            $debit->setTransfertcellule($transfert);
            $entityManager->persist($debit);

            $credit = New Credit();
            $credit->setMontant($transfert->getMontant());
            $credit->setTransfertcellule($transfert);
            $entityManager->persist($credit);

            $entityManager->flush();

            return $this->redirectToRoute('transfertcellule_index', [ 'cellule' => $cellule->getId()]);
        }

        return $this->render('transfertcellule/new.html.twig', [
            'transfertcellule' => $transfert,
            'form' => $form->createView(),
            'cellule' => $cellule,
        ]);
        }
        else
            return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/{id}/{cellule}/edit", name="transfertcellule_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Transfertcellule $transfertcellule, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
        {
            

                
                    if($cellule->getId() != $this->getUser()->getCellule()->getId())
                    return $this->redirect($this->generateUrl('security_logout'));
                
        $form = $this->createForm(TransfertcelluleType::class, $transfertcellule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($transfertcellule);

            $debitcellule = $entityManager->getRepository(Debitcellule::class)->findOneBy([ 'transfertcellule' => $transfertcellule->getId()]);
            $debitcellule->setMontant($transfertcellule->getMontant());
            $entityManager->persist($debitcellule);

            $credit = $entityManager->getRepository(Credit::class)->findOneBy([ 'transfertcellule' => $transfertcellule->getId()]);
            $credit->setMontant($transfertcellule->getMontant());
            $entityManager->persist($credit);

            
            $entityManager->flush();

            return $this->redirectToRoute('transfertcellule_index', [
                'cellule' => $cellule->getId(),
                
            ]);
        }

        return $this->render('transfertcellule/edit.html.twig', [
            'transfert' => $transfertcellule,
            'form' => $form->createView(),
            'cellule' => $cellule,
        ]);
        }
        else
            return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/{id}/{cellule}", name="transfertcellule_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Transfertcellule $transfertcellule, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
        {
            if($cellule->getId() != $this->getUser()->getCellule()->getId())// regle de modification
            return $this->redirect($this->generateUrl('security_logout'));

        if ($this->isCsrfTokenValid('delete'.$transfertcellule->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            
            $debitcellule = $entityManager->getRepository(Debitcellule::class)->findOneBy([ 'transfertcellule' => $transfertcellule->getId()]);
            $credit = $entityManager->getRepository(Credit::class)->findOneBy([ 'transfertcellule' => $transfertcellule->getId()]);
            
            $entityManager->remove($transfertcellule);
            $entityManager->remove($debitcellule);
            $entityManager->remove($credit);
            
            $entityManager->flush();
        }

        return $this->redirectToRoute('transfertcellule_index', [ 'cellule' => $this->getUser()->getCellule()->getId()]);
        }
        else
            return $this->redirectToRoute('security_logout');
    }
}

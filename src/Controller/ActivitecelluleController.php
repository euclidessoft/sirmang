<?php

namespace App\Controller;

use App\Entity\Activitecellule;
use App\Entity\Cellule;
use App\Entity\Debitcellule;
use App\Entity\Depensecellule;
use App\Form\ActivitecelluleType;
use App\Form\DepensecelluleType;
use App\Entity\Recherche;
use App\Form\RechercheType;
use App\Repository\UserRepository;
use App\Repository\DepensecelluleRepository;
use App\Repository\ActivitecelluleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("Finance/Activitecellule")
 */
class ActivitecelluleController extends AbstractController
{
    /**
     * @Route("/{cellule}", name="activitecellule_index", methods={"GET"})
     */
    public function index(Request $request, ActivitecelluleRepository $activitecelluleRepository, Cellule $cellule): Response
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
                    
            
                
                $response = $this->render('activitecellule/index.html.twig', [
                    'activites' => $activitecelluleRepository->findBy(['cellule'=> $cellule->getId(), 'current' => true],['id' => 'desc']),
                    'cellule' => $cellule,
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
     * @Route("/new/{cellule}", name="activitecellule_new", methods={"GET","POST"})
     */
    public function new(Request $request, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL') && $cellule == $this->getUser()->getCellule())
        {
        $activitecellule = new Activitecellule();
        $form = $this->createForm(ActivitecelluleType::class, $activitecellule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $activitecellule->setCellule($this->getUser()->getCellule());
            $entityManager->persist($activitecellule);
            $entityManager->flush();

            return $this->redirectToRoute('activitecellule_index', [ 'cellule' => $cellule->getId() ]);
        }

        return $this->render('activitecellule/new.html.twig', [
            'activitecellule' => $activitecellule,
            'form' => $form->createView(),
            'cellule' => $cellule,
        ]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }

     /**
     * @Route("/All/{cellule}", name="activitecellule_all", methods={"GET"})
     */
    public function all(ActivitecelluleRepository $activitecelluleRepository, Cellule $cellule): Response
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

             return $this->render('activitecellule/all.html.twig', [
            'activites' => $activitecelluleRepository->findBy(['cellule' => $cellule->getId()]),
            ]);
        }
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_logout');
        }
    }

    /**
     * @Route("/Show/{id}", name="activitecellule_show", methods={"GET"})
     */
    public function show(Activitecellule $activitecellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_CELL'))
         {
        $depenses = $this->getDoctrine()->getManager()->getRepository(Depensecellule::class)->findBy(['activite' => $activitecellule->getId(), 'cellule' => $this->getUser()->getCellule()->getId()],['id' => 'DESC']);
        return $this->render('activitecellule/show.html.twig', [
            'activite' => $activitecellule,
            'depenses' => $depenses,
            'cellule' => $this->getUser()->getCellule(),
        ]);
        }
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_logout');
        }
    }

    /**
     * @Route("/{cellule}/{id}/edit", name="activitecellule_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Activitecellule $activitecellule, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL')  && $cellule == $this->getUser()->getCellule())
         {
            $form = $this->createForm(ActivitecelluleType::class, $activitecellule);
            $form->handleRequest($request);
            if($activitecellule->getCurrent() == true){
            

            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('activitecellule_index', [ 'cellule' => $this->getUser()->getCellule()->getId() ]);
            }   
        }else{
            $this->addFlash('notice', 'Action impossible activitecellule cloturée');
            return $this->redirectToRoute('activitecellule_index', [ 'cellule' => $this->getUser()->getCellule()->getId() ]);
        }

        return $this->render('activitecellule/edit.html.twig', [
            'activitecellule' => $activitecellule,
            'form' => $form->createView(),
            'cellule' => $this->getUser()->getCellule(),
        ]);
        }
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_logout');
        }
    }

    /**
     * @Route("/{id}", name="activitecellule_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Activitecellule $activitecellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL') && $cellule == $this->getUser()->getCellule())
         {
        if ($this->isCsrfTokenValid('delete'.$activitecellule->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($activitecellule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('activitecellule_index', [ 'cellule' => $this->getUser()->getCellule()->getId()]);
        }
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_logout');
        }
    }

     /**
     * @Route("/Depensecellule/{activitecellule}", name="activitecellule_depense", methods={"GET","POST"})
     */
    public function depense(Request $request, Activitecellule $activitecellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
         {
        $depense = new Depensecellule();
        $form = $this->createForm(DepensecelluleType::class, $depense);
        if($activitecellule->getCurrent() == true){
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $depense->setActivite($activitecellule);// on a utiliser active pour activite dans l'entity depense mais il sagit de activitecellule
                $depense->setCellule($this->getUser()->getCellule());
                $entityManager->persist($depense);
                $debit = New Debitcellule();
                $debit->setMontant($depense->getMontant());
                $debit->setDepensecellule($depense);
                $debit->setCellule($this->getUser()->getCellule());
                $entityManager->persist($debit);
                $this->addFlash('notice', 'Depense enregistrée avec succés');
                $entityManager->flush();

                return $this->redirectToRoute('activitecellule_show', ['id' => $activitecellule->getId()]);
            }
        }else{
            $this->addFlash('notice', 'Action impossible activitecellule cloturée');
        }

        return $this->render('activitecellule/depense.html.twig', [
            'form' => $form->createView(),
            'activite' => $activitecellule,
            'depense' => 'oui',
        ]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }

    /**
     * @Route("/Depensecellule/Edit/{depense}", name="activitecellule_depense_edit", methods={"GET","POST"})
     */
    public function editdepense(Request $request, Depensecellule $depense): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
        {
        $form = $this->createForm(DepensecelluleType::class, $depense);
        if($depense->getActivite()->getCurrent() == true){
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $depense->setMontant($depense->getPrix() * $depense->getQuantite());
                $entityManager->persist($depense);
                $debit = $entityManager->getRepository(Debitcellule::class)->findOneBy(['depensecellule' => $depense->getId()]);
                $debit->setMontant($depense->getMontant());
                $entityManager->persist($debit);
                $this->addFlash('notice', 'Depensecellule modifiée avec succés');
                $entityManager->flush();

                return $this->redirectToRoute('activitecellule_show', ['id' => $depense->getActivite()->getId()]);
            }
        }else{
            $this->addFlash('notice', 'Action impossible activitecellule cloturée');
        }
        return $this->render('activitecellule/depenseedit.html.twig', [
            'form' => $form->createView(),
            'activite' => $depense->getActivite(),
            'depense' => 'oui',
        ]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }

    /**
     * @Route("/Activitecellule/Delete/Depensecellule/{depense}", name="activitecellule_depense_delete", methods={"DELETE"})
     */
    public function depensedelete(Request $request, Depensecellule $depense): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
         {
        if($depense->getActivite()->getCurrent() == true){ 
            if ($this->isCsrfTokenValid('delete'.$depense->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $debit = $entityManager->getRepository(Debitcellule::class)->findOneBy(['depensecellule' => $depense->getId()]);
                $entityManager->remove($debit);
                $entityManager->remove($depense);
                $entityManager->flush();
            }
        }else{
            $this->addFlash('notice', 'Action impossible activitecellule cloturée');
        }

        return $this->redirectToRoute('activitecellule_index',[ 'cellule' => $this->getUser()->getcellule()->getId()]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }

     /**
     * @Route("/cloturer/{activitecellule}/", name="activitecellule_cloturer", methods={"GET"})
     */
    public function cloturer(Activitecellule $activitecellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
         {
        $em = $this->getDoctrine()->getManager();
        if($activitecellule->getCurrent() == true){ 
            $activitecellule->setCurrent(false);
            
            $em->persist($activitecellule); 
            $em->flush();
        }else{
            $this->addFlash('notice', 'Action impossible activite deja cloturée');
        }

        return $this->redirectToRoute('activitecellule_index', [ 'cellule' => $this->getUser()->getCellule()->getId()]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
        
    }
}

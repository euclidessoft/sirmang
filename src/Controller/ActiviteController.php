<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\Debit;
use App\Entity\Depense;
use App\Form\ActiviteType;
use App\Form\DepenseType;
use App\Entity\Recherche;
use App\Form\RechercheType;
use App\Repository\UserRepository;
use App\Repository\DepenseRepository;
use App\Repository\ActiviteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("Finance/Activite")
 */
class ActiviteController extends AbstractController
{
    /**
     * @Route("/", name="activite_index", methods={"GET"})
     */
    public function index(Request $request, ActiviteRepository $activiteRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
                
        
               
                $response = $this->render('activite/index.html.twig', [
                    'activites' => $activiteRepository->findBy(['current' => true],['id' => 'desc']),
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
                return $this->redirectToRoute('security_logout');
            }
    }

    /**
     * @Route("/All/", name="activite_all", methods={"GET"})
     */
    public function all(ActiviteRepository $activiteRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
            return $this->render('activite/all.html.twig', [
            'activites' => $activiteRepository->findAll(),
            ]);
        }
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_logout');
        }
    }

    /**
     * @Route("/new", name="activite_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($activite);
            $entityManager->flush();

            return $this->redirectToRoute('activite_index');
        }

        return $this->render('activite/new.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
        }
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_logout');
        }
    }

    /**
     * @Route("/{id}", name="activite_show", methods={"GET"})
     */
    public function show(Activite $activite): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
        $depenses = $this->getDoctrine()->getManager()->getRepository(Depense::class)->findBy(['activite' => $activite->getId()],['id' => 'DESC']);
        return $this->render('activite/show.html.twig', [
            'activite' => $activite,
            'depenses' => $depenses,
        ]);
        }
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_logout');
        }
    }

    /**
     * @Route("/{id}/edit", name="activite_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Activite $activite): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
            $form = $this->createForm(ActiviteType::class, $activite);
            $form->handleRequest($request);
            if($activite->getCurrent() == true){
            

            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('activite_index');
            }   
        }else{
            $this->addFlash('notice', 'Action impossible activite cloturée');
            return $this->redirectToRoute('activite_index');
        }

        return $this->render('activite/edit.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
        }
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_logout');
        }
    }

    /**
     * @Route("/{id}", name="activite_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Activite $activite): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        if ($this->isCsrfTokenValid('delete'.$activite->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($activite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('activite_index');
        }
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_logout');
        }
    }

     /**
     * @Route("/Depense/{activite}", name="activite_depense", methods={"GET","POST"})
     */
    public function depense(Request $request, Activite $activite): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $depense = new Depense();
        $form = $this->createForm(DepenseType::class, $depense);
        if($activite->getCurrent() == true){
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $depense->setActivite($activite);
                $entityManager->persist($depense);
                $debit = New Debit();
                $debit->setMontant($depense->getMontant());
                $debit->setDepense($depense);
                $entityManager->persist($debit);
                $this->addFlash('notice', 'Depense enregistrée avec succés');
                $entityManager->flush();

                return $this->redirectToRoute('activite_show', ['id' => $activite->getId()]);
            }
        }else{
            $this->addFlash('notice', 'Action impossible activite cloturée');
        }

        return $this->render('activite/depense.html.twig', [
            'form' => $form->createView(),
            'activite' => $activite,
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
     * @Route("/Depense/Edit/{depense}", name="activite_depense_edit", methods={"GET","POST"})
     */
    public function editdepense(Request $request, Depense $depense): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $form = $this->createForm(DepenseType::class, $depense);
        if($depense->getActivite()->getCurrent() == true){
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $depense->setMontant($depense->getPrix() * $depense->getQuantite());
                $entityManager->persist($depense);
                $debit = $entityManager->getRepository(Debit::class)->findOneBy(['depense' => $depense->getId()]);
                $debit->setMontant($depense->getMontant());
                $entityManager->persist($debit);
                $this->addFlash('notice', 'Depense modifiée avec succés');
                $entityManager->flush();

                return $this->redirectToRoute('activite_show', ['id' => $depense->getActivite()->getId()]);
            }
        }else{
            $this->addFlash('notice', 'Action impossible activite cloturée');
        }
        return $this->render('activite/depenseedit.html.twig', [
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
     * @Route("/Activite/Delete/Depense/{depense}", name="activite_depense_delete", methods={"DELETE"})
     */
    public function depensedelete(Request $request, Depense $depense): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        if($depense->getActivite()->getCurrent() == true){ 
            if ($this->isCsrfTokenValid('delete'.$depense->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $debit = $entityManager->getRepository(Debit::class)->findOneBy(['depense' => $depense->getId()]);
                $entityManager->remove($debit);
                $entityManager->remove($depense);
                $entityManager->flush();
            }
        }else{
            $this->addFlash('notice', 'Action impossible activite cloturée');
        }

        return $this->redirectToRoute('activite_index');
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }

     /**
     * @Route("/cloturer/{activite}/", name="activite_cloturer", methods={"GET"})
     */
    public function cloturer(Activite $activite): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $em = $this->getDoctrine()->getManager();
        if($activite->getCurrent() == true){ 
            $activite->setCurrent(false);
            
            $em->persist($activite); 
            $em->flush();
        }else{
            $this->addFlash('notice', 'Action impossible activite deja cloturée');
        }

        return $this->redirectToRoute('activite_index');
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
        
    }
}

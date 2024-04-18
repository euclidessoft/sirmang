<?php

namespace App\Controller;

use App\Entity\Poste;
use App\Entity\User;
use App\Form\PosteType;
use App\Repository\PosteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/poste")
 */
class PosteController extends AbstractController
{
    /**
     * @Route("/CA", name="poste_index", methods={"GET"})
     */
    public function index(PosteRepository $posteRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
        return $this->render('poste/index.html.twig', [
            'postes' => $posteRepository->findBy(['bureau' => 'CA']),
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }
    /**
     * @Route("/BEN", name="poste_ben_index", methods={"GET"})
     */
    public function benindex(PosteRepository $posteRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_ADMIN_CELL'))
       {
        return $this->render('poste/benindex.html.twig', [
            'postes' => $posteRepository->findBy(['bureau' => 'BEN']),
        ]);
        }
        else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/CA/new", name="poste_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN'))
        {
        $poste = new Poste();
        $poste->setBureau('CA');
        $form = $this->createForm(PosteType::class, $poste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            if($poste->getUser() != null){
                $poste->getUser()->setPoste(true);
                $entityManager->persist($poste->getUser());
            }
            $entityManager->persist($poste);
            $entityManager->flush();

            return $this->redirectToRoute('poste_index');
        }

        return $this->render('poste/new.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

     /**
     * @Route("/BEN/new", name="poste_ben_new", methods={"GET","POST"})
     */
    public function bennew(Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN'))
        {
        $poste = new Poste();
        $poste->setBureau('BEN');
        $form = $this->createForm(PosteType::class, $poste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            if($poste->getUser() != null){

                switch($poste->getId()){
                    case 16: { $poste->getUser()->setRoles(['ROLE_PRESI']);break;}
                    case 17: { $poste->getUser()->setRoles(['ROLE_PRESI']);break;}
                    case 18: { $poste->getUser()->setRoles(['ROLE_PRESI']);break;}
                    case 19: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_BEN']);break;}
                    case 20: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_BEN']);break;}
                    case 29: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_BEN']);break;}
                    case 26: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_BEN']);break;}
                    case 40: { $poste->getUser()->setRoles(['ROLE_PRESI_ZONE']);break;}
                    case 41: { $poste->getUser()->setRoles(['ROLE_PRESI_ZONE']);break;}
                    case 42: { $poste->getUser()->setRoles(['ROLE_PRESI_ZONE']);break;}
                    case 43: { $poste->getUser()->setRoles(['ROLE_PRESI_ZONE']);break;}
                    case 44: { $poste->getUser()->setRoles(['ROLE_PRESI_ZONE']);break;}
                    case 45: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 46: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 47: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 48: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 49: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 50: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 51: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 52: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 53: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 54: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 55: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 56: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 57: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 58: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 59: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 60: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 61: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 62: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 63: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 64: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 65: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 66: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 67: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 68: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 69: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 70: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 71: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 72: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 73: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 74: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 75: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 76: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 77: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 78: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 79: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 80: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 81: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 82: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 83: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 84: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 85: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 86: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 87: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 88: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 89: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 90: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 91: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 92: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 93: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                   default:{
                    $poste->getUser()->setRoles(['ROLE_MEMBRE']);
                    $poste->getUser()->setPoste(false);
                    $entityManager->persist($poste->getUser());
                    break;
                   } 

                }
                $poste->getUser()->setPoste(true);
                $entityManager->persist($poste->getUser());
            }
            $entityManager->persist($poste);
            $entityManager->flush();

            return $this->redirectToRoute('poste_ben_index');
        }

        return $this->render('poste/bennew.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }


    /**
     * @Route("/{id}/edit", name="poste_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Poste $poste): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN'))
        {
        $form = $this->createForm(PosteType::class, $poste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            if($poste->getUser() != null){
                $poste->getUser()->setPoste(true);
                $entityManager->persist($poste->getUser());
            }
            $entityManager->persist($poste);
            $entityManager->flush();

            return $this->redirectToRoute('poste_index', [
                'id' => $poste->getId(),
            ]);
        }

        return $this->render('poste/edit.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/BEN/{id}/edit", name="poste_ben_edit", methods={"GET","POST"})
     */
    public function benedit(Request $request, Poste $poste): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN'))
        {
           
        $form = $this->createForm(PosteType::class, $poste);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            
            if($poste->getUser() != null){// avec affectation
                
                if($request->getSession()->get('olduser') && ($request->getSession()->get('olduser') != $poste->getUser()->getId())){
                    $olduser = $entityManager->getRepository(User::Class)->find($request->getSession()->get('olduser'));
                    $olduser->setRoles(['ROLE_MEMBRE']);
                    $olduser->setPoste(false);
                    $entityManager->persist($olduser);
                    $request->getSession()->remove('olduser');
                }
                switch($poste->getId()){
                    case 16: { $poste->getUser()->setRoles(['ROLE_PRESI']);break;}
                    case 17: { $poste->getUser()->setRoles(['ROLE_PRESI']);break;}
                    case 18: { $poste->getUser()->setRoles(['ROLE_PRESI']);break;}
                    case 19: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_BEN']);break;}
                    case 20: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_BEN']);break;}
                    case 29: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_BEN']);break;}
                    case 26: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_BEN']);break;}
                    case 40: { $poste->getUser()->setRoles(['ROLE_PRESI_ZONE']);break;}
                    case 41: { $poste->getUser()->setRoles(['ROLE_PRESI_ZONE']);break;}
                    case 42: { $poste->getUser()->setRoles(['ROLE_PRESI_ZONE']);break;}
                    case 43: { $poste->getUser()->setRoles(['ROLE_PRESI_ZONE']);break;}
                    case 44: { $poste->getUser()->setRoles(['ROLE_PRESI_ZONE']);break;}
                    case 45: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 46: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 47: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 48: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 49: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 50: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 51: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 52: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 53: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 54: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 55: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 56: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 57: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 58: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 59: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 60: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 61: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 62: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 63: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 64: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 65: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 66: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 67: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 68: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 69: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 70: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 71: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 72: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 73: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 74: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 75: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 76: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 77: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 78: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 79: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 80: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 81: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 82: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 83: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 84: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 85: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 86: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 87: { $poste->getUser()->setRoles(['ROLE_PRESI_CELL']);break;}
                    case 88: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 89: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 90: { $poste->getUser()->setRoles(['ROLE_MODIF_ADMIN_CELL']);break;}
                    case 91: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 92: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                    case 93: { $poste->getUser()->setRoles(['ROLE_MODIF_FIN_CELL']);break;}
                   default:{
                    $poste->getUser()->setRoles(['ROLE_MEMBRE']);
                    $poste->getUser()->setPoste(false);
                    $entityManager->persist($poste->getUser());
                    break;
                   } 

                }
                if($poste->getId() < 40 )// les fonctions de cellule sont > 40
                {
                    $poste->getUser()->setPoste(true);
                    $entityManager->persist($poste->getUser());
                }

                
            }
            else if($request->getSession()->get('olduser')){// modification sans affection
                $olduser = $entityManager->getRepository(User::Class)->find($request->getSession()->get('olduser'));
                $olduser->setRoles(['ROLE_MEMBRE']);
                $olduser->setPoste(false);
                $entityManager->persist($olduser);
                $request->getSession()->remove('olduser');
                $poste->setUser(null);
            }
            $entityManager->persist($poste);
            
            $entityManager->flush();
            
            return $this->redirectToRoute('poste_ben_index');
        }
        if($poste->getUser() != null)
        $request->getSession()->set('olduser',  $poste->getUser()->getId());
        
        return $this->render('poste/benedit.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/{id}", name="poste_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Poste $poste): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN'))
        {
        if ($this->isCsrfTokenValid('delete'.$poste->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($poste);
            $entityManager->flush();
        }

        return $this->redirectToRoute('poste_index');
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }
}

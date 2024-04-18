<?php

namespace App\Controller;

use App\Entity\Assignation;
use App\Entity\AcquitAssignation;
use App\Entity\Creditcellule;
use App\Entity\Cellule;
use App\Entity\Credit;
use App\Entity\Annee;
use App\Entity\Poste;
use App\Form\AssignationType;
use App\Repository\AssignationRepository;
use App\Repository\UserRepository;
use App\Repository\AcquitAssignationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("Finance/Assignation")
 */
class AssignationController extends AbstractController
{
    /**
     * @Route("/Bureau/All/", name="bureau_assignation_all", methods={"GET"})
     */
    public function all(AssignationRepository $assignationRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
        return $this->render('assignation/bureauall.html.twig', [
            'assignations' => $assignationRepository->findAll(),
        ]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }
    /**
     * @Route("/Cellule/All/", name="assignation_all", methods={"GET"})
     */
    public function celall(AssignationRepository $assignationRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_CELL'))
        {
        return $this->render('assignation/celall.html.twig', [
            'assignations' => $assignationRepository->findAll(),
        ]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }

    /**
     * @Route("/Cellule/{cellule}", name="assignation_index", methods={"GET"})
     */
    public function index(Cellule $cellule, AssignationRepository $assignationRepository, AcquitAssignationRepository $AcquitAssignationRepository, UserRepository $userRepository): Response
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
            
            $assignation = $this->getDoctrine()->getManager()->getRepository(Assignation::class)->findOneBy(['current' => true]);
            $allusers = $userRepository->findBy(['enabled' => true, 'cellule' => $cellule->getId(), 'poste' => false],['nom' => 'ASC']);// selection des ebres de la             cellule
            $users = array();
            $cotisusers = array();
            if($assignation != null){
            $userscotis = $AcquitAssignationRepository->findBy(['assignation' => $assignation->getId()]);// selection des membre cotisants
            foreach($allusers as $user){// tri des membre non cotisant
                
                foreach($userscotis as $cotiser){
                    if($user->getId() == $cotiser->getUser()->getId()){
                        $cotisusers[] = $user;
                        goto suite;
                    }
                }
                
                    $users[] = $user;
                
                suite:
            }
        }

            $response = $this->render('assignation/index.html.twig', [
                'assignation' => $assignationRepository->findOneBy(['current' =>true]),
                'users' => $users,
                'cotisusers' => $cotisusers,
                'cellule' => $cellule
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
     * @Route("/Bureau/", name="bureau_assignation_index", methods={"GET"})
     */
    public function bureau(): Response
    {// cotisation ca et ben
        
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
        $assignation = $this->getDoctrine()->getManager()->getRepository(Assignation::class)->findOneBy(['current' => true]);
        
        $response = $this->render('assignation/bureau.html.twig', [
            'assignation' => $assignation,
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
     * @Route("/new", name="assignation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $entityManager = $this->getDoctrine()->getManager();
        $test = $entityManager->getRepository(Assignation::class)->findBy( ['current' => true]);
        if(empty($test)){
            $assignation = new Assignation();
            $form = $this->createForm(AssignationType::class, $assignation);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                
                
                
                $entityManager->persist($assignation);
                $entityManager->flush();
            

                return $this->redirectToRoute('bureau_assignation_index');
            }

            return $this->render('assignation/new.html.twig', [
                'assignation' => $assignation,
                'form' => $form->createView(),
            ]);
        }else{
            $this->addFlash('notice', 'Il y a une assignation en cours');
            return $this->redirectToRoute('bureau_assignation_index');
        }
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }

    /**
     * @Route("/{id}/edit", name="assignation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Assignation $assignation): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $form = $this->createForm(AssignationType::class, $assignation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $assignation->setDateeven(date_create_from_format('j/m/Y', $assignation->getDatequery()));//creation de la date de naissance
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bureau_assignation_index');
        }

        return $this->render('assignation/edit.html.twig', [
            'assignation' => $assignation,
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
     * @Route("/{id}", name="assignation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Assignation $assignation): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        if ($this->isCsrfTokenValid('delete'.$assignation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($assignation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('bureau_assignation_index');
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }

     /**
     * @Route("/assignationMultiple", name="assignation_multiple_index", methods={"POST"})
     */
    public function multiple(Request $request, UserRepository $userrepo)
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
        {
			
				if($request->get('mbr'))
				{
                    $em = $this->getDoctrine()->getManager();
                    $annee = $em->getRepository(Annee::class)->findOneBy(['current' => true]);
                    $assignation = $em->getRepository(Assignation::class)->findOneBy(['current' => true]);
                    
					$mbr = explode(";",$request->get('mbr'));
                    foreach($mbr as $membre){
                        if($membre != 0){
                            $credit = "20" + $membre;
                            $$membre = new AcquitAssignation();
                            $user = $userrepo->find($membre);
                            $$membre->setUser($user);
                            $$membre->setMontant($assignation->getMontant());
                            $$membre->setAnnee($annee);
                            $$membre->setAssignation($assignation);
                            $em->persist($$membre);
                            $$credit = new Creditcellule();
                            $$credit->setMontant($assignation->getMontant());
                            $$credit->setAcquitassignation($$membre);
                            $$credit->setCellule($this->getUser()->getCellule());
                            $em->persist($$credit);


                        }
                    }
                    $em->flush();
					$this->addFlash('notice', 'Operation réussie');
					$res['id']= 'ok';
					
					$response = new Response();
					$response->headers->set('content-type','application/json');
					$re = json_encode($res);
					$response->setContent($re);
					return $response;
				}
		}
        else return $this->redirect($this->generateUrl('security_login'));
	}

    /**
     * @Route("/assignationBureau", name="assignation_bureau_index", methods={"POST"})
     */
    public function asigbureau(Request $request, UserRepository $userrepo)
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
			
				if($request->get('mbr'))
				{
                    $em = $this->getDoctrine()->getManager();
                    $annee = $em->getRepository(Annee::class)->findOneBy(['current' => true]);
                    $assignation = $em->getRepository(Assignation::class)->findOneBy(['current' => true]);
                    
					$mbr = explode(";",$request->get('mbr'));
                    foreach($mbr as $membre){
                        if($membre != 0){
                            $credit = "20" + $membre;
                            $$membre = new AcquitAssignation();
                            $user = $userrepo->find($membre);
                            $$membre->setUser($user);
                            $$membre->setMontant($user->getCotisation()->getMontant());
                            $$membre->setAnnee($annee);
                            $$membre->setAssignation($assignation);
                            $em->persist($$membre);
                            $$credit = new Credit();
                            $$credit->setMontant($assignation->getMontant());
                            $$credit->setAcquitassignation($$membre);
                            $em->persist($$credit);


                        }
                    }
                    $em->flush();
					$this->addFlash('notice', 'Operation réussie');
					$res['id']= 'ok';
					
					$response = new Response();
					$response->headers->set('content-type','application/json');
					$re = json_encode($res);
					$response->setContent($re);
					return $response;
				}
		}
        else return $this->redirect($this->generateUrl('security_login'));
	}


    /**
     * @Route("/CA/", name="assignation_ca", methods={"GET"})
     */
    public function ca(AssignationRepository $assignationRepository, AcquitAssignationRepository $AcquitAssignationRepository)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {

                $assignation = $this->getDoctrine()->getManager()->getRepository(Assignation::class)->findOneBy(['current' => true]);
                
                $postes = $this->getDoctrine()->getManager()->getRepository(Poste::class)->findBy(['bureau' => 'CA']);// selection des ebres de la             cellule
                $users = array();
                $cotisusers = array();
                if($assignation != null){
                    $userscotis = $AcquitAssignationRepository->findBy(['assignation' => $assignation->getId()]);// selection des membre cotisants
                    foreach($postes as $poste){// tri des membres non cotisant
                        if($poste->getUser() != null){
                                foreach($userscotis as $cotiser){
                                    if($poste->getUser()->getId() == $cotiser->getUser()->getId()){
                                        $cotisusers[] = $poste->getUser();
                                        goto suite;
                                    }
                                }
                            
                                $users[] = $poste->getUser();
                            }
                            suite:
                        }
                }
                
        
               
                $response = $this->render('assignation/ca.html.twig', [
                    'assignation' => $assignation,
                    'users' => $users,
                    'cotisusers' => $cotisusers,
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
     * @Route("/BEN/", name="assignation_ben", methods={"GET"})
     */
    public function ben(AssignationRepository $assignationRepository, AcquitAssignationRepository $AcquitAssignationRepository)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {

                
                $assignation = $this->getDoctrine()->getManager()->getRepository(Assignation::class)->findOneBy(['current' => true]);
                
                $postes = $this->getDoctrine()->getManager()->getRepository(Poste::class)->findBy(['bureau' => 'BEN']);// selection des ebres de la             cellule
                $users = array();
                $cotisusers = array();
                if($assignation != null){
                    $userscotis = $AcquitAssignationRepository->findBy(['assignation' => $assignation->getId()]);// selection des membre cotisants
                    foreach($postes as $poste){// tri des membres non cotisant
                        if($poste->getUser() != null){
                                foreach($userscotis as $cotiser){
                                    if($poste->getUser()->getId() == $cotiser->getUser()->getId()){
                                        $cotisusers[] = $poste->getUser();
                                        goto suite;
                                    }
                                }
                            
                                $users[] = $poste->getUser();
                            }
                            suite:
                        }
                }
                
        
               
                $response = $this->render('assignation/ben.html.twig', [
                    'assignation' => $assignation,
                    'users' => $users,
                    'cotisusers' => $cotisusers,
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

}

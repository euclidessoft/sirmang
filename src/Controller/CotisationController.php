<?php

namespace App\Controller;

use App\Entity\Cotisation;
use App\Entity\Cellule;
use App\Entity\Mois;
use App\Entity\Annee;
use App\Entity\Cotismensuel;
use App\Entity\Creditcellule;
use App\Entity\Credit;
use App\Entity\Poste;
use App\Entity\Recherche;
use App\Form\CotismensuelType;
use App\Form\RechercheType;
use App\Form\CotisationType;
use App\Repository\CotisationRepository;
use App\Repository\CotismensuelRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("Finance/Cotisation")
 */
class CotisationController extends AbstractController
{
     /**
     * @Route("/{mois}", name="cotisation", methods={"GET"})
     */
    public function cotisation(CotisationRepository $cotisationRepository, Mois $mois): Response
    {// cotisation ca et ben
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
        return $this->render('finance/cotisermultiple.html.twig', [
            'mois' => $mois,
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/Cellule/{cellule}/{mois}", name="cotisation_cellule", methods={"GET"})
     */
    public function index( CotismensuelRepository $cotismensuelRepository, UserRepository $userRepository, Cellule $cellule, Mois $mois): Response
    {//cotisation des cellules
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_CELL'))
        {

            $annee = $this->getDoctrine()->getManager()->getRepository(Annee::class)->findOneBy(['current' => true]);
            $userscotis = $cotismensuelRepository->findBy(['mois' => $mois->getId(), 'annee' => $annee->getId()]);// selection des membre cotisants
            $allusers = $userRepository->findBy(['enabled' => true, 'cellule' => $cellule, 'poste' => false],['nom' => 'ASC']);// selection des ebres de la             cellule
            $users = array();
            $cotisusers = array();
            foreach($allusers as $user){// tri des membres non cotisant
                
                foreach($userscotis as $cotiser){
                    if($user->getId() == $cotiser->getUser()->getId()){
                        $cotisusers[] = $cotiser;
                        goto suite;
                    }
                }
                
                    $users[] = $user;
                
                suite:
            }

            $response = $this->render('cotisation/index.html.twig', [
                'users' => $users,
                'cotisusers' => $cotisusers,
                'cellule' => $cellule,
                'mois' => $mois,
                'annee' =>$annee
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
     * @Route("/Cellule/{cellule}/", name="cotisation_cellule_one", methods={"GET","POST"})
     */
    public function one_index(Request $request, Cellule $cellule): Response
    {//cotisation des cellules
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_CELL'))
        {
            $annee = $this->getDoctrine()->getManager()->getRepository(Annee::class)->findOneBy(['current' => true]);
            $cotisation = new Cotismensuel();
            $cotisation->setAnnee($annee);
            $form = $this->createForm(CotismensuelType::class, $cotisation);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($cotisation);
                $entityManager->flush();

                return $this->redirectToRoute('partenaire_index');
            }




            $response = $this->render('cotisation/one.html.twig', [

                'form' => $form->createView(),
                'cellule' => $cellule,
                'annee' =>$annee
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
     * @Route("/Setting/{cellule}", name="cotisation_param_index", methods={"GET"})
     */
    public function param(CotisationRepository $cotisationRepository, Cellule $cellule): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
        {
            return $this->render('cotisation/param_cotisation.html.twig', [
                'cotisations' => $cotisationRepository->findby(['cellule' => $cellule]),
            ]);
        }
        else
            return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/new/{cellule}", name="cotisation_new", methods={"GET","POST"})
     */
    public function new(Request $request, Cellule $cellule): Response
    {// definir cotisation dun Dahira
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL')
            && $cellule->getId() == $this->getUser()->getCellule()->getId())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $verif = $entityManager->getRepository(Cotisation::class)->findBy(['cellule' => $cellule]);
            if(empty($verif)) {
                $cotisation = new Cotisation();

                $form = $this->createForm(CotisationType::class, $cotisation);
                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $cotisation->setCellule($cellule);
                    $cellule->setCotisation($cotisation);
                    $entityManager->persist($cotisation);
                    $entityManager->persist($cellule);
                    $entityManager->flush();
                    $this->addFlash('notice' , 'Cotisation definie');
                    return $this->redirectToRoute('security_profile');
                }

                return $this->render('cotisation/new.html.twig', [
                    'cotisation' => $cotisation,
                    'form' => $form->createView(),
                ]);
            }else{
                return $this->redirectToRoute('cotisation_index');
            }
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/Cellules", name="cotisation_cellules")
     */
    public function cellules(Request $request, UserRepository $userRepository)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
                $recherche = new Recherche();
                $form = $this->createForm(RechercheType::class, $recherche);
                $form->handleRequest($request);
        
               
                $response = $this->render('cotisation/cellules.html.twig', [
                    //'users' => $userRepository->findBy(['enabled' => true],['nom' => 'ASC']),
                    'users' => $userRepository->dispo($recherche),
                    'form' => $form->createView(),
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
     * @Route("/{id}/edit/{cellule}", name="cotisation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cotisation $cotisation, Cellule $cellule): Response
    {// Modification cotisation dahira
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL')
            && $cellule->getId() == $this->getUser()->getCellule()->getId())
        {
        $form = $this->createForm(CotisationType::class, $cotisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('notice' , 'Cotisation modifiée');
            return $this->redirectToRoute('security_profile');
        }

        return $this->render('cotisation/edit.html.twig', [
            'cotisation' => $cotisation,
            'form' => $form->createView(),
        ]);
    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/{id}/{cellule}/{mois}", name="cotisation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, $id, $cellule, $mois): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN') || $this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
        {
            $entityManager = $this->getDoctrine()->getManager();
            $cotisation = $entityManager->getRepository(Cotismensuel::class)->find($id);
        if ($this->isCsrfTokenValid('delete'.$cotisation->getId(), $request->request->get('_token'))) {
            
            if($cellule == "BEN" || $cellule == "CA")
                $credit = $entityManager->getRepository(Credit::class)->findOneBy(['cotismensuel' => $cotisation->getId()]);
            else 
                $credit = $entityManager->getRepository(Creditcellule::class)->findOneBy(['cotismensuel' => $cotisation->getId()]);
            
            $entityManager->remove($credit);   
            $entityManager->remove($cotisation);
            $entityManager->flush();
            $this->addFlash('notice', 'Operation réussie');
        }
        if($cellule == "BEN")
            return $this->redirectToRoute('cotisation_ben', [ 'mois' => $mois]);
        elseif($cellule == "CA")
            return $this->redirectToRoute('cotisation_ca', [ 'mois' => $mois]);
        else 
            return $this->redirectToRoute('cotisation_cellule', ['cellule' => $cellule, 'mois' => $mois]);
        

    }
    else return $this->redirect($this->generateUrl('security_logout'));
    }


     /**
     * @Route("/CA/{mois}", name="cotisation_ca")
     */
    public function ca(CotismensuelRepository $cotismensuelRepository, Mois $mois)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {

                $annee = $this->getDoctrine()->getManager()->getRepository(Annee::class)->findOneBy(['current' => true]);
                $userscotis = $cotismensuelRepository->findBy(['mois' => $mois->getId(), 'annee' => $annee->getId()]);// selection des membre cotisants
                $postes = $this->getDoctrine()->getManager()->getRepository(Poste::class)->findBy(['bureau' => 'CA', 'cellule' => false]);// selection des ebres de la             cellule
                $users = array();
                $cotisusers = array();
                foreach($postes as $poste){// tri des membres non cotisant
                   if($poste->getUser() != null){
                        foreach($userscotis as $cotiser){
                            if($poste->getUser()->getId() == $cotiser->getUser()->getId()){
                                $cotisusers[] = $cotiser;
                                goto suite;
                            }
                        }
                    
                        $users[] = $poste->getUser();
                    }
                    suite:
                }
                
        
               
                $response = $this->render('cotisation/ca.html.twig', [
                    'mois' => $mois,
                    'users' => $users,
                    'cotisusers' => $cotisusers,
                    'cellule' => "CA",
                    'mois' => $mois
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
     * @Route("/BEN/{mois}", name="cotisation_ben")
     */
    public function ben(CotismensuelRepository $cotismensuelRepository, Mois $mois)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {

                $annee = $this->getDoctrine()->getManager()->getRepository(Annee::class)->findOneBy(['current' => true]);
                $userscotis = $cotismensuelRepository->findBy(['mois' => $mois->getId(), 'annee' => $annee->getId()]);// selection des membre cotisants
                $postes = $this->getDoctrine()->getManager()->getRepository(Poste::class)->findBy(['bureau' => 'BEN', 'cellule' => false]);// selection des ebres de la             cellule
                $users = array();
                $cotisusers = array();
                foreach($postes as $poste){// tri des membres non cotisant
                   if($poste->getUser() != null){
                        foreach($userscotis as $cotiser){
                            if($poste->getUser()->getId() == $cotiser->getUser()->getId()){
                                $cotisusers[] = $cotiser;
                                goto suite;
                            }
                        }
                    
                        $users[] = $poste->getUser();
                    }
                    suite:
                }
                
        
               
                $response = $this->render('cotisation/ben.html.twig', [
                    'mois' => $mois,
                    'users' => $users,
                    'cotisusers' => $cotisusers,
                    'cellule' => "BEN",
                    'mois' => $mois
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
     * @Route("/Multiple", name="multiple_index", methods={"POST"})
     */
    public function multiple(Request $request, UserRepository $userrepo)
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL'))
        {
			
				if($request->get('mbr') && $request->get('mois'))
				{
                    $em = $this->getDoctrine()->getManager();
                    $mois = $em->getRepository(Mois::class)->find($request->get('mois'));
                    $annee = $em->getRepository(Annee::class)->findOneBy(['current' => true]);
                    $cellule = $em->getRepository(Cellule::class)->find($request->get('cel'));
                    
					$mbr = explode(";",$request->get('mbr'));
                    foreach($mbr as $membre){
                        if($membre != 0){
                            $credit = "20" + $membre;
                            $$membre = new Cotismensuel();
                            $user = $userrepo->find($membre);
//                            dump($user);
                            $$membre->setUser($user);
                            $$membre->setMontant($user->getCellule()->getCotisation()->getMontant());
                            $$membre->setAnnee($annee);
                            $$membre->setMois($mois);
                            $em->persist($$membre);
                            $$credit = new Creditcellule();
                            $$credit->setMontant($user->getCellule()->getCotisation()->getMontant());
                            $$credit->setCotismensuel($$membre);
                            $$credit->setCellule($cellule);
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
        else return $this->redirect($this->generateUrl('security_logout'));
	}

    /**
     * @Route("/Bureau_Multiple", name="bureau_multiple_index", methods={"POST"})
     */
    public function bureaumultiple(Request $request, UserRepository $userrepo)
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
			
				if($request->get('mbr') && $request->get('mois'))
				{
                    $em = $this->getDoctrine()->getManager();
                    $mois = $em->getRepository(Mois::class)->find($request->get('mois'));
                    $annee = $em->getRepository(Annee::class)->findOneBy(['current' => true]);
                    
					$mbr = explode(";",$request->get('mbr'));
                    foreach($mbr as $membre){
                        if($membre != 0){
                            $credit = "20" + $membre;
                            $$membre = new Cotismensuel();
                            $user = $userrepo->find($membre);
                            $$membre->setUser($user);
                            $$membre->setMontant($user->getCellule()->getCotisation()->getMontant());
                            $$membre->setAnnee($annee);
                            $$membre->setMois($mois);
                            $em->persist($$membre);
                            $$credit = new Credit();
                            $$credit->setMontant($user->getCellule()->getCotisation()->getMontant());
                            $$credit->setCotismensuel($$membre);
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
        else return $this->redirect($this->generateUrl('security_logout'));
	}

     
}

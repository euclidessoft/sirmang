<?php

namespace App\Controller;

use App\Entity\Finance;
use App\Entity\Cellule;
use App\Entity\Transfertcellule;
use App\Entity\Transfert;
use App\Entity\Assignation;
use App\Entity\Creditcellule;
use App\Entity\Debitcellule;
use App\Entity\Credit;
use App\Entity\Debit;
use App\Entity\Poste;
use App\Entity\Annee;
use App\Entity\User;
use App\Entity\Recherche;
use App\Entity\Cotisation;
use App\Form\TransfertcelluleType;
use App\Form\TransfertType;
use App\Repository\FinanceRepository;
use App\Repository\UserRepository;
use App\Repository\CotisationRepository;
use App\Repository\CotismensuelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/Finance")
 */
class FinanceController extends AbstractController
{
    /**
     * @Route("/", name="finance_index", methods={"GET"})
     */
    public function index(CotisationRepository $cotisationRepository, CotismensuelRepository $cotismensuelRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
            return $this->render('finance/index.html.twig', [
                'cotisations' => $cotisationRepository->findAll(),
                'cotismensuels' => $cotismensuelRepository->findAll(),
            ]);
        }
        else return $this->redirect($this->generateUrl('security_login'));
    }
    /**
     * @Route("/Cotisations/{user}", name="finance_cotisation_user", methods={"GET"})
     */
    public function cotisations(User $user, CotismensuelRepository $cotismensuelRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
            $annee = $this->getDoctrine()->getManager()->getRepository(Annee::class)->findOneBy(['current' => true]);
            return $this->render('finance/cotisuser.html.twig', [
                'cotisations' => $cotismensuelRepository->findBy(['user' => $user->getId(), 'annee' => $annee->getId()]),
                'user' => $user,
            ]);
        }
        else return $this->redirect($this->generateUrl('security_logout'));
    }

    /**
     * @Route("/Caisses", name="finance_caisses", methods={"GET"})
     */
    public function caisses(Request $request)
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_PRESI_ZONE'))
        {
            $celleles = $this->getDoctrine()->getManager()->getRepository(Cellule::class)->findAll();
			
            $response = $this->render('finance/caisse.html.twig', [ 'cellules' =>$celleles]);
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
        else if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_CELL'))
        {
            return $this->redirect($this->generateUrl('finance_cellule', ['cellule' => $this->getUser()->getCellule()->getId()]));
        }
        else if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
            return $this->redirect($this->generateUrl('finance_national'));
        }
        else return $this->redirect($this->generateUrl('security_logout'));
	}

    /**
     * @Route("/National", name="finance_national", methods={"GET"})
     */
    public function national(Request $request)
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
            $em = $this->getDoctrine()->getManager();
            $credits= $em->getRepository(Credit::class)->findAll();
            $debits= $em->getRepository(Debit::class)->findAll();
            $montantcredit = 0;
            $montantdebit = 0;
            foreach($credits as $credit){
                $montantcredit = $montantcredit + $credit->getMontant();
            }
            foreach($debits as $debit){
                $montantdebit = $montantdebit + $debit->getMontant();
            }
			
            $response = $this->render('finance/national.html.twig', [
                'montantcredit' => $montantcredit,
                    'montantdebit' => $montantdebit,
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
        else return $this->redirect($this->generateUrl('security_login'));
	}

   
    /**
     * @Route("/Cellule/{cellule}", name="finance_cellule")
     */
    public function cellule(Request $request, Cellule $cellule)
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

                $em = $this->getDoctrine()->getManager();
                $credits= $em->getRepository(Creditcellule::class)->findBy(['cellule' => $cellule]);
                $debits= $em->getRepository(Debitcellule::class)->findBy(['cellule' => $cellule]);
                $montantcredit = 0;
                $montantdebit = 0;
                foreach($credits as $credit){
                    $montantcredit = $montantcredit + $credit->getMontant();
                }
                foreach($debits as $debit){
                    $montantdebit = $montantdebit + $debit->getMontant();
                }
               
                $response = $this->render('finance/cellule.html.twig', [
                    'montantcredit' => $montantcredit,
                    'montantdebit' => $montantdebit,
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
     * @Route("/User/{user}", name="finance_user")
     */
    public function user(UserRepository $userRepository,User $user)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_CELL') || $this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
           if($this->getUser()->getId() == $user->getId()) {
            return $this->redirectToRoute('security_profile');
            }
            
            $response = $this->render('finance/user.html.twig', [
                'user' => $user,
                'cellule' => $this->getUser()->getCellule(),
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
     * @Route("/test", name="test", methods={"GET"})
     */
    public function test(Request $request, UserRepository $userRepository)
    {
        $em = $this->getDoctrine()->getManager();
                    //$mois = $em->getRepository(Mois::class)->find($request->get('mois'));
                    $users = $userRepository->findAll();
                    $pro = $em->getRepository(Cotisation::class)->find(1);
                    $lic = $em->getRepository(Cotisation::class)->find(2);
                    $mas = $em->getRepository(Cotisation::class)->find(3);
                    $doc = $em->getRepository(Cotisation::class)->find(4);
                    foreach($users as $user)
                    {
                        if($user->getStatus() == "Professionnel"){
                            $user->setCotisation($pro);
                            $em->persist($user);
                        }
                        elseif($user->getClasse() == "L1" || $user->getClasse() == "L2" || $user->getClasse() == "L3"){
                            $user->setCotisation($lic);
                            $em->persist($user);
                        }
                        elseif($user->getClasse() == "M1" || $user->getClasse() == "M2"){
                            $user->setCotisation($mas);
                            $em->persist($user);
                        }
                        else{
                            $user->setCotisation($doc);
                            $em->persist($user);
                        }
                    }
                        $em->flush();
                    return $this->redirectToRoute('security_login');

    }

     /**
     * @Route("/Bilan", name="finance_bilan", methods={"GET"})
     */
    public function bilan(Request $request)
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
            

            $em = $this->getDoctrine()->getManager();
            $credits= $em->getRepository(Credit::class)->findAll();
            $debits= $em->getRepository(Debit::class)->findAll();
            $montantcredit = 0;
            $montantdebit = 0;
            foreach($credits as $credit){
                $montantcredit = $montantcredit + $credit->getMontant();
            }
            foreach($debits as $debit){
                $montantdebit = $montantdebit + $debit->getMontant();
            }
			
            $response = $this->render('finance/bilan.html.twig', [
                'montantcredit' => $montantcredit,
                    'montantdebit' => $montantdebit,
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
        else return $this->redirect($this->generateUrl('security_login'));
	}

     /**
     * @Route("/Brouillard", name="finance_brouillard", methods={"GET"})
     */
    public function brouyard(Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
                $em = $this->getDoctrine()->getManager();
                
                $credits = $em->getRepository(Credit::class)->brouyard();
                $creditouverture = $em->getRepository(Credit::class)->ouverture();
                

                $ouverturecaisse = 0;
                $ouverturedebit = 0;
                 foreach($creditouverture as $credit)
                {
                     $ouverturecaisse = $ouverturecaisse + $credit->getMontant();
                         
                    
                }

                $cotisations = 0;
                $cotisnombre = 0;
                $assignations = 0;
                $assignombre = 0;
                $financements = array();
                $credittransferts = array();
                $autres = array();

                foreach($credits as $credit)
                {
                    if ($credit->getCotismensuel() != null) {
                        
                        $cotisations = $cotisations + $credit->getMontant();
                        $cotisnombre +=1;
                     
                    }
                    else if($credit->getAcquitassignation() != null)
                    {
                    
                        $assignations = $assignations + $credit->getMontant();
                        $assignombre +=1;

                    } 
                    else if($credit->getFinancement() != null)
                    {
                    
                        $financements[] = $credit;

                    }
                    else if($credit->getAutreentree() != null)
                    {
                    
                        $autres[] = $credit;

                    }                    
                    else
                    {
                        $credittransferts[] = $credit;
                    }
                }
                 /* triage des assignation 
                 if(count($assignations) > 0){
                    
                    
                    $assigns = $em->getRepository(Assignation::class)->findBy( ['current' => true]);
                    foreach($assigns as $assignation){
                        $montant = 0;
                        $i = 0;
                        $rang = [];
                        foreach($assignations as $cred){
                            if($cred->getAcquitassignation()->getAssignation()->getId() == $assignation->getId()){
                                $montant =  $montant + $cred->getMontant(); 
                                $i+=1;
                            }
                        }
                        $rang[0] = $assignation->getActivite()->getNom();
                        $rang[1]= $i;
                        $rang[2]= $montant;
                        $assignombre[] = $rang;
                    }
                }
                /*  fin triage*/

                $deb = $em->getRepository(Debit::class)->brouyard();
                $debitouverture = $em->getRepository(Debit::class)->ouverture();
                foreach($debitouverture as $debit)
                {
                        $ouverturedebit = $ouverturedebit + $debit->getMontant();//liste des fonds trnsferes
                   
                }
                $depenses= [];
                $debittransferts= [];
                foreach($deb as $debit)
                {
                    
                    if($debit->getDepense() != null)
                    {
                        $depenses[] =$debit;//liste des fonds trnsferes
                    }
                    else
                    {
                        $debittransferts[] =$debit;//liste des fonds trnsferes
                    }
                       
                }

                $response = $this->render('finance/brouyard.html.twig', 
                array('ouverture' => $ouverturecaisse - $ouverturedebit,
                'cotisations' => $cotisations,
                'assignations' => $assignations,
                'financements' => $financements, 
                'credittransferts' => $credittransferts,
                'autres' => $autres, 
                'depenses' => $depenses, 
                'debittransferts' => $debittransferts, 
                'cotisnombre' => $cotisnombre, 
                'assignombre' => $assignombre));
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
     * @Route("/LienDayBrouyard", name="finance_day_brouyard_lien")
     */
    public function liendaybrouyard(Request $request)
    {
        $date1= $request->get('date1');
        $lien = $this->generateUrl('finance_daybrouillard', ['jour' => $date1]);
        $res['ok']= $lien; 
        $response = new Response();
        $response->headers->set('content-type','application/json');
        $re = json_encode($res);
        $response->setContent($re);
        return $response;

    }


    /**
     * @Route("/Situationjour/{jour}", name="finance_daybrouillard", methods={"GET"})
     */
    public function daybrouyard(Request $request, $jour)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
                $em = $this->getDoctrine()->getManager();
                
                    $credits = $em->getRepository(Credit::class)->daybrouyard($jour);
                    $creditouverture = $em->getRepository(Credit::class)->ouvertureplage($jour);
                

                $ouverturecaisse = 0;
                $ouverturedebit = 0;
                 foreach($creditouverture as $credit)
                {
                     $ouverturecaisse = $ouverturecaisse + $credit->getMontant();
                         
                    
                }

                $cotisations = 0;
                $cotisnombre = 0;
                $assignations = 0;
                $assignombre = 0;
                $financements = array();
                $credittransferts = array();
                $autres = array();

                foreach($credits as $credit)
                {
                    if ($credit->getCotismensuel() != null) {
                        
                        $cotisations = $cotisations + $credit->getMontant();
                        $cotisnombre +=1;
                     
                    }
                    else if($credit->getAcquitassignation() != null)
                    {
                    
                        $assignations = $assignations + $credit->getMontant();
                        $assignombre +=1;

                    } 
                    else if($credit->getFinancement() != null)
                    {
                    
                        $financements[] = $credit;

                    } 
                    else if($credit->getAutreentree() != null)
                    {
                    
                        $autres[] = $credit;

                    }                    
                    else
                    {
                        $credittransferts[] = $credit;
                    }
                }

                $deb = $em->getRepository(Debit::class)->daybrouyard($jour);
                $debitouverture = $em->getRepository(Debit::class)->ouvertureplage($jour);
                foreach($debitouverture as $debit)
                {
                        $ouverturedebit = $ouverturedebit + $debit->getMontant();//liste des fonds trnsferes
                   
                }
                $depenses= [];
                $debittransferts= [];
                foreach($deb as $debit)
                {
                    
                    if($debit->getDepense() != null)
                    {
                        $depenses[] =$debit;//liste des fonds trnsferes
                    }
                    else
                    {
                        $debittransferts[] =$debit;//liste des fonds trnsferes
                    }
                       
                }

                $response = $this->render('finance/daybrouyard.html.twig', 
                array('ouverture' => $ouverturecaisse - $ouverturedebit,
                'cotisations' => $cotisations,
                'assignations' => $assignations,
                'financements' => $financements, 
                'credittransferts' => $credittransferts,
                'autres' => $autres, 
                'depenses' => $depenses, 
                'debittransferts' => $debittransferts, 
                'cotisnombre' => $cotisnombre, 
                'assignombre' => $assignombre,
                 'jour' => $jour));
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
     * @Route("/LienDaysBrouyardBanque", name="finance_days_brouyard_lien")
     */
    public function liendaysbrouyardbanque(Request $request)
    {
        $date1= $request->get('date1');
        $date2= $request->get('date2');
        $lien = $this->generateUrl('finance_brouillard_intervale', ['jour1' => $date1,'jour2' => $date2]);
        $res['ok']= $lien; 
        $response = new Response();
        $response->headers->set('content-type','application/json');
        $re = json_encode($res);
        $response->setContent($re);
        return $response;

    }

    /**
     * @Route("/SituationIntervalle/{jour1}/{jour2}", name="finance_brouillard_intervale", methods={"GET"})
     */
    public function daysbrouyard(Request $request, $jour1, $jour2)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
                $em = $this->getDoctrine()->getManager();
                
                    $credits = $em->getRepository(Credit::class)->plage($jour1, $jour2);
                    $creditouverture = $em->getRepository(Credit::class)->ouvertureplage($jour1);
                

                $ouverturecaisse = 0;
                $ouverturedebit = 0;
                 foreach($creditouverture as $credit)
                {
                     $ouverturecaisse = $ouverturecaisse + $credit->getMontant();
                         
                    
                }

                $cotispro = [];
                $cotislic = [];
                $cotismas = [];
                $cotisdoc = [];
                $assignations= [];
                $assignombre = [];
                $financements = array();
                $credittransferts = array();
                $autres = array();

                foreach($credits as $credit)
                {
                    if ($credit->getCotismensuel() != null) {
                        if($credit->getMontant() == 6000) $cotispro[] = $credit;
                        else if($credit->getMontant() == 2000) $cotislic[] = $credit;
                        else if($credit->getMontant() == 2500) $cotismas[] = $credit; 
                        else  $cotisdoc[] = $credit;
                   
                    }
                    else if($credit->getAcquitassignation() != null)
                    {
                    
                        $assignations[] = $credit;

                    } 
                    else if($credit->getFinancement() != null)
                    {
                    
                        $financements[] = $credit;

                    }
                    else if($credit->getAutreentree() != null)
                    {
                    
                        $autres[] = $credit;

                    }                    
                    else
                    {
                        $credittransferts[] = $credit;
                    }
                }
                /* triage des assignation */
                if(count($assignations) > 0){
                    
                    
                    $assigns = $em->getRepository(Assignation::class)->findAll();
                    foreach($assigns as $assignation){
                        $montant = 0;
                        $i = 0;
                        $rang = [];
                        foreach($assignations as $cred){
                            if($cred->getAcquitassignation()->getAssignation()->getId() == $assignation->getId()){
                                $montant =  $montant + $cred->getMontant(); 
                                $i+=1;
                            }
                        }
                        $rang[0] = $assignation->getActivite()->getNom();
                        $rang[1]= $i;
                        $rang[2]= $montant;
                        $assignombre[] = $rang;
                    }
                }
                /*  fin triage*/

                $deb = $em->getRepository(Debit::class)->plage($jour1, $jour2);
                $debitouverture = $em->getRepository(Debit::class)->ouvertureplage($jour1);
                foreach($debitouverture as $debit)
                {
                        $ouverturedebit = $ouverturedebit + $debit->getMontant();//liste des fonds trnsferes
                   
                }
                $depenses= [];
                $debittransferts= [];
                foreach($deb as $debit)
                {
                    
                    if($debit->getDepense() != null)
                    {
                        $depenses[] =$debit;//liste des fonds trnsferes
                    }
                    else
                    {
                        $debittransferts[] =$debit;//liste des fonds trnsferes
                    }
                       
                }

                $response = $this->render('finance/daysbrouyard.html.twig', 
                array('ouverture' => $ouverturecaisse - $ouverturedebit,
                'cotispro' => $cotispro, 
                'cotislic' => $cotislic, 
                'cotismas' => $cotismas, 
                'cotisdoc' => $cotisdoc,
                'financements' => $financements, 
                'credittransferts' => $credittransferts, 
                'autres' => $autres,
                'depenses' => $depenses, 
                'debittransferts' => $debittransferts, 
                'assignombre' => $assignombre, 
                'jour1' => $jour1, 
                'jour2' => $jour2));
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
     * @Route("/BilanCellule/{cellule}", name="finance_bilan_cellule", methods={"GET"})
     */
    public function bilancellule(Request $request, Cellule $cellule)
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
			
            $response = $this->render('finance/bilancellule.html.twig',[
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
        else return $this->redirect($this->generateUrl('security_login'));
	}

     /**
     * @Route("/BrouillardCellule/{cellule}", name="finance_brouillard_cellule", methods={"GET"})
     */
    public function brouyardcellule(Request $request, Cellule $cellule)
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
                $em = $this->getDoctrine()->getManager();
                
                    $credits = $em->getRepository(Creditcellule::class)->brouyard($cellule->getId());
                    $creditouverture = $em->getRepository(Creditcellule::class)->ouverture($cellule->getId());
                

                $ouverturecaisse = 0;
                $ouverturedebit = 0;
                 foreach($creditouverture as $credit)
                {
                     $ouverturecaisse = $ouverturecaisse + $credit->getMontant();
                         
                    
                }

                $cotisations = 0;
                $cotisnombre = 0;
                $assignations = 0;
                $assignombre = 0;
                $financements = array();
                $credittransferts = array();
                $autres = array();

                foreach($credits as $credit)
                {
                    if ($credit->getCotismensuel() != null) {
                        
                        $cotisations = $cotisations + $credit->getMontant();
                        $cotisnombre +=1;
                     
                    }
                    else if($credit->getAcquitassignation() != null)
                    {
                    
                        $assignations = $assignations + $credit->getMontant();
                        $assignombre +=1;

                    } 
                    else if($credit->getFinancementcellule() != null)
                    {
                    
                        $financements[] = $credit;

                    }
                    else if($credit->getAutreentree() != null)
                    {
                    
                        $autres[] = $credit;

                    }                   
                    else
                    {
                        $credittransferts[] = $credit;
                    }
                }

                $deb = $em->getRepository(Debitcellule::class)->brouyard($cellule->getId());
                $debitouverture = $em->getRepository(Debitcellule::class)->ouverture($cellule->getId());
                foreach($debitouverture as $debit)
                {
                        $ouverturedebit = $ouverturedebit + $debit->getMontant();//liste des fonds trnsferes
                   
                }
                $depenses= [];
                $debittransferts= [];
                foreach($deb as $debit)
                {
                    
                    if($debit->getDepensecellule() != null)
                    {
                        $depenses[] =$debit;//liste des fonds trnsferes
                    }
                    else
                    {
                        $debittransferts[] =$debit;//liste des fonds trnsferes
                    }
                       
                }

                $response = $this->render('finance/brouyardcellule.html.twig', array(
                    'ouverture' => $ouverturecaisse - $ouverturedebit,
                    'cotisations' => $cotisations,
                    'assignations' => $assignations,
                    'financements' => $financements,
                    'autres' => $autres,
                    'credittransferts' => $credittransferts,
                    'depenses' => $depenses,
                    'debittransferts' => $debittransferts,
                    'cotisnombre' => $cotisnombre,
                    'assignombre' => $assignombre,
                    'cellule' => $cellule ));
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
     * @Route("/LienDayBrouyardCellule", name="finance_day_brouyard_lien_cellule")
     */
    public function liendaybrouyardcellule(Request $request)
    {
        $date1= $request->get('date1');
        $cellule= $request->get('cellule');
        $lien = $this->generateUrl('finance_daybrouillard_cellule', ['jour' => $date1, 'cellule' => $cellule]);
        $res['ok']= $lien; 
        $response = new Response();
        $response->headers->set('content-type','application/json');
        $re = json_encode($res);
        $response->setContent($re);
        return $response;

    }


    /**
     * @Route("/Situationjourcellule/{jour}/{cellule}", name="finance_daybrouillard_cellule", methods={"GET"})
     */
    public function daybrouyardcellule(Request $request, $jour, Cellule $cellule)
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
                $em = $this->getDoctrine()->getManager();
                
                    $credits = $em->getRepository(Creditcellule::class)->daybrouyard($jour, $cellule->getId());
                    $creditouverture = $em->getRepository(Creditcellule::class)->ouvertureplage($jour, $cellule->getId());
                

                $ouverturecaisse = 0;
                $ouverturedebit = 0;
                 foreach($creditouverture as $credit)
                {
                     $ouverturecaisse = $ouverturecaisse + $credit->getMontant();
                         
                    
                }

                $cotisations = 0;
                $cotisnombre = 0;
                $assignations = 0;
                $assignombre = 0;
                $financements = array();
                $credittransferts = array();
                $autres = array();

                foreach($credits as $credit)
                {
                    if ($credit->getCotismensuel() != null) {
                        
                        $cotisations = $cotisations + $credit->getMontant();
                        $cotisnombre +=1;
                     
                    }
                    else if($credit->getAcquitassignation() != null)
                    {
                    
                        $assignations = $assignations + $credit->getMontant();
                        $assignombre +=1;

                    } 
                    else if($credit->getFinancementcellule() != null)
                    {
                    
                        $financements[] = $credit;

                    }
                    else if($credit->getAutreentree() != null)
                    {
                    
                        $autres[] = $credit;

                    }                    
                    else
                    {
                        $credittransferts[] = $credit;
                    }
                }

                $deb = $em->getRepository(Debitcellule::class)->daybrouyard($jour, $cellule->getId());
                $debitouverture = $em->getRepository(Debitcellule::class)->ouvertureplage($jour, $cellule->getId());
                foreach($debitouverture as $debit)
                {
                        $ouverturedebit = $ouverturedebit + $debit->getMontant();//liste des fonds trnsferes
                   
                }
                $depenses= [];
                $debittransferts= [];
                foreach($deb as $debit)
                {
                    
                    if($debit->getDepensecellule() != null)
                    {
                        $depenses[] =$debit;//liste des fonds trnsferes
                    }
                    else
                    {
                        $debittransferts[] =$debit;//liste des fonds trnsferes
                    }
                       
                }

                $response = $this->render('finance/daybrouyardcellule.html.twig', array(
                    'ouverture' => $ouverturecaisse - $ouverturedebit,
                    'cotisations' => $cotisations,
                    'assignations' => $assignations,
                    'financements' => $financements,
                    'autres' => $autres,
                    'credittransferts' => $credittransferts,
                    'depenses' => $depenses,
                    'debittransferts' => $debittransferts, 
                    'cotisnombre' => $cotisnombre, 
                    'assignombre' => $assignombre, 
                    'jour' => $jour,
                    'cellule' => $cellule
                ));
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
     * @Route("/LienDaysBrouyardCellule", name="finance_days_brouyard_lien_cellule")
     */
    public function liendaysbrouyardcellule(Request $request)
    {
        $date1= $request->get('date1');
        $date2= $request->get('date2');
        $cellule= $request->get('cellule');
        $lien = $this->generateUrl('finance_brouillard_intervale_cellule', ['jour1' => $date1,'jour2' => $date2, 'cellule' => $cellule]);
        $res['ok']= $lien; 
        $response = new Response();
        $response->headers->set('content-type','application/json');
        $re = json_encode($res);
        $response->setContent($re);
        return $response;

    }

    /**
     * @Route("/SituationIntervalleCellule/{jour1}/{jour2}/{cellule}", name="finance_brouillard_intervale_cellule", methods={"GET"})
     */
    public function daysbrouyardcellule(Request $request, $jour1, $jour2, Cellule $cellule)
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
                $em = $this->getDoctrine()->getManager();
                
                    $credits = $em->getRepository(Creditcellule::class)->plage($jour1, $jour2, $cellule->getId());
                    $creditouverture = $em->getRepository(Creditcellule::class)->ouvertureplage($jour1, $cellule->getId());
                

                $ouverturecaisse = 0;
                $ouverturedebit = 0;
                 foreach($creditouverture as $credit)
                {
                     $ouverturecaisse = $ouverturecaisse + $credit->getMontant();
                         
                    
                }

                $cotisations = 0;
                $cotisnombre = 0;
                $assignations = 0;
                $assignombre = 0;
                $financements = array();
                $credittransferts = array();
                $autres = array();

                foreach($credits as $credit)
                {
                    if ($credit->getCotismensuel() != null) {
                        
                        $cotisations = $cotisations + $credit->getMontant();
                        $cotisnombre +=1;
                     
                    }
                    else if($credit->getAcquitassignation() != null)
                    {
                    
                        $assignations = $assignations + $credit->getMontant();
                        $assignombre +=1;

                    } 
                    else if($credit->getFinancementcellule() != null)
                    {
                    
                        $financements[] = $credit;

                    }
                    else if($credit->getAutreentree() != null)
                    {
                    
                        $autres[] = $credit;

                    }                    
                    else
                    {
                        $credittransferts[] = $credit;
                    }
                }

                $deb = $em->getRepository(Debitcellule::class)->plage($jour1, $jour2, $cellule->getId());
                $debitouverture = $em->getRepository(Debitcellule::class)->ouvertureplage($jour1, $cellule->getId());
                foreach($debitouverture as $debit)
                {
                        $ouverturedebit = $ouverturedebit + $debit->getMontant();//liste des fonds trnsferes
                   
                }
                $depenses= [];
                $debittransferts= [];
                foreach($deb as $debit)
                {
                    
                    if($debit->getDepensecellule() != null)
                    {
                        $depenses[] =$debit;//liste des fonds trnsferes
                    }
                    else
                    {
                        $debittransferts[] =$debit;//liste des fonds trnsferes
                    }
                       
                }

                $response = $this->render('finance/daysbrouyardcellule.html.twig', array(
                    'ouverture' => $ouverturecaisse - $ouverturedebit,
                    'cotisations' => $cotisations,
                    'assignations' => $assignations,
                    'financements' => $financements, 
                    'credittransferts' => $credittransferts,
                    'autres' => $autres, 
                    'depenses' => $depenses, 
                    'debittransferts' => $debittransferts, 
                    'cotisnombre' => $cotisnombre, 
                    'assignombre' => $assignombre, 
                    'jour1' => $jour1, 
                    'jour2' => $jour2,
                    'cellule' => $cellule));
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

    
}

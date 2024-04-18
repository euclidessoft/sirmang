<?php

namespace App\Controller;

use App\Entity\AnneeScolaire;
use App\Complement\Mensualite;
use App\Complement\Mois as payerMois;
use App\Entity\Eleve;
use App\Entity\Inscription;
use App\Entity\Mois;
use App\Entity\Payement;
use App\Entity\Message;
use App\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Matiere;
use App\Entity\Matierearabe;
use App\Entity\Classe;
use App\Entity\Sms;
use App\Entity\Classearabe;
use App\Entity\Note;
use App\Entity\Notearabe;
use App\Twig\Compos;
use App\Twig\Notes;


class SmsController extends AbstractController
{
     /**
    * @Route("/RappelSms", name="rappelsms")
    */
     public function rappelsms(Request $request,Mensualite $servicemensualite,payerMois $servicemois)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_CAISSE'))
        {
            $em = $this->getDoctrine()->getManager();
            $annee = $em->getRepository(AnneeScolaire::class)->findOneBy(array('current' => true));
            $result = $em->getRepository(Inscription::class)->Inscrire($annee->getId());
            $eleves = array();
            if($request->isXmlHttpRequest())
            {
                $mois = $request->get('mois');
                $realmois = $em->getRepository(Mois::class)->findOneBy(array('mois' => $mois));
                $result = $em->getRepository(Payement::class)->findBy(array('anneescolaire' => $annee->getId()));
                foreach($result as $payement)
                {
                    $pay['nom'] =$payement->getEleve()->getNom();
                    $pay['prenom'] =$payement->getEleve()->getPrenom();
                    $pay['montant'] =$payement->getMontantrecu();
                    $pay['date'] =$payement->getDate();
                    $acquiter[] = $pay;
                }
                //$res['ok'] = 'ok';
                $response = new Response();
                $response->headers->set('content-type','application/json');
                $re = json_encode($acquiter);
                $response->setContent($re);
                return $response;
            }
    
            if(!empty($result))
            {
                $mois = $servicemois->Moisfr();
                $moisreal = $em->getRepository(Mois::class)->findOneBy(['mois' => $mois]);
                foreach($result as $insc)
                {
                    $eleve = $insc->getEleve();
    
                    if(!$eleve->getAbandon() && !$eleve->getExonorer() && $servicemois->Inclus($insc))
                    {
    
                        
                        $payement = $em->getRepository(Payement::class)->findOneBy(['mois' => $moisreal->getId(),
                                                                                            'anneescolaire' => $annee->getId(),
                                                                                            'eleve' => $eleve->getId()]);
                        if(!empty($payement))
                        {
                            continue;
                        }
                        else
                        {//verification si léleve ne possede pas d'avance
                            if($servicemensualite->payet($eleve)){
                                
                             continue;
                            }
                        }
                         $eleves[] = $eleve;
                    }
                }
        }
        return $this->render('Sms\rappelsms.html.twig', array('eleves' => $eleves));
        }
        else
        {
            return $this->redirectToRoute('security_login');
        }
    }
    
    /**
    * @Route("/GroupSms", name="groupsms")
    */
     public function groupsms(Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_CAISSE'))
        {
            $em = $this->getDoctrine()->getManager();
            $annee = $em->getRepository(AnneeScolaire::class)->findOneBy(array('current' => true));
            $eleves = $em->getRepository(Eleve::class)->findAll();
            $sms = new Message();
            $form = $this->createForm(MessageType::class, $sms);
            $form->remove('numero');
            if ($request->isMethod('POST'))
            {
                $form->handleRequest($request);
                if($form->isValid())
                {

                }
            }
            
    
            return $this->render('Sms\groupsms.html.twig', array('form' => $form->createView(), 'eleves' => $eleves));
        }
        else
        {
            return $this->redirectToRoute('security_login');
        }
    }

    
    /**
     * @Route("/SimpleSms", name="simplesms")
     */
   public function simplesms(Request $request)
    {
       if($this->getUser() != null)
		{
           $em = $this->getDoctrine()->getManager();
           $eleves = $em->getRepository(Eleve::class)->findAll(); 
           $sms = new Message();
            $form = $this->createForm(MessageType::class, $sms);
            if ($request->isMethod('POST'))
            {
                $form->handleRequest($request);
                if($form->isValid())
                {

                }
            }

           return $this->render('Sms\simplesms.html.twig', array('form' => $form->createView(), 'eleves' => $eleves));
        }
		else return $this->redirect($this->generateUrl('security_login'));
   }
    
    /**
     * @Route("/CreditSms", name="creditsms")
     */
   public function creditsms(Request $request)
    {
       if($this->getUser() != null)
		{
           $em = $this->getDoctrine()->getManager();
           $sms = $em->getRepository(Sms::class)->find(1); 
           

           return $this->render('Sms\creditsms.html.twig', array('sms' => $sms));
        }
		else return $this->redirect($this->generateUrl('security_login'));
   }
    
    /**
     * @Route("/Smstransit/{send}/{solde}/{page}", name="smstransit")
     */
   public function transit(Request $request, $send, $solde,$page)
    {
       if($this->getUser() != null)
		{ 
           if($solde < 10) $this->addFlash('credit', 'Votre solde sms est a '.$solde.', veuillez recharger SVP');
           switch($page)
           {
               case 1:{ 
                   $direct = "rappelsms";
                   $this->addFlash('notice', $send.' message(s) envoyé(s) avec succés');
                   break;
               } 
               case 2:{ 
                   $direct = "simplesms";
                   if($send != 0)
                        $this->addFlash('notice', 'message envoyé avec succés');
                   else
                        $this->addFlash('notice', 'message non envoyé');
                   break;
               }
               case 3:{ 
                   $direct = "groupsms";
                   $this->addFlash('notice', $send.' message(s) envoyé(s) avec succés');
                   break;
               }
           }
           return $this->redirectToRoute($direct);
        }
		else return $this->redirect($this->generateUrl('security_login'));
   }
       
    
    
}

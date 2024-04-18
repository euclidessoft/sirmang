<?php

namespace App\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Entity\Zone;
use App\Entity\Cellule;
use App\Entity\Recherche;
use App\Entity\Cotisation;
use App\Form\RegistrationType;
use App\Form\RechercheType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\UserType;
use App\Form\changePasswordType;
use App\Repository\UserRepository;
use Symfony\Component\Form\FormError;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Entity\Region;


class securityController extends AbstractController
{
    /**
     * @Route("/", name="tam_index")
     */
    public function tam()
    {
        // return $this->render('security/website/home.html.twig');
        return $this->redirectToRoute('security_login');
    }
    /**
     * @Route("/registration", name="security_register")
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder, TokenGeneratorInterface $tokenGenerator, \Swift_Mailer $mail)
    {
        $manager = $this->getDoctrine()->getManager();
      
            $user = new User();
            $form = $this->createForm(RegistrationType::class, $user);
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                 $hashpass = $encoder->encodePassword($user, 'Moda2020');
                 //$hashpass = $encoder->encodePassword($user, $user->getPassword());
                 //$password = $user->getPassword();
                 $user->setPassword($hashpass);

                null != $user->getBirthday() ? $user->setDatenaiss(date_create_from_format('j/m/Y', $user->getBirthday())): $user->setDatenaiss(null);//creation de la date de naissance
                 $user->setRoles(['ROLE_MEMBRE']);
                /* $pro = $manager->getRepository(Cotisation::class)->find(1);
                 $lic = $manager->getRepository(Cotisation::class)->find(2);
                 $mas = $manager->getRepository(Cotisation::class)->find(3);
                 $doc = $manager->getRepository(Cotisation::class)->find(4);
                 if($user->getProfession() == null)// definition profession etudiant si 
                 {
                     $user->setProfession("Etudiant");
                    if($user->getClasse() == "L1" || $user->getClasse() == "L2" || $user->getClasse() == "L3"){
                        $user->setCotisation($lic);
                    }
                    elseif($user->getClasse() == "M1" || $user->getClasse() == "M2"){
                        $user->setCotisation($mas);
                    }
                    else{
                        $user->setCotisation($doc);
                    }
                 }else{
                    $user->setCotisation($pro);
                }*/
                 //$user->setAgence($agence);
                 // envoie mail
                 $token = $tokenGenerator->generateToken();
                 $user->setResetToken($token);
                 $manager->persist($user);
                 $manager->flush();
                 $url = $this->generateUrl('security_activation', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
                 
                 $message = (new \Swift_Message('Activation compte utilisateur'))
                 ->setFrom('ben-tam@jolofsoft.com')
                 ->setTo($user->getEmail())
                 ->setBody("Votre inscription a ete pris en compte et est en attente de validation sous le numero:". $user->getId(), 'text/html');
//                $message = (new \Swift_Message('Activation compte utilisateur'))
//                 ->setFrom('Hajjalbayt@euclideservices.com')
//                 ->setTo($user->getEmail())
//                 ->setBody($this->renderView('licence/facture.html.twig'), 'text/html');
                 
                 $mail->send($message);
                 // fin envoie mail
                
                $this->addFlash('notice', 'Votre inscription a ete pris en compte et est en attente de validation');
                //return $this->redirectToRoute('security_profile');
                return $this->redirectToRoute('security_register');
                
            }
            
            $response = $this->render('security/security/index.html.twig', [
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
    
    /**
     * @Route("/login", name="security_login")
     */
    public function login(AuthenticationUtils $auth)
    { 
        $error = $auth->getLastAuthenticationError();
        $last_user = $auth->getLastUsername();
        
        $response = $this->render('security/security/login.html.twig',[
            'error' => $error,
            'last_user' => $last_user,
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
    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout()
    {
        
    }
    /**
     * @Route("/profile", name="security_profile")
     */
    public function profile()
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
           if($this->getUser()->getEnabled() == false)
           {
                $this->addFlash('notice', 'Compte bloque, rapprochez vous d\'un administrateur');
                return $this->redirectToRoute('security_login');
           }
       
           /*$response = $this->render('security/security/profile.html.twig',[
               'user' => $this->getUser(),
           ]);*/
           $response = $this->render('security/security/profile.html.twig',[
            'user' => $this->getUser(),
             'cellule' => $this->getDoctrine()->getManager()->getRepository(Cotisation::class)->findOneBy(['cellule' => $this->getUser()->getCellule()->getId()])
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
     * @Route("/edit_profile", name="security_profile_edit")
     */
    public function edit(Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($this->getUser()->getId());
        $form = $this->createForm(RegistrationType::class, $user);
        $form->remove('username');
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            null != $user->getBirthday() ? $user->setDatenaiss(date_create_from_format('j/m/Y', $user->getBirthday())): $user->setDatenaiss(null);//creation de la date de naissance
            $em->flush();
            $this->addFlash('notice', 'Profil modifié avec succès');
            return $this->redirectToRoute('security_profile');
            
        } 
        $response = $this->render('security/security/edit.html.twig',[
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
     * @Route("/ChangePassword", name="security_change_password")
     */
    public function change(Request $request, UserPasswordEncoderInterface $encoder)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MEMBRE'))
        {
        $userinit =  new User();
        $userinit->setPrenom("bla");
        $userinit->setNom("bla");
        $userinit->setEmail("bla@bla.bla");
        $userinit->setBirthday("00/00/0000");
        //$userinit->setPrenom("bla");
        $userinit->setLieunaiss("bla");
        $userinit->setSexe("Monsieur");
        $userinit->setPhone("770000000");
        $userinit->setAdresse("bla");
        $form = $this->createForm(changePasswordType::class, $userinit);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
           
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository(User::class)->find($this->getUser()->getId());
            if($encoder->isPasswordValid($user, $userinit->getTest()))
            {
                $newpassword = $encoder->encodePassword($user, $userinit->getPassword());
                $user->setPassword($newpassword);
                $em->persist($user);
                $em->flush();
                $this->addFlash('change', 'Votre mot de passe  a ete modifié, reconnectez vous!');
                return $this->redirectToRoute('security_login');
            }
           else
           {
               $form->addError(new FormError('Ancien mot de passe incorrecte'));
           }
            
        }
        $response =$this->render('security/security/changepassword.html.twig',[
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
     * @Route("/forgottenPassword", name="security_forgotten_password")
     */
    public function forgotten(Request $request, TokenGeneratorInterface $tokenGenerator, \Swift_Mailer $mail)
    {
        if ($request->isMethod('POST')) {
            
          $email = $request->request->get('_mail');
          
          $em = $this->getDoctrine()->getManager();
          $user = $em->getRepository(User::class)->findOneByEmail($email);
          if($user === null)
          {
              $this->addFlash('notice', 'Adresse email inconnue');
              return $this->redirectToRoute('security_forgotten_password');
          }
          $token = $tokenGenerator->generateToken();
          $user->setResetToken($token);
          $em->persist($user);
          $em->flush();
          $url = $this->generateUrl('security_reset_password', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
          
          $message = (new \Swift_Message('Réinitialisation mot de passe'))
          ->setFrom('support@euclideservices.com')
          ->setTo($user->getEmail())
          ->setBody("Cliquez sur le lien suivant pour réinitialiser votre mot de passe ".$url, 'text/html');
          
          $mail->send($message);
          $this->addFlash('change', 'Un message a été envoyé à votre adresse email, veuillez consulter votre boite de réception');
        }
        
       
         $response = $this->render('security/security/forget.html.twig');
         
         $response->setSharedMaxAge(0);
         $response->headers->addCacheControlDirective('no-cache', true);
         return $response;
    }
    
    /**
     * @Route("/Users", name="security_users")
     */
    public function users(Request $request, UserRepository $userRepository)
    {
         if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_ADMIN_BEN'))
            {
                $recherche = new Recherche();
                $form = $this->createForm(RechercheType::class, $recherche);
                $form->handleRequest($request);


                $users = $userRepository->dispo($recherche); 

                $response = $this->render('security/security/user2.html.twig', [
                    //'users' => $userRepository->findBy(['enabled' => true],['nom' => 'ASC']),
                    'cellules' => $this->getDoctrine()->getManager()->getRepository(Cellule::class)->findAll(),
                    'users' => $users,
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
     * @Route("/User/{user}", name="security_user")
     */
    public function user(UserRepository $userRepository,User $user)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_ADMIN_CELL'))
        {
            if($this->getUser()->getId() == $user->getId()) return $this->redirect($this->generateUrl('security_profile'));
            if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_ADMIN_CELL') && !$this->get('security.authorization_checker')->isGranted('ROLE_AFF_ADMIN_ZONE') && $user->getCellule() != $this->getUser()->getCellule())
                {// decoonexion si povoir de modifier et n'appartenant a la cellule
                    return $this->redirect($this->generateUrl('security_logout'));
                }
            
            if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL') && !$this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN') && $user->getCellule() != $this->getUser()->getCellule())
                {// decoonexion si povoir de modifier et n'appartenant a la cellule
                    return $this->redirect($this->generateUrl('security_logout'));
                }




            $response = $this->render('security/security/user.html.twig', [
                'cellules' => $this->getDoctrine()->getManager()->getRepository(Cellule::class)->findAll(),
                'user' => $user,
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
     * @Route("/ResetPassword/{token}", name="security_reset_password")
     */
    public function reset(Request $request, string $token, UserPasswordEncoderInterface $encoder)
    {
        $userinit =  new User();
        $form = $this->createForm(changePasswordType::class, $userinit);
        $form->remove('test');
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {         
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository(User::class)->findOneByResetToken($token);
            if($user === null)
            {
                $this->addFlash('notice', 'Chaine de réinitialisation invalide');
                return $this->redirectToRoute('security_login');
            }
            $user->setResetToken(null);
            $newpassword = $encoder->encodePassword($user,$userinit->getPassword());
            $user->setPassword($newpassword);
            $em->persist($user);
            $em->flush();
            $this->addFlash('change', 'Reinitialisation reussie');
            $response = $this->redirectToRoute('security_login');
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
        
        
        return $this->render('security/security/reset.html.twig', ['form' => $form->createView()]
            );
    }
    
    /**
     * @Route("/Activation/{token}", name="security_activation")
     */
    public function active(Request $request, string $token)
    {
        
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository(User::class)->findOneByResetToken($token);
            if($user === null)
            {
                $this->addFlash('notice', 'Chaine d\'activation invalide');
                return $this->redirectToRoute('security_login');
            }
            $user->setEnabled(true);
            $em->persist($user);
            $em->flush();
            $this->addFlash('notice', 'Compte active, veuillez  definir votre mot de passe pour la premiere connexion');
            return $this->redirectToRoute('security_reset_password', ['token' => $token]);
        
        
        return $this->render('security/security/reset.html.twig', ['form' => $form->createView()]
            );
    }
    
    /**
     * @Route("/UserDisable", name="security_user_disable")
     */
    public function UserdisableAction(Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') &&  $this->getUser()->getId() != $request->get('usr'))
        {
            $em = $this->getDoctrine()->getManager();
            //$users = $em->getrepository(User::class)->findBy(array('agence' => $this->getUser()->getAgence()->getId()));
            $user =  $em->getrepository(User::class)->find($request->get('usr'));
            if(!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN' ) || $user->getFonction() != 'proprietaire')
            {
                $user->setEnabled(false);
                $em->persist($user);
            }
            $em->flush();
            $res['ok']= 'ok';
            $response = new Response();
            $response->headers->set('content-type','application/json');
            $re = json_encode($res);
            $response->setContent($re);
            return $response;
        }
        else {
            $this->addFlash('notice', 'Action impossible');
            return $this->redirect($this->generateUrl('security_login'));
        }

    }
    
    /**
     * @Route("/UserEnable", name="security_user_enable")
     */
    public function UserenableAction(Request $request)
    {
        
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL'))
        {
            $em = $this->getDoctrine()->getManager();
            //$users = $em->getrepository(User::class)->findBy(array('agence' => $this->getUser()->getAgence()->getId()));
            $user =  $em->getrepository(User::class)->find($request->get('usr'));
            

                
                $user->setEnabled(true);
                $em->persist($user);
            
            $em->flush();
            $res['ok']= 'ok';
            $response = new Response();
            $response->headers->set('content-type','application/json');
            $re = json_encode($res);
            $response->setContent($re);
            return $response;
        }
        else return $this->redirect($this->generateUrl('security_login'));
    }

    /**
     * @Route("/UserDisable_admin/{user}", name="security_user_admin_cancel")
     */
    public function UseradminAction(Request $request, User $user)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_PROPRIETAIRE'))
        {
            $em = $this->getDoctrine()->getManager();
            //$users = $em->getrepository(User::class)->findBy(array('agence' => $this->getUser()->getAgence()->getId()));
            $user =  $em->getrepository(User::class)->find($user->getId());
                $user->setRoles(['ROLE_MEMBRE']);
                $em->persist($user);
            $em->flush();
            $response = $this->redirectToRoute('security_user', [ 'user' => $user->getId()]);
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
     * @Route("/UserEnable_admin/{user}", name="security_user_admin")
     */
    public function UserenableadminAction(Request $request, User $user)
    {
        
        if($this->get('security.authorization_checker')->isGranted('ROLE_PROPRIETAIRE'))
        {
            $em = $this->getDoctrine()->getManager();
            //$users = $em->getrepository(User::class)->findBy(array('agence' => $this->getUser()->getAgence()->getId()));
            $user =  $em->getrepository(User::class)->find($user->getId());
            
                $user->setRoles(['ROLE_ADMIN']);
           
            $em->flush();
            $response = $this->redirectToRoute('security_user', [ 'user' => $user->getId()]);
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
     * @Route("/Users/Waiting", name="security_waiting")
     */
    public function waiting(Request $request, UserRepository $userRepository)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_ADMIN_CELL'))
            {
                $recherche = new Recherche();
                $form = $this->createForm(RechercheType::class, $recherche);
                $form->handleRequest($request);


                    $users = $userRepository->waiting($recherche);

        
               
                $response = $this->render('security/security/attente.html.twig', [
                    'users' => $users,
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
     * @Route("/edit_user/{user}", name="security_user_edit")
     */
    public function edit_user(Request $request, User $user)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL'))
        {
            if($user->getEnabled()){
                if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL') && !$this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN') && $user->getCellule() != $this->getUser()->getCellule())
                {// decoonexion si povoir de modifier et n'appartenant a la cellule
                    return $this->redirect($this->generateUrl('security_logout'));
                }
            }

                
        
        $form = $this->createForm(RegistrationType::class, $user);
        $form->remove('username');
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            null != $user->getBirthday() ? $user->setDatenaiss(date_create_from_format('j/m/Y', $user->getBirthday())): $user->setDatenaiss(null);//creation de la date de naissance

            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('notice', 'modifié avec succès');
            return $this->redirectToRoute('security_user', ['user' => $user->getId()]);
            
        } 
        $response = $this->render('security/security/edit.html.twig',[
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
     * @Route("/Admin/registration", name="security_admin_register")
     */
    public function admin_new(Request $request, UserPasswordEncoderInterface $encoder, TokenGeneratorInterface $tokenGenerator, \Swift_Mailer $mail)
    {
        //if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL'))
        //{
            $manager = $this->getDoctrine()->getManager();
            $user = new User();
            $form = $this->createForm(RegistrationType::class, $user);
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                 $hashpass = $encoder->encodePassword($user, 'Passer1234');
                 //$hashpass = $encoder->encodePassword($user, $user->getPassword());
                 //$password = $user->getPassword();
                 $user->setPassword($hashpass);
                 
                null != $user->getBirthday() ? $user->setDatenaiss(date_create_from_format('j/m/Y', $user->getBirthday())): $user->setDatenaiss(null);//creation de la date de naissance


                switch ($user->getProfession()) {
                    case 'President':
                    {
                        $user->setRoles(['ROLE_PRESI_CELL']);
                        break;
                    }
                    case 'Vice President':
                    {
                        $user->setRoles(['ROLE_PRESI_CELL']);
                        $user->setClient(true);
                        break;
                    }
                    case 'Secretaire':
                    {
                        $user->setRoles(['ROLE_MODIF_ADMIN_CELL']);
                        break;
                    }
                    case 'Tresorier':
                    {
                        $user->setRoles(['ROLE_MODIF_FIN_CELL']);
                        break;
                    }
                    case 'commissaire au compte':
                    {
                        $user->setRoles(['ROLE_AFF_FIN_CELL']);
                        $user->setLivreur(true);
                        break;
                    }
                }
                 
                 if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL') && !$this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_BEN'))
                {
                    $user->setCellule($this->getUser()->getCellule());
                }
                 $token = $tokenGenerator->generateToken();
                 $user->setResetToken($token);
                 $user->setEnabled(true);
                 $manager->persist($user);
                 $manager->flush();
                 //$url = $this->generateUrl('security_activation', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
                 
                 $message = (new \Swift_Message('Activation compte utilisateur'))
                 ->setFrom('ben-tam@jolofsoft.com')
                 ->setTo($user->getEmail())
                 ->setBody("Vous êtes inscrit sur le site de Sirmang ", 'text/html');
//                $message = (new \Swift_Message('Activation compte utilisateur'))
//                 ->setFrom('Hajjalbayt@euclideservices.com')
//                 ->setTo($user->getEmail())
//                 ->setBody($this->renderView('licence/facture.html.twig'), 'text/html');
                 
                 $mail->send($message);
                 // fin envoie mail
                
                $this->addFlash('notice', 'enregistrement effectue');
                //return $this->redirectToRoute('security_profile');
                return $this->redirectToRoute('security_user', ['user' =>$user->getId()]);
                
            }
            
            $response = $this->render('security/security/admin_add.html.twig', [
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
        /*}
        else
        {
            $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
            return $this->redirectToRoute('security_login');
        }
      */
    }

    /**
     * @Route("/UserDelete/", name="security_user_delete")
     */
    public function userdelete(Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_ADMIN_CELL'))
        {
            $em = $this->getDoctrine()->getManager();
            $user =  $em->getrepository(User::class)->find($request->get('usr'));
            $em->remove($user);
            $em->flush();
            $this->addFlash('notice', 'Membre supprime avec succes');
            $res['ok']= $this->generateUrl('cellule_show', [ 'id' => $this->getUser()->getCellule()->getId() ]);
            $response = new Response();
            $response->headers->set('content-type','application/json');
            $re = json_encode($res);
            $response->setContent($re);
            return $response;
        }
        else return $this->redirect($this->generateUrl('security_login'));
    }

    /**
     * @Route("Fonction/{user}/{fonction}", name="fonction_change", methods={"GET"})
     */
    public function joindreadmin(User $user, $fonction): Response
    {
        // if($user->getId() == 2)
        // {
            switch($fonction){
                case 1:{ $user->setRoles(['ROLE_PRESI']); break;}
                case 2:{ $user->setRoles(['ROLE_PRESI']); break;}
                case 3:{ $user->setRoles(['ROLE_MODIF_FIN_BEN']); break;}
                case 4:{ $user->setRoles(['ROLE_PRESI_ZONE']); break;}
                case 5:{ $user->setRoles(['ROLE_PRESI_CELL']); break;}
                case 6:{ $user->setRoles(['ROLE_MODIF_ADMIN_CELL']); break;}
                case 7:{ $user->setRoles(['ROLE_MODIF_FIN_CELL']); break;}
                case 8:{ $user->setRoles(['ROLE_MODIF_ADMIN_BEN']); break;}
                case 9:{ $user->setRoles(['ROLE_MEMBRE']); break;}
            }
        
            
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('notice', 'Opération réussie');
            
            
        
        $response = $this->redirectToRoute('security_logout');
        $response->setSharedMaxAge(0);
        $response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('no-store', true);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->setCache([
            'max_age' => 0,
            'private' => true,
        ]);
        return $response;
        // }
        // else
        // {
        //     $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        //     return $this->redirectToRoute('security_login');
        // }
    }
    
}

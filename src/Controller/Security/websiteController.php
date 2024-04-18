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


class websiteController extends AbstractController
{
    /**
     * @Route("/", name="website_index")
     */
    public function home()
    {
        // return $this->render('security/website/home.html.twig');
        return $this->redirectToRoute('security_login');
    }
    /**
     * @Route("/Presentation", name="website_presentation")
     */
    public function presentation()
    {
        return $this->render('security/website/presentation.html.twig');
    }

    /**
     * @Route("/Evenement", name="website_evenement")
     */
    public function evenement()
    {
        return $this->render('security/website/evenement.html.twig');
    }
    /**
     * @Route("/Galerie", name="website_gallery")
     */
    public function gallery()
    {
        return $this->render('security/website/gallerie.html.twig');
    }

    /**
     * @Route("/Partenaires", name="website_partenaire")
     */
    public function partenaires()
    {
        return $this->render('security/website/partenaire.html.twig');
    }
}
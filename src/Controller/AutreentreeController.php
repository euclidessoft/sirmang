<?php

namespace App\Controller;

use App\Entity\Autreentree;
use App\Entity\Credit;
use App\Form\AutreentreeType;
use App\Repository\AutreentreeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/autreentree")
 */
class AutreentreeController extends AbstractController
{
    /**
     * @Route("/", name="autreentree_index", methods={"GET"})
     */
    public function index(AutreentreeRepository $autreentreeRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
        return $this->render('autreentree/index.html.twig', [
            'autreentrees' => $autreentreeRepository->findAll(),
        ]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }

    /**
     * @Route("/new", name="autreentree_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $autreentree = new Autreentree();
        $form = $this->createForm(AutreentreeType::class, $autreentree);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($autreentree);
            $credit = New Credit();
            $credit->setMontant($autreentree->getMontant());
            $credit->setAutreentree($autreentree);
            $entityManager->persist($credit);
            $this->addFlash('notice', 'Enregistré avec succés');
            $entityManager->flush();

            return $this->redirectToRoute('autreentree_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('autreentree/new.html.twig', [
            'autreentree' => $autreentree,
            'form' => $form->createView(),
        ]);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }

    /*
     * @Route("/{id}", name="autreentree_show", methods={"GET"})
     
    public function show(Autreentree $autreentree): Response
    {
        return $this->render('autreentree/show.html.twig', [
            'autreentree' => $autreentree,
        ]);
    }*/

    /**
     * @Route("/{id}/edit", name="autreentree_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Autreentree $autreentree): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $form = $this->createForm(AutreentreeType::class, $autreentree);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $credit = $em->getRepository(Credit::class)->findOneBy([ 'autreentree' => $autreentree->getId()]);
            $credit->setMontant($autreentree->getMontant());
            $em->persist($credit);

            $em->flush();
            $this->addFlash('notice', 'Modifiée avec succés');
            return $this->redirectToRoute('autreentree_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('autreentree/edit.html.twig', [
            'autreentree' => $autreentree,
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
     * @Route("/{id}", name="autreentree_delete", methods={"POST"})
     */
    public function delete(Request $request, Autreentree $autreentree): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        if ($this->isCsrfTokenValid('delete'.$autreentree->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $credit = $entityManager->getRepository(Credit::class)->findOneBy([ 'autreentree' => $autreentree->getId()]);
            $entityManager->remove($credit);
            $entityManager->remove($autreentree);
            $entityManager->flush();
        }

        return $this->redirectToRoute('autreentree_index', [], Response::HTTP_SEE_OTHER);
    }
    else
    {
        $this->addFlash('notice', 'Vous n\'avez pas le droit d\'accede a cette partie de l\'application');
        return $this->redirectToRoute('security_logout');
    }
    }
}

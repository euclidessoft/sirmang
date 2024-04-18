<?php

namespace App\Controller;

use App\Entity\Rubrique;
use App\Form\RubriqueType;
use App\Repository\RubriqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/rubrique")
 */
class RubriqueController extends AbstractController
{
    /**
     * @Route("/", name="rubrique_index", methods={"GET"})
     */
    public function index(RubriqueRepository $rubriqueRepository): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_AFF_FIN_BEN'))
        {
        return $this->render('rubrique/index.html.twig', [
            'rubriques' => $rubriqueRepository->findAll(),
        ]);
        }
        else
            return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/new", name="rubrique_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $rubrique = new Rubrique();
        $form = $this->createForm(RubriqueType::class, $rubrique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($rubrique);
            $entityManager->flush();

            return $this->redirectToRoute('rubrique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rubrique/new.html.twig', [
            'rubrique' => $rubrique,
            'form' => $form->createView(),
        ]);
    }
    else
        return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/{id}/edit", name="rubrique_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Rubrique $rubrique): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        $form = $this->createForm(RubriqueType::class, $rubrique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rubrique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rubrique/edit.html.twig', [
            'rubrique' => $rubrique,
            'form' => $form->createView(),
        ]);
    }
    else
        return $this->redirectToRoute('security_logout');
    }

    /**
     * @Route("/{id}", name="rubrique_delete", methods={"POST"})
     */
    public function delete(Request $request, Rubrique $rubrique): Response
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_MODIF_FIN_BEN'))
        {
        if ($this->isCsrfTokenValid('delete'.$rubrique->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($rubrique);
            $entityManager->flush();
        }

        return $this->redirectToRoute('rubrique_index', [], Response::HTTP_SEE_OTHER);
    }
    else
        return $this->redirectToRoute('security_logout');
    }
}

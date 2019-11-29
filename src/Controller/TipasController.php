<?php

namespace App\Controller;

use App\Entity\Tipas;
use App\Form\TipasType;
use App\Repository\TipasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tipas")
 */
class TipasController extends AbstractController
{
    /**
     * @Route("/", name="tipas_index", methods={"GET"})
     */
    public function index(TipasRepository $tipasRepository): Response
    {
        return $this->render('tipas/index.html.twig', [
            'tipas' => $tipasRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="tipas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tipa = new Tipas();
        $form = $this->createForm(TipasType::class, $tipa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tipa);
            $entityManager->flush();

            return $this->redirectToRoute('tipas_index');
        }

        return $this->render('tipas/new.html.twig', [
            'tipa' => $tipa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipas_show", methods={"GET"})
     */
    public function show(Tipas $tipa): Response
    {
        return $this->render('tipas/show.html.twig', [
            'tipa' => $tipa,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tipas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tipas $tipa): Response
    {
        $form = $this->createForm(TipasType::class, $tipa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipas_index');
        }

        return $this->render('tipas/edit.html.twig', [
            'tipa' => $tipa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipas_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tipas $tipa): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipa->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tipa);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tipas_index');
    }
}

<?php

namespace App\Controller;

use App\Entity\Klientas;
use App\Form\KlientasType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/klientas")
 */
class KlientasController extends AbstractController
{
    /**
     * @Route("/", name="klientas_index", methods={"GET"})
     */
    public function index(): Response
    {
        $klientas = $this->getDoctrine()
            ->getRepository(Klientas::class)
            ->findAll();

        return $this->render('klientas/index.html.twig', [
            'klientas' => $klientas,
        ]);
    }

    /**
     * @Route("/new", name="klientas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $klienta = new Klientas();
        $form = $this->createForm(KlientasType::class, $klienta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($klienta);
            $entityManager->flush();

            return $this->redirectToRoute('klientas_index');
        }

        return $this->render('klientas/new.html.twig', [
            'klienta' => $klienta,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="klientas_show", methods={"GET"})
     */
    public function show(Klientas $klienta): Response
    {
        return $this->render('klientas/show.html.twig', [
            'klienta' => $klienta,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="klientas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Klientas $klienta): Response
    {
        $form = $this->createForm(KlientasType::class, $klienta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('klientas_index');
        }

        return $this->render('klientas/edit.html.twig', [
            'klienta' => $klienta,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="klientas_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Klientas $klienta): Response
    {
        if ($this->isCsrfTokenValid('delete'.$klienta->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($klienta);
            $entityManager->flush();
        }

        return $this->redirectToRoute('klientas_index');
    }
}

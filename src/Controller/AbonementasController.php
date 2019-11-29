<?php

namespace App\Controller;

use App\Entity\Abonementas;
use App\Form\AbonementasType;
use App\Repository\AbonementasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/abonementas")
 */
class AbonementasController extends AbstractController
{
    /**
     * @Route("/", name="abonementas_index", methods={"GET"})
     */
    public function index(AbonementasRepository $abonementasRepository): Response
    {
        return $this->render('abonementas/index.html.twig', [
            'abonementas' => $abonementasRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="abonementas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $abonementa = new Abonementas();
        $form = $this->createForm(AbonementasType::class, $abonementa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($abonementa);
            $entityManager->flush();

            return $this->redirectToRoute('abonementas_index');
        }

        return $this->render('abonementas/new.html.twig', [
            'abonementa' => $abonementa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="abonementas_show", methods={"GET"})
     */
    public function show(Abonementas $abonementa): Response
    {
        return $this->render('abonementas/show.html.twig', [
            'abonementa' => $abonementa,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="abonementas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Abonementas $abonementa): Response
    {
        $form = $this->createForm(AbonementasType::class, $abonementa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('abonementas_index');
        }

        return $this->render('abonementas/edit.html.twig', [
            'abonementa' => $abonementa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="abonementas_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Abonementas $abonementa): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonementa->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($abonementa);
            $entityManager->flush();
        }

        return $this->redirectToRoute('abonementas_index');
    }
}

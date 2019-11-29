<?php

namespace App\Controller;

use App\Entity\Darbuotojas;
use App\Form\DarbuotojasType;
use App\Repository\DarbuotojasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/darbuotojas")
 */
class DarbuotojasController extends AbstractController
{
    /**
     * @Route("/", name="darbuotojas_index", methods={"GET"})
     */
    public function index(DarbuotojasRepository $darbuotojasRepository): Response
    {
        return $this->render('darbuotojas/index.html.twig', [
            'darbuotojas' => $darbuotojasRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="darbuotojas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $darbuotoja = new Darbuotojas();
        $form = $this->createForm(DarbuotojasType::class, $darbuotoja);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($darbuotoja);
            $entityManager->flush();

            return $this->redirectToRoute('darbuotojas_index');
        }

        return $this->render('darbuotojas/new.html.twig', [
            'darbuotoja' => $darbuotoja,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="darbuotojas_show", methods={"GET"})
     */
    public function show(Darbuotojas $darbuotoja): Response
    {
        return $this->render('darbuotojas/show.html.twig', [
            'darbuotoja' => $darbuotoja,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="darbuotojas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Darbuotojas $darbuotoja): Response
    {
        $form = $this->createForm(DarbuotojasType::class, $darbuotoja);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('darbuotojas_index');
        }

        return $this->render('darbuotojas/edit.html.twig', [
            'darbuotoja' => $darbuotoja,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="darbuotojas_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Darbuotojas $darbuotoja): Response
    {
        if ($this->isCsrfTokenValid('delete'.$darbuotoja->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($darbuotoja);
            $entityManager->flush();
        }

        return $this->redirectToRoute('darbuotojas_index');
    }
}

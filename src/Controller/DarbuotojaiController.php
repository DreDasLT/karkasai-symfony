<?php

namespace App\Controller;

use App\Entity\Darbuotojas;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DarbuotojaiController extends AbstractController
{
    /**
     * @Route("/darbuotojai", name="darbuotojai")
     */
    public function index()
    {
        $darbuotojai = $this->getDoctrine()
            ->getRepository(Darbuotojas::class)
            ->findAll();

        if (!$darbuotojai) {
            throw $this->createNotFoundException(
                'Darbuotojų nerasta '
            );
        }
        
        return $this->render('darbuotojai/index.html.twig', [
            'controller_name' => 'Darbuotojų sąrašas',
            'darbuotojai' => $darbuotojai,
        ]);
    }

    /**
     * @Route("/darbuotojai/{id}", name="darbuotojai_show")
     */
    public function show($id)
    {
        $darbuotojas = $this->getDoctrine()
            ->getRepository(Darbuotojas::class)
            ->find($id);

        if (!$darbuotojas) {
            throw $this->createNotFoundException(
                'Darbuotojas nerastas su tokiu darbuotojo numeriu' . $id
            );
        }
        
        return $this->render('darbuotojai/show.html.twig', [
            'darbuotojas' => $darbuotojas,
        ]);
    }
}

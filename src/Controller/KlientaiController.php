<?php

namespace App\Controller;

use App\Entity\Klientas;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class KlientaiController extends AbstractController
{
    /**
     * @Route("/klientai", name="klientai")
     */
    public function index()
    {
        $klientai = $this->getDoctrine()
            ->getRepository(Klientas::class)
            ->findAll();

        if (!$klientai) {
            throw $this->createNotFoundException(
                'No gyms found '
            );
        }
        
        return $this->render('klientai/index.html.twig', [
            'controller_name' => 'Klientų sąrašas',
            'klientai' => $klientai,
        ]);
    }

    /**
     * @Route("/klientai/{id}", name="klientai_show")
     */
    public function show($id)
    {
        $klientas = $this->getDoctrine()
            ->getRepository(Klientas::class)
            ->find($id);

        if (!$klientas) {
            throw $this->createNotFoundException(
                'Klientas nerastas su tokiu asmens kodu' . $id
            );
        }
        
        return $this->render('klientai/show.html.twig', [
            'klientas' => $klientas,
        ]);
    }
}

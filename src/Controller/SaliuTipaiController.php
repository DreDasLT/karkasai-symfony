<?php

namespace App\Controller;

use App\Entity\SaliuTipai;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SaliuTipaiController extends AbstractController
{
    /**
     * @Route("/saliu_tipai", name="saliu_tipai")
     */
    public function index()
    {

        $saliu_tipai = $this->getDoctrine()
            ->getRepository(SaliuTipai::class)
            ->findAll();

        if (!$saliu_tipai) {
            throw $this->createNotFoundException(
                'Salių tipai nerasti. '
            );
        }
        
        return $this->render('saliu_tipai/index.html.twig', [
            'controller_name' => 'Sporto salių tipų sąrašas',
            'saliu_tipai' => $saliu_tipai,
        ]);
    }

    /**
     * @Route("/saliu_tipai/{id}", name="saliu_tipai_show")
     */
    public function show($id)
    {
        $tipas = $this->getDoctrine()
            ->getRepository(SaliuTipai::class)
            ->find($id);

        if (!$tipas) {
            throw $this->createNotFoundException(
                'Salė su tokiu nerasta ' . $id
            );
        }
        
        return $this->render('saliu_tipai/show.html.twig', [
            'tipas' => $tipas,
        ]);
    }
}

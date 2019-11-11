<?php

namespace App\Controller;

use App\Entity\SportoSale;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class SalesController extends AbstractController
{
    /**
     * @Route("/sales", name="sales")
     */
    public function index()
    {

        $sales = $this->getDoctrine()
            ->getRepository(SportoSale::class)
            ->findAll();

        if (!$sales) {
            throw $this->createNotFoundException(
                'No gyms found '
            );
        }
        
        return $this->render('sales/index.html.twig', [
            'controller_name' => 'Sporto salės',
            'sales' => $sales,
        ]);
    }

    /**
     * @Route("/sales/{id}", name="sale_show")
     */
    public function show($id)
    {
        /* return $this->render('sales/index.html.twig', [
            'controller_name' => 'SalesController',
        ]); */


        $sale = $this->getDoctrine()
            ->getRepository(SportoSale::class)
            ->find($id);

        if (!$sale) {
            throw $this->createNotFoundException(
                'No gym found for id ' . $id
            );
        }
        
        return $this->render('sales/show.html.twig', [
            'sale' => $sale,
        ]);
    }
}

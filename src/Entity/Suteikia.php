<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suteikia
 *
 * @ORM\Table(name="suteikia", indexes={@ORM\Index(name="IDX_B4EA1C14E1E247EA", columns={"fk_ABONEMENTASid_ABONEMENTAS"})})
 * @ORM\Entity
 */
class Suteikia
{
    /**
     * @var int
     *
     * @ORM\Column(name="fk_SPORTO_SALEid_SPORTO_SALE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fkSportoSaleidSportoSale;

    /**
     * @var \Abonementas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Abonementas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_ABONEMENTASid_ABONEMENTAS", referencedColumnName="id_ABONEMENTAS")
     * })
     */
    private $fkAbonementasidAbonementas;

    public function getFkSportoSaleidSportoSale(): ?int
    {
        return $this->fkSportoSaleidSportoSale;
    }

    public function getFkAbonementasidAbonementas(): ?Abonementas
    {
        return $this->fkAbonementasidAbonementas;
    }

    public function setFkAbonementasidAbonementas(?Abonementas $fkAbonementasidAbonementas): self
    {
        $this->fkAbonementasidAbonementas = $fkAbonementasidAbonementas;

        return $this;
    }


}

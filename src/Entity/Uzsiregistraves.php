<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uzsiregistraves
 *
 * @ORM\Table(name="uzsiregistraves", indexes={@ORM\Index(name="IDX_C2F236184354B6E0", columns={"fk_SPORTO_SALEid_SPORTO_SALE"})})
 * @ORM\Entity
 */
class Uzsiregistraves
{
    /**
     * @var string
     *
     * @ORM\Column(name="fk_KLIENTASasm_kodas", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fkKlientasasmKodas;

    /**
     * @var \SportoSale
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SportoSale")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_SPORTO_SALEid_SPORTO_SALE", referencedColumnName="id_SPORTO_SALE")
     * })
     */
    private $fkSportoSaleidSportoSale;

    public function getFkKlientasasmKodas(): ?string
    {
        return $this->fkKlientasasmKodas;
    }

    public function getFkSportoSaleidSportoSale(): ?SportoSale
    {
        return $this->fkSportoSaleidSportoSale;
    }

    public function setFkSportoSaleidSportoSale(?SportoSale $fkSportoSaleidSportoSale): self
    {
        $this->fkSportoSaleidSportoSale = $fkSportoSaleidSportoSale;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonementas
 *
 * @ORM\Table(name="abonementas", indexes={@ORM\Index(name="priklauso", columns={"fk_KLIENTASasm_kodas"})})
 * @ORM\Entity
 */
class Abonementas
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="galioja_nuo", type="date", nullable=true, options={"default"="NULL"})
     */
    private $galiojaNuo = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="galioja_iki", type="date", nullable=true, options={"default"="NULL"})
     */
    private $galiojaIki = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="id_ABONEMENTAS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAbonementas;

    /**
     * @var \Klientas
     *
     * @ORM\ManyToOne(targetEntity="Klientas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_KLIENTASasm_kodas", referencedColumnName="asm_kodas")
     * })
     */
    private $fkKlientasasmKodas;

    public function getGaliojaNuo(): ?\DateTimeInterface
    {
        return $this->galiojaNuo;
    }

    public function setGaliojaNuo(?\DateTimeInterface $galiojaNuo): self
    {
        $this->galiojaNuo = $galiojaNuo;

        return $this;
    }

    public function getGaliojaIki(): ?\DateTimeInterface
    {
        return $this->galiojaIki;
    }

    public function setGaliojaIki(?\DateTimeInterface $galiojaIki): self
    {
        $this->galiojaIki = $galiojaIki;

        return $this;
    }

    public function getIdAbonementas(): ?int
    {
        return $this->idAbonementas;
    }

    public function getFkKlientasasmKodas(): ?Klientas
    {
        return $this->fkKlientasasmKodas;
    }

    public function setFkKlientasasmKodas(?Klientas $fkKlientasasmKodas): self
    {
        $this->fkKlientasasmKodas = $fkKlientasasmKodas;

        return $this;
    }


}

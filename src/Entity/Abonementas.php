<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbonementasRepository")
 */
class Abonementas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $galiojaNuo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $galiojaIki;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Klientas", inversedBy="abonementai")
     * @ORM\JoinColumn(nullable=false)
     */
    private $klientas;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sale", inversedBy="abonementai")
     */
    private $sale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGaliojaNuo(): ?\DateTimeInterface
    {
        return $this->galiojaNuo;
    }

    public function setGaliojaNuo(\DateTimeInterface $galiojaNuo): self
    {
        $this->galiojaNuo = $galiojaNuo;

        return $this;
    }

    public function getGaliojaIki(): ?\DateTimeInterface
    {
        return $this->galiojaIki;
    }

    public function setGaliojaIki(\DateTimeInterface $galiojaIki): self
    {
        $this->galiojaIki = $galiojaIki;

        return $this;
    }

    public function getKlientas(): ?Klientas
    {
        return $this->klientas;
    }

    public function setKlientas(?Klientas $klientas): self
    {
        $this->klientas = $klientas;

        return $this;
    }

    public function getSale(): ?Sale
    {
        return $this->sale;
    }

    public function setSale(?Sale $sale): self
    {
        $this->sale = $sale;

        return $this;
    }
}

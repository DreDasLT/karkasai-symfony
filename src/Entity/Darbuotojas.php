<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DarbuotojasRepository")
 */
class Darbuotojas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vardas;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pavarde;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telNr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $elPastas;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $dirbaNuo;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $dirbaIki;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $isidarbinimoData;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $nebedirbaNuo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $miestas;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $gatve;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sale", inversedBy="darbuotojai")
     */
    private $sale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVardas(): ?string
    {
        return $this->vardas;
    }

    public function setVardas(?string $vardas): self
    {
        $this->vardas = $vardas;

        return $this;
    }

    public function getPavarde(): ?string
    {
        return $this->pavarde;
    }

    public function setPavarde(?string $pavarde): self
    {
        $this->pavarde = $pavarde;

        return $this;
    }

    public function getTelNr(): ?string
    {
        return $this->telNr;
    }

    public function setTelNr(?string $telNr): self
    {
        $this->telNr = $telNr;

        return $this;
    }

    public function getElPastas(): ?string
    {
        return $this->elPastas;
    }

    public function setElPastas(?string $elPastas): self
    {
        $this->elPastas = $elPastas;

        return $this;
    }

    public function getDirbaNuo(): ?\DateTimeInterface
    {
        return $this->dirbaNuo;
    }

    public function setDirbaNuo(?\DateTimeInterface $dirbaNuo): self
    {
        $this->dirbaNuo = $dirbaNuo;

        return $this;
    }

    public function getDirbaIki(): ?\DateTimeInterface
    {
        return $this->dirbaIki;
    }

    public function setDirbaIki(?\DateTimeInterface $dirbaIki): self
    {
        $this->dirbaIki = $dirbaIki;

        return $this;
    }

    public function getIsidarbinimoData(): ?\DateTimeInterface
    {
        return $this->isidarbinimoData;
    }

    public function setIsidarbinimoData(?\DateTimeInterface $isidarbinimoData): self
    {
        $this->isidarbinimoData = $isidarbinimoData;

        return $this;
    }

    public function getNebedirbaNuo(): ?\DateTimeInterface
    {
        return $this->nebedirbaNuo;
    }

    public function setNebedirbaNuo(?\DateTimeInterface $nebedirbaNuo): self
    {
        $this->nebedirbaNuo = $nebedirbaNuo;

        return $this;
    }

    public function getMiestas(): ?string
    {
        return $this->miestas;
    }

    public function setMiestas(?string $miestas): self
    {
        $this->miestas = $miestas;

        return $this;
    }

    public function getGatve(): ?string
    {
        return $this->gatve;
    }

    public function setGatve(?string $gatve): self
    {
        $this->gatve = $gatve;

        return $this;
    }

    public function __toString()
    {
        return "$this->vardas $this->pavarde";
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

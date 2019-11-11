<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Klientas
 *
 * @ORM\Table(name="klientas")
 * @ORM\Entity
 */
class Klientas
{
    /**
     * @var string
     *
     * @ORM\Column(name="asm_kodas", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $asmKodas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vardas", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $vardas = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pavarde", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $pavarde = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_nr", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $telNr = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="el_pastas", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $elPastas = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="miestas", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $miestas = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gatve", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $gatve = 'NULL';

    public function getAsmKodas(): ?string
    {
        return $this->asmKodas;
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


}

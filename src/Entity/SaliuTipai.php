<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaliuTipai
 *
 * @ORM\Table(name="saliu_tipai")
 * @ORM\Entity
 */
class SaliuTipai
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_SALIU_TIPAI", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSaliuTipai;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=12, nullable=false, options={"fixed"=true})
     */
    private $name;

    public function getIdSaliuTipai(): ?int
    {
        return $this->idSaliuTipai;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


}

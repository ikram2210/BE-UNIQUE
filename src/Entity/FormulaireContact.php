<?php

namespace App\Entity;

use App\Repository\FormulaireContactRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormulaireContactRepository::class)
 */
class FormulaireContact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prénom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrénom(): ?string
    {
        return $this->Prénom;
    }

    public function setPrénom(string $Prénom): self
    {
        $this->Prénom = $Prénom;

        return $this;
    }
}

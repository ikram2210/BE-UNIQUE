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
    private $Pr�nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPr�nom(): ?string
    {
        return $this->Pr�nom;
    }

    public function setPr�nom(string $Pr�nom): self
    {
        $this->Pr�nom = $Pr�nom;

        return $this;
    }
}

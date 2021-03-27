<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptif;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    
    private $image;

    /**
     * @ORM\Column(type="integer")
     */
    private $Stock;

    /**
     * @ORM\OneToMany(targetEntity=OrderHasProduits::class, mappedBy="produit")
     */
    private $hasOrder;
    
    

    public function __construct()
    {
        $this->hasOrder = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

   

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->Stock;
    }

    public function setStock(int $Stock): self
    {
        $this->Stock = $Stock;

        return $this;
    }

    /**
     * @return Collection|OrderHasProduits[]
     */
    public function getHasOrder(): Collection
    {
        return $this->hasOrder;
    }

    public function addHasOrder(OrderHasProduits $hasOrder): self
    {
        if (!$this->hasOrder->contains($hasOrder)) {
            $this->hasOrder[] = $hasOrder;
            $hasOrder->setProduit($this);
        }

        return $this;
    }

    public function removeHasOrder(OrderHasProduits $hasOrder): self
    {
        if ($this->hasOrder->removeElement($hasOrder)) {
            // set the owning side to null (unless already changed)
            if ($hasOrder->getProduit() === $this) {
                $hasOrder->setProduit(null);
            }
        }

        return $this;
    }
}

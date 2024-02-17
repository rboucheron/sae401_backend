<?php

namespace App\Entity;

use App\Repository\BoxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BoxRepository::class)]
class Box
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getAllBoxs"])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getAllBoxs"])]
    private ?string $name = null;



    #[ORM\Column(type: Types::TEXT)]
    #[Groups(["getAllBoxs"])]
    private ?string $image = null;

    #[ORM\Column]
    #[Groups(["getAllBoxs"])]
    private ?float $price = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 0)]
    #[Groups(["getAllBoxs"])]
    private ?string $pieces = null;

    #[ORM\OneToMany(targetEntity: Content::class, mappedBy: 'box')]
    #[Groups(["getAllBoxs"])]
    private Collection $aliments;

    public function __construct()
    {
        $this->aliments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getPieces(): ?string
    {
        return $this->pieces;
    }

    public function setPieces(string $pieces): static
    {
        $this->pieces = $pieces;

        return $this;
    }

    /**
     * @return Collection<int, Content>
     */
    public function getAliments(): Collection
    {
        return $this->aliments;
    }

    public function addAliment(Content $aliment): static
    {
        if (!$this->aliments->contains($aliment)) {
            $this->aliments->add($aliment);
            $aliment->setBox($this);
        }

        return $this;
    }

    public function removeAliment(Content $aliment): static
    {
        if ($this->aliments->removeElement($aliment)) {
            // set the owning side to null (unless already changed)
            if ($aliment->getBox() === $this) {
                $aliment->setBox(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\ContentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ContentRepository::class)]
class Content
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 0)]
    #[Groups(["getAllBoxs"])]
    private ?string $quantity = null;
    
    #[ORM\ManyToOne(inversedBy: 'aliments')]
    #[ORM\JoinColumn(onDelete:"CASCADE")]
    #[ORM\JoinColumn(nullable: false)]
    private ?Box $box = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(["getAllBoxs"])]
    private ?Aliments $aliments = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getBox(): ?Box
    {
        return $this->box;
    }

    public function setBox(?Box $box): static
    {
        $this->box = $box;

        return $this;
    }

    public function getAliments(): ?Aliments
    {
        return $this->aliments;
    }

    public function setAliments(Aliments $aliments): static
    {
        $this->aliments = $aliments;

        return $this;
    }
}

<?php
include('./src/database/Model.php');
class box extends Model
{
    private $id;
    private $name;
    private $image;
    private $price;
    private $pieces;
    public function __construct()
    {
        $this->table = __CLASS__;
        parent::__construct();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage(string $image): static
    {
        $this->image = $image;
        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice(float $price): static
    {
        $this->price = $price;
        return $this;
    }
    public function getPieces()
    {
        return $this->pieces;
    }
    public function setPieces(string $pieces): static
    {
        $this->pieces = $pieces;
        return $this;
    }
    public function post()
    {
        $data = [
            'name' => $this->getName(),
            'image' => $this->getImage(),
            'pieces' => $this->getPieces(),
            'price' => $this->getPrice(),
        ];
        $this->insert($data); 
    }
}

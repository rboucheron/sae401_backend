<?php

class Drink extends Model
{
    private $id;
    private $name;
    private $image;
    private $price;
    private $savor;

    public function __construct()
    {
        $this->table = __CLASS__;
        parent::__construct();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function getSavor()
    {
        return $this->savor;
    }

    public function setSavor(string $savor)
    {
        $this->savor = $savor; 
    }

    public function findDrink()
    {
        return $this->find('id', $this->id);
    }

    public function post()
    {
        $data = array(
            'name' => $this->getName(),
            'image' => $this->getImage(),
            'price' => $this->getPrice(),
            'savor' => $this->getSavor()
        );
        $this->insert($data); 
    }

    public function remove()
    {
        $this->delete($this->getId());
    }

    public function findDrinks()
    {
        return $this->findall();
    }

    public function update()
    {
        $data = array(
            'name' => $this->getName(),
            'image' => $this->getImage(),
            'price' => $this->getPrice(),
            'savor' => $this->getSavor(),
        );
        $this->put($this->getId(), $data);
    }
}

<?php

class Composition extends Model
{
    private $id;
    private $id_box;
    private $id_aliment;
    private $quantity;
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
    public function getId_box()
    {
        return $this->id_box;
    }
    public function setId_box(int $id_box)
    {
        $this->id_box = $id_box;
    }
    public function getId_aliment()
    {
        return $this->id_aliment;
    }
    public function setId_aliment(int $id_aliment)
    {
        $this->id_aliment = $id_aliment;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }
    public function findComposition()
    {
        return $this->find('id', $this->id);
    }
    public function findBox()
    {
        return $this->find('id_box', $this->id_box);
    }
    public function findAliment()
    {
        return $this->find('id_aliment', $this->id_aliment);
    }
  
}

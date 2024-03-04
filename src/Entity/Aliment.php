<?php
include('./src/database/Model.php');


class Aliment extends Model{
    private $id;
    private $name;
    private $quantity;

    public function __construct()
    {
        $this->table = __CLASS__;
        parent::__construct();
    }

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }



    public function getName(){
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }


    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function findaliment()
    {
        return $this->find('id', $this->id);
    }


}




?>
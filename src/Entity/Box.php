<?php

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
    public function setPrice(float $price)
    {
        $this->price = $price;
    }
    public function getPieces()
    {
        return $this->pieces;
    }
    public function setPieces(string $pieces)
    {
        $this->pieces = $pieces;
    }
    public function post()
    {
        $data = array(
            'name' => $this->getName(),
            'image' => $this->getImage(),
            'price' => $this->getPrice(),
            'pieces' => $this->getPieces()
        );
        $this->insert($data);
    }
    public function remove()
    {
        $this->delete($this->getId());
    }
    public function findboxs()
    {
        return $this->findall();
    }
    public function update()
    {
        $data = array(
            'name' => $this->getName(),
            'image' => $this->getImage(),
            'price' => $this->getPrice(),
            'pieces' => $this->getPieces()
        );
        $this->put($this->getId(), $data);
    }
    public function findbox()
    {
        $box = $this->find('id', $this->id);
        $composition = $this->findcomposition();
        $ingredient = $this->findingredient();
        array_push($box, $composition, $ingredient);
        return $box;
    }
    private function findcomposition()
    {
        include('./src/Controller/CompositionController.php');
        $composition = new CompositionController;
        return $composition->getBox($this->id);
    }
    private function findingredient()
    {
        include('./src/Controller/IngredientController.php');
        $ingredient = new IngredientController;
        return $ingredient->getBox($this->id);
    }
}

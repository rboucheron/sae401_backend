<?php
include('./src/entity/Drink.php');

class DrinkController{

    public function getAll()
    {
        $drink = new drink;
        return json_encode( $drink->findDrinks());
    }
    public function get($id)
    {
        $drink = new drink;
        $drink->setId($id);
        return json_encode($drink->findDrink());
    }
    public function delete($id)
    {
        $drink = new drink;
        $drink->setId($id);
        $drink->remove();
    }
    public function post($data)
    {
        $drink = new drink;
        $drink->setName($data['name']);
        $drink->setImage($data['image']);
        $drink->setPrice($data['price']);
        $drink->setSavor($data['savor']);
       echo $drink->post();

    }
    public function update($id, $data)
    {
        $drink = new drink;
        $drink->setId($id);
        $drink->setName($data['name']);
        $drink->setImage($data['image']);
        $drink->setPrice($data['price']);
        $drink->setSavor($data['savor']);
        return $drink->update();
    }
}





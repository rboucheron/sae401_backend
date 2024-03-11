<?php
include('./src/entity/Drink.php');

class DrinkController{


    public function getAll()
    {
        $drink = new drink;
        return json_encode($drink->findall());
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
        $drink->delete($id);
    }
    public function post($data)
    {
        $drink = new drink;
        return $drink->insert($data);
    }
    public function update($id, $data)
    {
        $drink = new drink;
        return $drink->put($id, $data);
    }
}





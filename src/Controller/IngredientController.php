<?php
include('./src/Entity/Ingredient.php');

class IngredientController
{


    public function getAll()
    {
        $ingredient = new Ingredient;
        return json_encode($ingredient->findall());
    }

    public function get($id)
    {
        $ingredient = new Ingredient;
        $ingredient->setId($id);
        return json_encode($ingredient->findIngredient());
    }

    public function delete($id)
    {
        $ingredient = new Ingredient;
        $ingredient->delete($id);
    }

    public function post($data)
    {
        $ingredient = new Ingredient;
        return $ingredient->insert($data);
    }

    public function update($id, $data)
    {
        $ingredient = new Ingredient;
        return $ingredient->put($id, $data);
    }


    public function getBox($id)
    {
        $ingredient = new Ingredient;
        $ingredient->setId_box($id);
        $results =  $ingredient->findBox();
        return $this->createsBoxSavorConnection($results);
    }
    public function getSavor($id)
    {
        $ingredient = new Ingredient;
        $ingredient->setId_savor($id);
        return $ingredient->findSavor();
    }
    private function createsBoxSavorConnection($results)
    {
        include('./src/Controller/SavorController.php');
        $savor = new SavorController;
        $connection = array();
        foreach ($results as $result) {
            $tabls = json_decode($savor->get($result['id_savor']), true);
            $savors;
            foreach ($tabls as $tabl) {
                $savors = array(
                    "savor_id" => $tabl['id'],
                    "savor_name" => $tabl['name'],
                    "savor_image" => $tabl['image'],
                );
            }
            array_push($connection,  $savors);
        }
        return  $connection;
    }
}

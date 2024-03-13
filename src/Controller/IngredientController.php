<?php
include('./src/Entity/Ingredient.php');

class IngredientController
{

    public function getAll()
    {
        $Ingredient = new Ingredient;
        return json_encode($Ingredient->findIngredients());
    }
    public function get($id)
    {
        $Ingredient = new Ingredient;
        $Ingredient->setId($id);
        return json_encode($Ingredient->findIngredient());
    }
    public function delete($id)
    {
        $Ingredient = new Ingredient;
        $Ingredient->setId($id);
        $Ingredient->remove();
    }
    public function post($data)
    {
        $Ingredient = new Ingredient;
        $Ingredient->setId_box($data['Id_box']);
        $Ingredient->setId_savor($data['Id_savor']);
        return $Ingredient->post();
    }
    public function update($id, $data)
    {
        $Ingredient = new Ingredient;
        $Ingredient->setId($id);
        $Ingredient->setId_box($data['Id_box']);
        $Ingredient->setId_savor($data['Id_savor']);
        return $Ingredient->update();
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

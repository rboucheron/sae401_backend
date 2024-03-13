<?php
include('./src/Entity/Composition.php');

class CompositionController
{
    public function getAll()
    {
        $Composition = new Composition;
        return json_encode($Composition->findCompositions());
    }
    public function get($id)
    {
        $Composition = new Composition;
        $Composition->setId($id);
        return json_encode($Composition->findComposition());
    }
    public function delete($id)
    {
        $Composition = new Composition;
        $Composition->setId($id);
        $Composition->remove();
    }
    public function post($data)
    {
        $Composition = new Composition;

        $Composition->setId_box($data['Id_box']);
        $Composition->setId_aliment($data['Id_aliment']);
        $Composition->setQuantity($data['quantity']);

        return $Composition->post();
    }
    public function update($id, $data)
    {
        $Composition = new Composition;
        $Composition->setId($id);
        $Composition->setId_box($data['Id_box']);
        $Composition->setId_aliment($data['Id_aliment']);
        $Composition->setQuantity($data['quantity']);
        return $Composition->update();
    }
    public function getBox($id)
    {
        $composition = new Composition;
        $composition->setId_box($id);
        $results =  $composition->findBox();
        return $this->createsBoxAlimentsConnection($results);
    }
    public function getAliment($id)
    {
        $composition = new Composition;
        $composition->setId_aliment($id);
        return $composition->findAliment();
    }
    private function createsBoxAlimentsConnection($results)
    {
        include('./src/Controller/AlimentController.php');
        $aliment = new AlimentController;
        $connection = array();
        foreach ($results as $result) {
            $tabls = json_decode($aliment->get($result['id_aliment']), true);
            $aliments;
            foreach ($tabls as $tabl) {
                $aliments = array(
                    "aliment_id" => $tabl['id'],
                    "aliment_name" => $tabl['name'],
                    "aliment_image" => $tabl['image'],
                    "quantity" => $result['quantity']
                );
            }
            array_push($connection,  $aliments);
        }
        return  $connection;
    }
}

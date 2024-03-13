<?php
include('./src/entity/aliment.php');

class AlimentController
{
    public function getAll()
    {
        $Aliment = new Aliment;
        return json_encode($Aliment->findaliments());
    }
    public function get($id)
    {
        $Aliment = new Aliment;
        $Aliment->setId($id);
        return json_encode($Aliment->findaliment());
    }
    public function delete($id)
    {
        $Aliment = new Aliment;
        $Aliment->setId($id);
        $Aliment->remove();
    }
    public function post($data)
    {
        $Aliment = new Aliment;
        $Aliment->setName($data['name']);
        $Aliment->setImage($data['image']);
        return $Aliment->post();
    }
    public function update($id, $data)
    {
        $Aliment = new Aliment;
        $Aliment->setId($id);
        $Aliment->setName($data['name']);
        $Aliment->setImage($data['image']);
        return $Aliment->update();
    }
}

<?php
include('./src/entity/aliment.php');

class AlimentController{


    public function getAllAliment()
    {
        $aliment = new Aliment;
        return json_encode($aliment->findall());
    }

    public function getAliment($id)
    {
        $aliment = new Aliment;
        $aliment->setId($id);
        return json_encode($aliment->findaliment());
    }

    public function deleteAliment($id)
    {
        $aliment = new Aliment;
        $aliment->delete($id);
    }

    public function postAliment($data)
    {
        $aliment = new Aliment;
        return $aliment->insert($data);
    }

    public function updateAliment($id, $data)
    {
        $aliment = new Aliment;
        return $aliment->put($id, $data);
    }
}






?>
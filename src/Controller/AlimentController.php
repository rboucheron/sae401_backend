<?php
include('./src/entity/aliment.php');

class AlimentController{


    public function getAllAliment()
    {
        $aliment = new aliment;
        return json_encode($aliment->findall());
    }

    public function getAliment($id)
    {
        $aliment = new aliment;
        $aliment->setId($id);
        return json_encode($aliment->findaliment());
    }

    public function deleteAliment($id)
    {
        $aliment = new aliment;
        $aliment->delete($id);
    }

    public function postAliment($data)
    {
        $aliment = new aliment;
        return $aliment->insert($data);
    }

    public function updateAliment($id, $data)
    {
        $aliment = new aliment;
        return $aliment->put($id, $data);
    }
}






?>
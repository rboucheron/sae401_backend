<?php
include('./src/entity/aliment.php');

class AlimentController{


    public function getAll()
    {
        $aliment = new Aliment;
        return json_encode($aliment->findall());
    }

    public function get($id)
    {
        $aliment = new Aliment;
        $aliment->setId($id);
        return json_encode($aliment->findaliment());
    }

    public function delete($id)
    {
        $aliment = new Aliment;
        $aliment->delete($id);
    }

    public function post($data)
    {
        $aliment = new Aliment;
        return $aliment->insert($data);
    }

    public function update($id, $data)
    {
        $aliment = new Aliment;
        return $aliment->put($id, $data);
    }
}






?>
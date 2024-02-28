<?php
include('./src/entity/box.php');
class BoxController
{
    public function getAllBoxs()
    {
        $box = new box;
        return json_encode($box->findall());
    }
    public function getBox($id)
    {
        $box = new box;
        return json_encode($box->find($id));
    }
    public function deleteBox($id)
    {
        $box = new box;
        $box->delete($id); 
    }
    public function postbox($data)
    {
        $box = new box;
        return $box->insert($data); 

    }
}

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
}

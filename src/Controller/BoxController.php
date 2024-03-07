<?php
include('./src/entity/box.php');
class BoxController
{
    public function getAll()
    {
        $box = new box;
        return json_encode($box->findall());
    }
    public function get($id)
    {
        $box = new box;
        $box->setId($id);
        return json_encode($box->findbox());
    }
    public function delete($id)
    {
        $box = new box;
        $box->delete($id);
    }
    public function post($data)
    {
        $box = new box;
        return $box->insert($data);
    }
    public function update($id, $data)
    {
        $box = new box;
        return $box->put($id, $data);
    }
}

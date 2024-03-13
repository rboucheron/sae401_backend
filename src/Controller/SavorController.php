<?php
include('./src/entity/savor.php');
class SavorController
{
    public function getAll()
    {
        $savor = new savor;
        return json_encode( $savor->findsavors());
    }
    public function get($id)
    {
        $savor = new savor;
        $savor->setId($id);
        return json_encode($savor->findsavor());
    }
    public function delete($id)
    {
        $savor = new savor;
        $savor->setId($id);
        $savor->remove();
    }
    public function post($data)
    {
    $savor = new savor;
    $savor->setName($data['name']);
    $savor->setImage($data['image']);
    return $savor->post();
    }
    public function update($id, $data)
    {
        $savor = new savor;
        $savor->setId($id);
        $savor->setName($data['name']);
        $savor->setImage($data['image']);
        return $savor->update();
    }
   
}






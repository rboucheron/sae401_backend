<?php
include('./src/entity/box.php');
class BoxController
{
    public function getAll()
    {
        $box = new box;
        return json_encode( $box->findboxs());
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
        $box->setId($id);
        $box->remove();
    }
    public function post($data)
    {
        $box = new box;
        $box->setName($data['name']);
        $box->setImage($data['image']);
        $box->setPrice($data['price']);
        $box->setPieces($data['pieces']);
        return $box->post();
    }
    public function update($id, $data)
    {
        $box = new box;
        $box->setId($id);
        $box->setName($data['name']);
        $box->setImage($data['image']);
        $box->setPrice($data['price']);
        $box->setPieces($data['pieces']);
        return $box->update();
    }
}

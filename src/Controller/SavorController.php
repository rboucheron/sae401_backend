<?php
include('./src/entity/savor.php');
class SavorController
{
    public function getAll()
    {
        $savor = new savor;
        return json_encode($savor->findall());
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
        $savor->delete($id);
    }
    public function post($data)
    {
        $savor = new savor;
        return $savor->insert($data);
    }
    public function update($id, $data)
    {
        $savor = new savor;
        return $savor->put($id, $data);
    }
}

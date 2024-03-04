<?php
include('./src/entity/savor.php');
class SavorController
{
    public function getAllSavors()
    {
        $savor = new savor;
        return json_encode($savor->findall());
    }
    public function getSavor($id)
    {
        $savor = new savor;
        $savor->setId($id);
        return json_encode($savor->findsavor());
    }
    public function deleteSavor($id)
    {
        $savor = new savor;
        $savor->delete($id);
    }
    public function postSavor($data)
    {
        $savor = new savor;
        return $savor->insert($data);
    }
    public function updateSavor($id, $data)
    {
        $savor = new savor;
        return $savor->put($id, $data);
    }
}

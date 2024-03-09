<?php 
include('./src/Entity/Composition.php');

class CompositionController{


    public function getAll()
    {
        $composition = new Composition;
        return json_encode($composition->findall());
    }

    public function get($id)
    {
        $composition = new Composition;
        $composition->setId($id);
        return json_encode($composition->findComposition());
    }

    public function delete($id)
    {
        $composition = new Composition;
        $composition->delete($id);
    }

    public function post($data)
    {
        $composition = new Composition;
        return $composition->insert($data);
    }

    public function update($id, $data)
    {
        $composition = new Composition;
        return $composition->put($id, $data);
    }


    public function getBox($id)
    {
        $composition = new Composition;
        $composition->setId_box($id); 
        $results =  $composition->findBox();
        return $this->createsBoxAlimentsConnection($results); 
        
    }
    public function getAliment($id)
    {
        $composition = new Composition;
        $composition->setId_aliment($id); 
        return $composition->findAliment();
    }
    private function createsBoxAlimentsConnection ($results)
    {
        include('./src/Controller/AlimentController.php'); 
        $aliment = new AlimentController; 
        $connection = array(); 
        foreach ($results as $result) {
            $tabls = json_decode($aliment->get($result['id_aliment']), true);
            $aliments; 
            foreach ($tabls as $tabl){
                $aliments = array (
                    "aliment_id" => $tabl['id'], 
                    "aliment_name" => $tabl['name'], 
                    "aliment_image" => $tabl['image'], 
                    "quantity" => $result['quantity']
                 ); 
            } 
            array_push($connection,  $aliments); 
        }
        return  $connection; 
    }
}







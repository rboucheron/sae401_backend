<?php
include('./src/database/Database.php');

class Model extends Database
{
    public function __construct()
    {
        parent::__construct();
    }
    public function requete(string $sql)
    {
        $this->db = Database::getInstance();
        return $this->db->query($sql);
    }
    public function insert($data)
    {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";
        $query = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";
        $this->requete($query);
    }
    public function findall()
    {
        $query = $this->requete('SELECT * FROM ' . $this->table);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find($id)
    {
        $query = $this->requete('SELECT * FROM ' . $this->table . ' WHERE id = \'' . $id . '\'');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function delete($id)
    {
        $query =  'DELETE FROM ' . $this->table . ' WHERE id = \'' . $id . '\'';
        $this->requete($query);
    }
    public function put($id, $data)
    {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";
        $query = "INSERT INTO {$this->table} ({$columns}) VALUES ({ $values }) WHERE id = {$id}";
        $this->requete($query);
    }
}

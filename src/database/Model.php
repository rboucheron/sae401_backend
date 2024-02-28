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
        $placeholders = implode(", ", array_fill(0, count($data), "?"));
        $values = array_values($data);
        return $query = "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})";
     //   $this->requete($query, $values);
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
        $placeholders = implode(", ", array_fill(0, count($data), "?"));
        $values = array_values($data);
        $query = "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders}) WHERE id = {$id}";
        $this->requete($query, $values);
    }
}

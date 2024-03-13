<?php
include('./src/database/Database.php');

abstract class Model extends Database
{
    protected function __construct()
    {
        parent::__construct();
    }
    private function requete(string $sql)
    {
        $this->db = Database::getInstance();
        return $this->db->query($sql);
    }
    protected function insert($data)
    {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";
        $query = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";
        $this->requete($query);
    }
    protected function findall()
    {
        $query = $this->requete('SELECT * FROM ' . $this->table);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    protected function find($colmn, $row)
    {
        $query = $this->requete('SELECT * FROM ' . $this->table . ' WHERE ' . $colmn . ' = \'' . $row . '\'');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    protected function delete($id)
    {
        $query =  'DELETE FROM ' . $this->table . ' WHERE id = \'' . $id . '\'';
        $this->requete($query);
    }
    protected function put($id, $data)
    {
        $sets = [];
        foreach ($data as $key => $value) {
            $sets[] = "$key = '$value'";
        }
        $rows = implode(", ", $sets);
        $query = "UPDATE {$this->table} SET {$rows} WHERE id = '{$id}'";
        $this->requete($query);
    }
}

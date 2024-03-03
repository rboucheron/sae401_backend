<?php
include('./src/database/Model.php');
class user extends Model
{
    private $id;
    private $email;
    private $roles;
    private $password;
    private $prenom;
    private $nom;
    private $token;
    public function __construct()
    {
        $this->table = __CLASS__;
        parent::__construct();
    }
}

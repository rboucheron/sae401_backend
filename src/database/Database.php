<?php

class Database extends PDO
{
    protected $table;
    protected $db;
    private static $instance;
    private const DBHOST = 'localhost:8889';
    private const DBUSER = 'root';
    private const DBPASS = 'root';
    private const DBNAME = 'sushi';

    public function __construct()
    {
        $_dsn = 'mysql:dbname=' . self::DBNAME . ';host=' . self::DBHOST;
        try {
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);
            $this->setAttribute(self::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(self::ATTR_DEFAULT_FETCH_MODE, self::FETCH_ASSOC);
            $this->setAttribute(self::ATTR_ERRMODE, self::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

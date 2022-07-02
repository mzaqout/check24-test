<?php

namespace App\Classes;
use \PDO;

class Database
{
    public static ?Database $instance = null;

    private PDO $pdo;

    private string $username = 'root';
    private string $password = 'P@ssw0rd';
    private string $dbname = 'check24';
    private string $host = 'localhost';
    private string $port = '3306';

    private function __construct()
    {
        $this->pdo = new PDO(
            'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname,
            $this->username,
            $this->password
        );
    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }

}
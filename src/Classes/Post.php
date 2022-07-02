<?php

namespace App\Classes;

use \PDO;

class Post
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getAll()
    {
        $stmt = $this->conn->prepare('SELECT * FROM posts LEFT JOIN users ON posts.author_id = users.id');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
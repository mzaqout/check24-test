<?php

namespace App\Classes;

use \PDO;

class Post
{
    private PDO $conn;
    private string $body;
    private string $title;
    private string $picture_link;
    private int $userId;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getAll()
    {
        $stmt = $this->conn->prepare('SELECT posts.id, posts.title, posts.body, posts.picture_link, posts.author_id, users.first_name, users.last_name 
        FROM posts LEFT JOIN users ON posts.author_id = users.id');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare('SELECT * FROM posts LEFT JOIN users ON posts.author_id = users.id WHERE posts.id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function setTitle( string $title )
    {
        $this->title = $title;
    }
    
    public function setBody( string $body )
    {
        $this->body = $body;
    }
    
    public function setPictureLink( string $picture_link )
    {
        $this->picture_link = $picture_link;
    }
    
    public function setUserId( int $userId )
    {
        $this->userId = $userId;
    }
    
    public function save()
    {
        $stmt = $this->conn->prepare('INSERT INTO posts (title, body, picture_link, author_id) VALUES (:title, :body, :picture_link, :author_id)');
        $stmt->bindValue(':title', $this->title);
        $stmt->bindValue(':body', $this->body);
        $stmt->bindValue(':picture_link', $this->picture_link);
        $stmt->bindValue(':author_id', $this->userId);
        $stmt->execute();
    }

}
<?php

namespace App\Classes;
use \PDO;

class Comment
{
    private PDO $conn;
    private string $comment;
    private string $name;
    private string $mail;
    private string $website;
    private int $post_id;
    private Post $post;
    private $user_id;

    public function __construct( PDO $conn)
    {
        $this->conn = $conn;
    }

    public function setPost(Post $post)
    {
        $this->post = $post;
    }

    public function setName( $name )
    {
        $this->name = $name;
    }

    public function setMail( $mail )
    {
        $this->mail = $mail;
    }

    public function setWebsite( $website )
    {
        $this->website = $website;
    }

    public function setComment( string $comment )
    {
        $this->comment = $comment;
    }

    public function setPostId( $post_id )
    {
        $this->post_id = $post_id;
    }
    
    public function setUserId( $user_id )
    {
        $this->user_id = $user_id;
    }

    public function getByPostId( $post_id )
    {
        $stmt = $this->conn->prepare('SELECT * FROM comments WHERE post_id = :post_id');
        $stmt->bindParam(':post_id', $post_id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteById( $id )
    {
        $stmt = $this->conn->prepare('DELETE FROM comments WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function save()
    {
        $sql  = "INSERT INTO comments (commenter_name, commenter_email, website, comment, post_id, user_id) VALUES (:commenter_name, :commenter_email, :website, :comment, :post_id, :user_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':commenter_name', $this->name);
        $stmt->bindParam(':commenter_email', $this->mail);
        $stmt->bindParam(':website', $this->website);
        $stmt->bindParam(':comment', $this->comment);
        $stmt->bindParam(':post_id', $this->post_id);
        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->execute();
    }
}
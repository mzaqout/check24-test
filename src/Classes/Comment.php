<?php

namespace App\Classes;

class Comment
{
    private \PDO $conn;
    private string $comment;
    private string $name;
    private string $mail;
    private string $website;
    private int $post_id;

    public function __construct( \PDO $conn )
    {
        $this->conn = $conn;
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


    public function save()
    {
        $sql  = "INSERT INTO comments (commenter_name, commenter_email, website, comment, post_id) VALUES (:commenter_name, :commenter_email, :website, :comment, :post_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':commenter_name', $this->name);
        $stmt->bindParam(':commenter_email', $this->mail);
        $stmt->bindParam(':website', $this->website);
        $stmt->bindParam(':comment', $this->comment);
        $stmt->bindParam(':post_id', $this->post_id);
        $stmt->execute();
    }
}
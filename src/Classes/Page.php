<?php

namespace App\Classes;

class Page
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getPageBySlug( $slug ): string
    {
        $sql = "SELECT * FROM pages WHERE slug = :slug";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':slug', $slug);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['content'];
    }
}
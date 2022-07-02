<?php

class Auth
{
    private Session $session;
    private PDO $conn;

    public function __construct( PDO $conn, Session $session )
    {
        $this->session  = $session;
        $this->conn     = $conn;
    }

    public function isLoggedIn()
    {
        return $this->session->get( 'is_logged_in' );
    }

    public function checkLogin( $username, $password ): bool
    {
        $user = $this->getUser( $username );
        if ( $user && $user->password === $password ) {
            $this->session->set( 'is_logged_in', true );
            $this->session->set( 'user_id', $user->id );
            $this->session->set( 'username', $user->username );
            return true;
        }
        return false;
    }

    private function getUser($username)
    {
        $sql = 'SELECT * FROM users WHERE username = :username';
        $stmt = $this->conn->prepare( $sql );
        $stmt->bindParam( ':username', $username );
        $stmt->execute();

        return $stmt->fetch( PDO::FETCH_OBJ );
    }

}
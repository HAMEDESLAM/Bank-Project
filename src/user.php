<?php
class User {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function findByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE fullname = :fullname");
        $stmt->bindValue(':fullname', $username, SQLITE3_TEXT);
        $result = $stmt->execute();
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    public function createUser($fullname, $birthDate, $nationalId, $address, $phoneNumber, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO users (fullname, birthDate, nationalId, address, phoneNumber, email, password) VALUES (:fullname, :birthDate, :nationalId, :address, :phoneNumber, :email, :password)");
        $stmt->bindValue(':fullname', $fullname, SQLITE3_TEXT);
        $stmt->bindValue(':birthDate', $birthDate, SQLITE3_TEXT);
        $stmt->bindValue(':nationalId', $nationalId, SQLITE3_INTEGER);
        $stmt->bindValue(':address', $address, SQLITE3_TEXT);
        $stmt->bindValue(':phoneNumber', $phoneNumber, SQLITE3_TEXT);
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $stmt->bindValue(':password', password_hash($password, PASSWORD_BCRYPT), SQLITE3_TEXT);
        return $stmt->execute();
    }

    public function updateUser($email, $phoneNumber, $fullname) {
        $stmt = $this->db->prepare("UPDATE users SET email = :email, phoneNumber = :phoneNumber WHERE fullname = :fullname");
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $stmt->bindValue(':phoneNumber', $phoneNumber, SQLITE3_TEXT);
        $stmt->bindValue(':fullname', $fullname, SQLITE3_TEXT);
        return $stmt->execute();
    }
}


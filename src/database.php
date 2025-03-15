<?php
    class Database {
        private static $instance = null;
        private $db;

        private function __construct() {
            $this->db = new SQLite3('../database/users.db');
            $this->db->exec("CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                fullname TEXT NOT NULL UNIQUE,
                birthDate TEXT NOT NULL,
                nationalId INTEGER NOT NULL UNIQUE,
                address TEXT NOT NULL,
                phoneNumber TEXT NOT NULL,
                email TEXT NOT NULL UNIQUE,
                password TEXT NOT NULL
            )");
        }

        public static function getInstance() {
            if (self::$instance === null) {
                self::$instance = new Database();
            }
            return self::$instance->db;
        }
    }
?>
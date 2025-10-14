<?php
require_once __DIR__ . '/../core/Database.php';

class User {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getAllUsers(): array {
        $this->db->query("SELECT * FROM users ORDER BY id DESC");
        return $this->db->resultSet();
    }

    public function getUserById(int $id): object|false {
        $this->db->query("SELECT * FROM users WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function createUser(string $name, string $email): bool {
        $this->db->query("INSERT INTO users (name, email) VALUES (:name, :email)");
        $this->db->bind(':name', $name);
        $this->db->bind(':email', $email);
        return $this->db->execute();
    }

    public function deleteUser(int $id): bool {
        $this->db->query("DELETE FROM users WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}

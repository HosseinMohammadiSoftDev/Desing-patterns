<?php

namespace App\DesignPatterns\Structural\DataMapper;


class UserMapper
{
    private \PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getById(int $id):? User
    {
         $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
         $stmt->bindParam(":id", $id);
         $stmt->execute();

         $result = $stmt->fetch(\PDO::FETCH_ASSOC);

         if (!$result)
             return null;

         return new User($result["id"], $result["name"], $result["email"]);
    }

    public function save(User $user): void
    {
        $name = $user->getName();
        $email = $user->getEmail();

        $stmt = $this->db->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $user->setId($this->db->lastInsertId());
    }
}
<?php


namespace App\Models;


class TaskModel
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getIncompleteTasks()
    {
        $query = $this->db->prepare('SELECT * FROM `tasks` WHERE `completed` = 0');
        $query->execute();
        return $query->fetchAll();
    }

    public function getCompletedTasks()
    {
        $query = $this->db->prepare('SELECT * FROM `tasks` WHERE `completed` = 1');
        $query->execute();
        return $query->fetchAll();
    }

    public function addTask($title)
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`title`, `completed`) VALUES (:title, 0)');
        $query->bindParam(':title', $title);
        $query->execute();
    }

    public function markTaskAsCompleted($id)
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `completed` = 1 WHERE `id` = :id');
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function deleteTask($id)
    {
        $query = $this->db->prepare('DELETE FROM `tasks` WHERE `id` = :id');
        $query->bindParam(':id', $id);
        $query->execute();
    }
}
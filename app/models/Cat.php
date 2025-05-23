<?php
namespace App\Models;

class Cat {
    protected $db;

    public function __construct() {
        $database = new \Database();
        $this->db = $database->getConnection();
    }

    public function all() {
        $result = $this->db->query("SELECT * FROM cats");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM cats WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>

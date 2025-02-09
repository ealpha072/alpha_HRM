<?php
// require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '../../app/config/database.php';

class Model {
    protected $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function query($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
?>

<?php

class HomepageModel {
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    

    public function getTeamMembers() {
        $sql = "SELECT * FROM teammembers";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
}

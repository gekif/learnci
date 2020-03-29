<?php

class Usermodel extends CI_Model
{
    public function getUsers()
    {
        $this->load->database();

        $query = $this->db->query("SELECT * FROM user_accounts");

        return $query->result_array();
    }
}
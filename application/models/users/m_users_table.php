<?php

class M_users_table extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAllUsers()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function addUser($data)
    {

        $this->db->insert('users', $data);
    }
}

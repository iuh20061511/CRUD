<?php

class M_users_table extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getUser()
    {
        $users = $this->db->get('users');
    }

    public function addUser($data)
    {

        $this->db->insert('users', $data);
    }
}

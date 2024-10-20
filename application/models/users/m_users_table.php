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

    public function getUserById($id)
    {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }

    public function addUser($data)
    {
        $this->db->insert('users', $data);
    }


    public function updateUser($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function delete($id)
    {
        $this->db->delete('users', array('id' => $id));
    }
}

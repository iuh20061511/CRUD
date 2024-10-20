<?php

class M_users_table extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
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

    public function deleteUser($id)
    {
        $this->db->delete('users', array('id' => $id));
    }

    public function login($username, $password)
    {
        $password = md5($password);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return $query->row();
        }
        return false;
    }
}

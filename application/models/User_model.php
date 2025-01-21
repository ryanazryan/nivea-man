<?php

class User_model extends CI_Model 
{
    public function register($manusia){

        $data = array(
        'nama_user' => $this->input->post('nama_user'),
        'username' => $this->input->post('username'),
        'password' => $manusia,
        );
        
        $this->db->insert('user', $data);
    }

    // Validasi ke Database
    public function login($username, $password){
        
        // SELECT * FROM user WHERE username = $username AND password = $password
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $sql = $this->db->get('user');

        if ($sql->num_rows() == 1) {
            return $sql->row()->id_user;
        } else {
            return false;
        }
    }
}
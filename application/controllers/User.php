<?php

class User extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('user_model');
        $this->load->helper('url', 'form');
        $this->load->library(array('form_validation', 'session'));
    }
    // function buat daftar 
    public function daftar(){
        $data['title'] = 'Daftar';

        // untuk menentukan aturan (rules)
        $this->form_validation->set_rules('nama_user', ' Nama Lengkap', 'required');
        $this->form_validation->set_rules('username', ' Username', 'required|callback_check_username', 
                                            [ 'check_username' => 'Username Sudah Terdaftar', 
                                            'required' => 'Username Wajib diisi' 
                                            ]);
        $this->form_validation->set_rules('password', ' Password', 'required|min_length[6]|max_length[30]');

        // logika jika gagal mendaftar
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {

            // logika jika berhasl mendaftar
            $kiyan = md5($this->input->post('password'));
            
            $this->user_model->register($kiyan);

            $this->session->set_flashdata('register_success', 'Selamat anda sudah terdaftar');

            redirect('user/login');
        }
    }

    public function check_username($username){
        $user = $this->db->get_where('user', array('username' => $username));

        if (empty($user->row_array())) {
            return true;
        } else {
            return false;
        }
    }

    public function login(){

        // Validasi 2 data (Username & Password)
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // Jika validasi salah/error
        if ($this->form_validation->run() === false){
            $this->load->view('login');
        } else {

            // Get Username & Password
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $data =$this->user_model->login($username, $password);

            // Membyat Session Baru
            if ($data) {
                $manusia = array(
                    'id_user' => $data,
                    'username' => $username,
                    'logged_in' => true
                );

                $this->session->set_userdata($manusia);
                $this->session->set_flashdata('berhasil_login', 'Anda Berhasil Login');
                redirect('home/kedua');
            } else {
                $this->session->set_flashdata('gagal_login', 'Username dan Password Anda Salah');
                redirect('user/login');
            }
        }
    }

    public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');

        // Menampilkan Pesan Berhasil logout
        $this->session->set_flashdata('user_logout', 'Anda Berhasil Logout');

        redirect('user/login');
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nivea extends CI_Controller
{
    public function index(){

        $data = [
            'title' => 'SELAMAT DATANG'
        ];
        
        $this->load->view('pertama',$data);
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index(){

        $data = [
            'title' => 'NIVEA MEN DEEP BRIGHT OIL CLEAR MUD FOAM'
        ];
        
        $this->load->view('nivea',$data);
    }

    public function kedua(){

        $data = [
            'title' => 'NIVEA MEN DEEP BRIGHT OIL CLEAR MUD FOAM'
        ];
        
        $this->load->view('niveaa',$data);
    }
}
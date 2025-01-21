<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barang_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["barang"] = $this->barang_model->getAll();
        $this->load->view('barang/tampil_barang', $data);
    }

    public function simpan()
    {
        $barang = $this->barang_model; // menentukan objek model
        $validasi = $this->form_validation; // menentukan objek validasi form
        $validasi->set_rules($barang->rules()); // menentukan posisi function rules pada model

        if ($validasi->run()) { // menjalankan validasi form
            $insert = $barang->save(); // menyimpan data form ke db

            if ($insert) {
                echo '<script>alert("Data Berhasil Di Simpan");window.location.href = "' . site_url("barang") . '";</script>';
            } else {
                echo '<script>alert("Data Gagal Disimpan");window.location.href = "' . site_url("barang/simpan") . '";</script>';
            }
        }
        $this->load->view("barang/tambah_barang"); // menampilkan halaman tambah barang
    }

    public function ubah($id_barang = null) // menentukan parameter id_barang menjadi null / kosong
    {
        if (!isset($id_barang)) 
        redirect('barang'); //logika jika id_barang yang dipanggil masih belum ada / kosong

        $barang = $this->barang_model; // menentukan objek model
        $validasi = $this->form_validation; // menentukan objek validasi form
        $validasi->set_rules($barang->rules()); // menentukan rules yang ada pada model 

        if ($validasi->run()) { // menjalankan validasi form
            $update = $barang->update(); // menyimpan data form update ke db
            if ($update) {
                echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("barang") . '";</script>';
            } else {
                echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("barang/ubah") . '";</script>';
            }

        }
        $data["barang"] = $barang->getID($id_barang); //memanggil data berdasarkan id_barang yang dipilih
        if (!$data["barang"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
        $this->load->view("barang/ubah_barang", $data); // memanggil data barang ke halaman ubah barang berdasarkan id_barang
    }

    public function hapus($id_barang = null) // menentukan parameter id_barang menjadi null / kosong
    {
        $barang = $this->barang_model; // menentukan objek model

        if (!isset($id_barang)) show_404(); // logika menampilkan halaman error jika id_barang null / kosong

        if ($barang->delete($id_barang)) { // menghapus data berdasarkan id_barang di db
            redirect('barang'); //menampilkan halaman barang

        }
    }
}
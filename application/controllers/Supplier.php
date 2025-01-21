<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
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
        $this->load->model("supplier_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["supplier"] = $this->supplier_model->getAll();
        $this->load->view('supplier/tampil_supplier', $data);
    }


    public function simpan()
    {
        $supplier = $this->supplier_model; // menentukan objek model
        $validasi = $this->form_validation; // menentukan objek validasi form
        $validasi->set_rules($supplier->rules()); // menentukan posisi function rules pada model

        if ($validasi->run()) { // menjalankan validasi form
            $insert = $supplier->save(); // menyimpan data form ke db

            if ($insert) {
                echo '<script>alert("Data Berhasil Di Simpan");window.location.href = "' . site_url("supplier") . '";</script>';
            } else {
                echo '<script>alert("Data Gagal Disimpan");window.location.href = "' . site_url("supplier/simpan") . '";</script>';
            }
        }

        $data["list"] = $this->supplier_model->getList();
        $this->load->view("supplier/tambah_supplier", $data); // menampilkan halaman tambah supplier
    }

    public function ubah($id_supplier = null) // menentukan parameter id_supplier menjadi null / kosong
    {
        if (!isset($id_supplier))
            redirect('supplier'); //logika jika id_supplier yang dipanggil masih belum ada / kosong

        $supplier = $this->supplier_model; // menentukan objek model
        $validasi = $this->form_validation; // menentukan objek validasi form
        $validasi->set_rules($supplier->rules()); // menentukan rules yang ada pada model 

        if ($validasi->run()) { // menjalankan validasi form
            $update = $supplier->update(); // menyimpan data form ke db

            if ($update) {
                echo '<script>alert("Data Berhasil Di Ubah");window.location.href = "' . site_url("supplier") . '";</script>';
            } else {
                echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("supplier/ubah") . '";</script>';
            }// menampilkan pesan data berhasil di ubah 
        }
        $data["list"] = $this->supplier_model->getList();
        $data["supplier"] = $supplier->getID($id_supplier); //memanggil data berdasarkan id_supplier yang dipilih
        if (!$data["supplier"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
        $this->load->view("supplier/ubah_supplier", $data); // memanggil data supplier ke halaman ubah supplier berdasarkan id_supplier
    }

    public function hapus($id_supplier = null) // menentukan parameter id_supplier menjadi null / kosong
    {
        $supplier = $this->supplier_model; // menentukan objek model

        if (!isset($id_supplier)) show_404(); // logika menampilkan halaman error jika id_supplier null / kosong

        if ($supplier->delete($id_supplier)) { // menghapus data berdasarkan id_supplier di db
            redirect('supplier'); //menampilkan halaman supplier

        }
    }
}
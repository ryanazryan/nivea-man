<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $_table = "barang";

    public $id_barang;
    public $nama_barang;
    public $jenis_barang;
    public $stok;
    public $harga;

    public function rules()
    {
        return [
            [
                "field" => "nama_barang",
                "label" => "Nama Barang",
                "rules" => "required"
            ],
            [
                "field" => "jenis_barang",
                "label" => "Jenis barang ",
                "rules" => "required"
            ],
            [
                "field" => "stok",
                "label" => "Stok",
                "rules" => "numeric"
            ],
            [
                "field" => "harga",
                "label" => "harga",
                "rules" => "required"
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getID($id_barang)
    {
        return $this->db->get_where($this->_table, ["id_barang" => $id_barang])->row();
    }

    public function save()
    {
        $this->nama_barang = $this->input->post("nama_barang");
        $this->jenis_barang = $this->input->post("jenis_barang");
        $this->stok = $this->input->post("stok");
        $this->harga = $this->input->post("harga");
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_barang = $post["id_barang"];
        $this->nama_barang = $post["nama_barang"];
        $this->jenis_barang = $post["jenis_barang"];
        $this->stok = $post["stok"];
        $this->harga = $post["harga"];
        return $this->db->update($this->_table, $this, array('id_barang' => $post["id_barang"]));
    }

    public function delete($id_barang)
    {
        return $this->db->delete($this->_table, array('id_barang' => $id_barang));
    }
}
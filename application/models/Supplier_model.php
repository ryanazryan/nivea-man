<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_model extends CI_Model
{
    private $_table = "supplier";
    private $_list = "barang";

    public $id_supplier;
    public $id_barang;
    public $jumlah;

    public function rules()
    {
        return [
            [
                "field" => "id_barang",
                "label" => "ID Barang",
                "rules" => "required"
            ],
            [
                "field" => "jumlah",
                "label" => "Jumlah ",
                "rules" => "numeric"
            ]
        ];
    }

    public function getAll()
    {
        $this->db->join('barang', 'barang.id_barang = supplier.id_barang');
        return $this->db->get($this->_table)->result();
    }
    public function getList()
    {
        return $this->db->get($this->_list)->result();
    }

    public function getID($id_supplier)
    {
        $this->db->join('barang', 'barang.id_barang = supplier.id_barang');
        return $this->db->get_where($this->_table, ["id_supplier" => $id_supplier])->row();
    }

    public function save()
    {
        $this->id_barang = $this->input->post("id_barang");
        $this->jumlah = $this->input->post("jumlah");
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_supplier = $post["id_supplier"];
        $this->id_barang = $post["id_barang"];
        $this->jumlah = $post["jumlah"];
        return $this->db->update($this->_table, $this, array('id_supplier' => $post["id_supplier"]));
    }

    public function delete($id_supplier)
    {
        return $this->db->delete($this->_table, array('id_supplier' => $id_supplier));
    }
}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tes_model extends CI_Model
{
    private $_table = "tes";

    public $id;
    public $nama;
    public $notelp;
    public $alamat;
 

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = "";
        $this->nama = $post["nama"];
        $this->notelp = $post["notelp"];
        $this->alamat = $post["alamat"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->notelp = $post["notelp"];
        $this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Tes_model");
    }
  
	public function index()
    {
        $this->load->view("login");
    }
	public function dashboard()
    {
        $data["tes"] = $this->Tes_model->getAll();
        $this->load->view("tes/index", $data);
    }
    public function add()
    {
        $this->Tes_model->save();

        redirect(site_url('tes/index'));
    }
    public function tambah()
    {
        $this->load->view('tes/tambah');
    }
    public function edit($id = null)
    {
        $data["tes"] = $this->Tes_model->getById($id);
        $this->load->view("tes/edit", $data);
	}
	public function update(){
		$this->Tes_model->update();

            redirect(site_url('tes/index'));

    }
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Tes_model->delete($id)) {
            redirect(site_url('tes/index'));
        }
    }
}
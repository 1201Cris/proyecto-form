<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('usuario_id')){
			$this->session->set_flashdata("OP","PROHIBIDO");
			redirect("auth/login");
		}
	}
	public function index()
	{
		$datos=array();
		$this->load->model("productos_model");
		$this->load->model("usuario_model");
		$datos["total_usuarios"]=$this->usuario_model->contar();
		$datos["total_productos"]=$this->productos_model->contar();
		$this->load->view('principal',$datos);
	}

}

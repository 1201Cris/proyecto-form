<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
		parent::__construct();
		
		$this->load->model("usuario_model");
	}

    public function index()
    {
        redirect("usuarios/listar");
    }

    public function listar(){
		$partes=$this->uri->uri_to_assoc();
		
		$campos_permitidos=array("usuario_id","usuario","apellido","nombre","email","ult_login");
		if(isset($partes["orden"])){
			if(in_array($partes["orden"],$campos_permitidos)){
				$this->usuario_model->set_campo_orden($partes["orden"]);
			}
		}

		$datos=array();
		$datos["usuarios"]=$this->usuario_model->listar();
		$this->load->view("usuarios/usuarios",$datos);
	}
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

    public function index()
    {
        $usuarios=array();
		$this->load->model("roles_model");
		$usuarios["usuarios"]=$this->roles_model->listar();
		$this->load->view('roles/roles',$usuarios);
    }
}

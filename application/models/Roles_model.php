<?php
class Roles_model extends CI_Model {


    public function listar(){
        $this->db->select("usuarios.*,roles.nombre AS rol_nombre");
        $this->db->order_by("apellido");
        $this->db->join("roles","roles.rol_id=usuarios.rol_id");
        return $this->db->get("usuarios")->result_array();
    }
}
<?php
class Usuario_model extends CI_Model {

    var $campo_orden="usuarios.nombre";
    var $campo_sentido="ASC";
    public function set_campo_orden($campo_orden="usuarios.nombre"){
        $this->campo_orden=$campo_orden;
    }
    public function set_campo_sentido($sentido="ASC"){
        $this->sentido=$sentido;
    }

    public function listar(){
        $this->db->select("*");
        $this->db->set("usuario_id");
        $this->db->order_by($this->campo_orden,$this->campo_sentido);
        $query = $this->db->get('usuarios');
        return $query->result_array();
    }

    public function contar(){
        return $this->db->count_all("usuarios");
    } 

}
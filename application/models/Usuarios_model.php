<?php
class Usuarios_model extends CI_Model {

    public function nuevo($email,$usuario,$password,$nombre,$apellido){
        $this->db->set("email",$email);
        $this->db->set("password",$password);
        $this->db->set("nombre",$nombre);
        $this->db->set("apellido",$apellido);
        $this->db->set("usuario",$usuario);
        
        $this->db->insert("usuarios");

        return $this->db->insert_id();
    }

    public function obtener_por_id($id){
        $this->db->select("*");
        $this->db->where("usuario_id",$id);
        $this->db->limit(1);
        return $this->db->get("usuarios")->row_array();       
    }

    public function check_login($usuario,$password){
        $this->db->select("usuario_id");
        $this->db->where("usuario",$usuario);
        $this->db->where("password",$password);
        $this->db->limit(1);
        $tmp=$this->db->get("usuarios")->row_array();
        if($tmp){
            return $tmp["usuario_id"];
        }else{
            return false;
        }       
    }

    public function actualiza_login($usuario_id){
        $this->db->set("ult_login","NOW()",false);
        $this->db->where("usuario_id",$usuario_id);
        $this->db->update("usuarios");       
    }
    public function actualiza_password($usuario_id,$password){
        $this->db->set("password",$password);
        $this->db->where("usuario_id",$usuario_id);
        $this->db->update("usuarios");       
    }
    public function listar(){
        $this->db->select("usuarios.*,roles.nombre AS rol_nombre");
        $this->db->order_by("apellido");
        $this->db->join("roles","roles.rol_id=usuarios.rol_id");
        return $this->db->get("usuarios")->result_array();
    }

  
}
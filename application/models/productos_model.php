<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Productos_model extends CI_Model {
    var $categoria_id=false;
    public function set_categoria($categoria_id=false){
        $this->categoria_id=$categoria_id;
    }
    var $buscar=false;
    public function set_buscar($buscar=false){
        $this->buscar=$buscar;
    }

    var $campo_orden="productos.nombre";
    var $campo_sentido="ASC";
    public function set_campo_orden($campo_orden="productos.nombre"){
        $this->campo_orden=$campo_orden;
    }
    public function set_campo_sentido($sentido="ASC"){
        $this->sentido=$sentido;
    }

    // Insertar un nuevo producto
    public function nuevo($data) {
        $this->db->insert('productos', $data);
        return $this->db->insert_id();
    }
    // Actualizar un producto
    public function actualizar($id,$data) {
        $this->db->where('producto_id', $id);
        $this->db->update('productos', $data);
        return $this->db->affected_rows();
    }
    // Obtener todos los productos
    public function listar() {

        $this->db->select("productos.*, categorias.nombre AS categoria_nombre");
        if($this->categoria_id){
            $this->db->where('productos.categoria_id', $this->categoria_id);
        }
        if($this->buscar){
            $this->db->like('productos.nombre', $this->buscar);
        }

        $this->db->join("categorias","productos.categoria_id=categorias.categoria_id","inner");

        $this->db->order_by($this->campo_orden,$this->campo_sentido);

        $query = $this->db->get('productos');
        return $query->result_array();
    }
    // Obtener un producto por ID
    public function obtener_por_id($id) {
        $query = $this->db->get_where('productos', array('producto_id' => $id));
        return $query->row_array();
    }

    public function contar(){
        return $this->db->count_all("productos");
    }
}

?>

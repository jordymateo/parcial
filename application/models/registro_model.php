<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_model extends CI_Model {

    public function __construct(){
			parent::__construct();
			$this->load->database();
	}		
	 function guardarRegistro($datos)
	{
		$this->db->insert('informacion',$datos);
	}

	function cargarRegistro(){
		$query = $this->db->get('informacion');
		return $query->result();
	}

	function eliminarRegistro($id){

		$this->db->where('id=',$id);
		$this->db->delete('informacion');
	}

}
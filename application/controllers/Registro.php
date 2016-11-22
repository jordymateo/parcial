<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    public function __construct(){
			parent::__construct();
			$this->load->model('registro_model');
	}		
	 function index()
	{
		$data = array();
		$data['datos'] = $this->registro_model->cargarRegistro();
		$this->load->view('registro/index', $data);
	}

	function guardar(){
		if($_POST){
			$this->registro_model->guardarRegistro($_POST);
		}
		redirect(base_url());
	}

	function eliminar(){
		$id = (isset($_GET['id']))?$_GET['id']+0:0;
		$this->registro_model->eliminarRegistro($id);
		redirect(base_url());
	}
}

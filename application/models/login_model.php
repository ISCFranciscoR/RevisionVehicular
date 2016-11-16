<?php
defined('BASEPATH') OR exit('El acceso directo al script no está permitido.');

class Login_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function iniciarSesion($data){

		$this->db->select('usuarioRFC');
		$this->db->where('usuarioRFC = ',$data['RFC']);
		$this->db->where('usuarioPassw = ',$data['passwd']);

		$resultado = $this->db->get('Cat_Usuario')->row_array();

		if($resultado['usuarioRFC']!=null)
			$this->load->view('principal_view');
		else
			$this->load->view('error_view');
	}

}
<?php
defined('BASEPATH') OR exit('No se permite el acceso directo a este script');

class Login_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
		$this->load->view('login_view');
	}
	public function validarAcceso(){
		$data = array(
			'RFC' => $this->input->post('txtRFC'),
			'passwd' => $this->input->post('txtPass'));//Nombre del input que recibió los datos
		$this->login_model->iniciarSesion($data);
	}
}

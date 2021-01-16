<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->base_url = $this->config->item('base_url');
		$this->load->model('Seminario');
		//$this->load->library('session');		
		//$this->load->library('pagination');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function index(){
		$datos['base_url'] = $this->base_url;

		//$datos['contenido'] = $this->load->view('home', $datos, true);
		$datos['categorias'] = $this->Seminario->categorias();

		$this->load->view('vista_principal', $datos);
	}
}

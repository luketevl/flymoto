<?php


class Entidades extends CI_Controller{

	public function index(){
		$e = new Entidade();
 		$this->load->view('cadastros/entidades'); 
	}
	public function custom_form(){
		$_data = $this->input->post();
		$e = new Entidade();
		$e->salvar($_data);
		//-$this->parser->parse('cadastros/entidade',array());
	}

}
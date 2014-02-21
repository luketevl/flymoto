<?php


class Login_Controller extends CI_Controller{

	public function index(){
		//verifica_acesso($this->session->userdata('id_ent'),$this->session->userdata('tipo_ent'), true);
		$e = new Entidade();
 		$this->parser->parse('login',(array)$e->stored); 
	}

	public function custom_form(){
		$_data = $this->input->post();
		$e = new Entidade();
		$temp = $e->verificar_login($_data['cpf_cnpj_ent'], $_data['senha_ent']);
		if(!empty($temp->stored->id_ent)){
			$this->login->criarSessao($e);
		//	$this->parser->parse('index',(array)$e->stored);
		}
		verifica_acesso($temp->stored->id_ent,$e->stored->tipo_ent);
	}
}
<?php


class Login_Controller extends CI_Controller{

	public function index(){
		$e = new Entidade();
 		$this->parser->parse('login',(array)$e->stored); 
	}

	public function custom_form(){
		$_data = $this->input->post();
		$e = new Entidade();
		$temp = $e->verificar_login($_data['cpf_cnpj_ent'], $_data['senha_ent']);
		if(!empty($temp->stored->id_ent)){
			echo "logou";
			$this->login->criarSessao($e);
			$this->parser->parse('index',(array)$e->stored);
		}
		else{
			echo "n logou";
 			$this->parser->parse('login',(array)$e->stored); 
		}

	}
}
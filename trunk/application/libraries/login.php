<?php
class Login{

	function Login(){
		$this->CI =& get_instance();
		$this->session = & $this->CI->session;
	}

	public function is_logado(){
		$id_sessao = $this->session->userdata('cpf_cnpj_ent');
		if(!empty($id_sessao)){
			return true;
		}
		return false;
	}

	public function criarSessao($e){
		$this->session->set_userdata('id_ent',$e->stored->id_ent);
		$this->session->set_userdata('cpf_cnpj_ent',$e->cpf_cnpj_ent);
		$this->session->set_userdata('tipo_ent',$e->tipo_ent);
	}
}
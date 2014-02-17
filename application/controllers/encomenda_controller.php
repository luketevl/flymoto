<?php


class Encomenda_Controller extends CI_Controller{

	public function index(){
		$e = new Entidade();
 		$this->load->view('notificacao_new_encomenda'); 
	}

	public function enviar_proposta(){
		$_data = $this->input->post();
		$e = new Encomenda();
		$encomendas = array();
		$encomendas['encomendas'] = $e->getEncomendas($_data) ;
		//echo $e->getEncomendas($_data);
		echo "<pre>"; echo print_r($encomendas); echo "</pre>";
//		echo "<pre>"; echo print_r($encomendas); echo "</pre>";
		$this->parser->parse('notificacao_new_encomenda',$encomendas);
	}
}
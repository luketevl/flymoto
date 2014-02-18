<?php
class Inicio extends CI_Controller{

	public function index(){
		$e = new Encomenda();
		$encomendas = array();
		$encomendas['encomendas'] = $e->getEncomendas();
 		$this->parser->parse('index',array()); 
 		$this->parser->parse('notificacao_new_encomenda', $encomendas);

 		$this->parser->parse('footer', array());



	}
}
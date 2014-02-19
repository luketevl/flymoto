<?php


class Encomenda_Controller extends CI_Controller{

	public function index(){
		
	 	$e = new Encomenda();
		$encomendas = array();
		$encomendas['encomendas'] = $e->getEncomendas() ;
		$encomendas['id_logado'] = $this->session->userdata('id_ent');
			//echo "<pre>"; echo print_r($encomendas['encomendas']); echo "</pre>";
		foreach ($encomendas['encomendas'] as $key => $value) {
			$json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=". $value->latitude_cli . "," . $value->latitude_cli ."&sensor=false");
			$json = json_decode($json);
			$value->formatted_address = $json->results['0']->formatted_address;
			//echo "<pre>"; echo print_r($value); echo "</pre>";
			//echo $value. $key;
		}
		//echo $e->getEncomendas($_data);
	//	echo "<pre>"; echo print_r($encomendas); echo "</pre>";
//		echo "<pre>"; echo print_r($encomendas); echo "</pre>";
		$this->parser->parse('notificacao_new_encomenda',$encomendas);
	}

	public function enviar_proposta(){
		$_data = $this->input->post();
	}
}
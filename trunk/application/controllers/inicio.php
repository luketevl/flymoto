<?php
class Inicio extends CI_Controller{

	public function index(){
		$e = new Encomenda();
		$encomendas = array();
		$encomendas['encomendas'] = $e->getEncomendas();
 		$this->parser->parse('index',array()); 

	 	$e = new Encomenda();
		$encomendas = array();
		$encomendas['encomendas'] = $e->getEncomendas() ;
		$encomendas['id_logado'] = $this->session->userdata('id_ent');
			//echo "<pre>"; echo print_r($encomendas['encomendas']); echo "</pre>";
		foreach ($encomendas['encomendas'] as $key => $value) {
			$json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=". $value->longitude_enco  . "," . $value->latitude_enco."&sensor=false");
	//	echo "http://maps.google.com/maps/api/geocode/json?address=". $value->latitude_enco . "," . $value->longitude_enco ."&sensor=true";
			$json = json_decode($json);
			//echo "<pre>"; echo print_r($json); echo "</pre>";
			$value->formatted_address = $json->results['0']->formatted_address;

			$endCompletoEncomenda = str_replace(" ", "+", $value->formatted_address);


			$json = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=Magi+Salomon&destinations=".$endCompletoEncomenda."&mode=car&language=pt-BR&sensor=true");
			$json = json_decode($json);
			$value->distancia = $json->rows['0']->elements['0']->distance->text;
			$value->duracao = $json->rows['0']->elements['0']->duration->text;



		}
		//echo $e->getEncomendas($_data);
	//	echo "<pre>"; echo print_r($encomendas); echo "</pre>";
//		echo "<pre>"; echo print_r($encomendas); echo "</pre>";
		$this->parser->parse('notificacao_new_encomenda',$encomendas);

 		$this->parser->parse('footer', array());



	}
}
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
		$opcoes = new Opcoe();
		$vrKm = $opcoes->getVrKm($encomendas['id_logado'])->stored->vr_por_km;
		//echo $vrKm;
		//echo "<pre>"; echo print_r($opcoes->getVrKm($encomendas['id_logado'])); echo "</pre>";
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
			$distancia_quebrada = explode(" ", $value->distancia);

			//echo "<pre>"; echo print_r($distancia_quebrada); echo "</pre>";
			if($distancia_quebrada[1] == 'km'){
				$vr_calc = $vrKm * $distancia_quebrada[0];
			}else{
				$vr_calc = $vrKm ;
			}

			$value->vr_medio = $vr_calc;

			$value->duracao = $json->rows['0']->elements['0']->duration->text;
		}
		//echo $e->getEncomendas($_data);
	//	echo "<pre>"; echo print_r($encomendas); echo "</pre>";
//		echo "<pre>"; echo print_r($encomendas); echo "</pre>";
		$this->parser->parse('notificacao_new_encomenda',$encomendas);

 		$this->parser->parse('footer', array());

	}
}
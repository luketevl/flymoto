<?php


class Contato extends CI_Controller{

	public function index(){
		$c = new Contato();
 		$this->load->view('index'); 
	}
}
<?php


class Index extends CI_Controller{

	public function index(){
		$e = new Entidade();
 		$this->load->view('index'); 
	}
}
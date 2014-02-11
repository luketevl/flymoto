<?php


class Landing_Page extends CI_Controller{

	public function index(){
 		$this->parser->parse('site/landing_page',array()); 
	}

	public function save_news(){
		echo "kkk boa";
		$this->index();
	}
}
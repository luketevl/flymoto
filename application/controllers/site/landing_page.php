<?php


class Landing_Page extends CI_Controller{

	public function index(){
 		$this->parser->parse('site/landing_page',array()); 
	}
}
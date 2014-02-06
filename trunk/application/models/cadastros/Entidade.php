<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entidade extends Base_Model{
	private $entidade;
	/**
	 * Constructor: calls parent constructor
	 */

	function __construct($id = NULL){
		echo $this->entidades."aa";
		parent::Base_Model();
		
		//inserindo referencias a outras tabelas
		$this->has_many 	= array();
		$this->has_one		= array();
		$this->entidade 	= new Entidade();
	}

	function fields(){
		echo "<pre>"; print_r($this->entidade->fields) ; echo "</pre>" ;
		return array_merge($this->entidade->fields,$this->fields);
	}

	function get_all(){
		return $this->entidade->get();
	}
	function save($entidade){
		echo $this->$entidade->save_from_data($entidade);
	}
}





?>
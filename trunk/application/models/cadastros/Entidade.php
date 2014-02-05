<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entidade extends DataMapper{

	/**
	 * Constructor: calls parent constructor
	 */
    function __construct($id = NULL)
	{
		parent::__construct($id);
    }

	function get_all(){
		$e = new Entidade();
		return $e->get();
	}
	function save($entidade){
		$e = new Entidade();
		echo "<pre>"; print_r($e); "</pre>";
		$e['store'] = $entidade;
		$e->save();
	}
}





?>
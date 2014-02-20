<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/**
 * CodeIgniter Inflector Helpers
 *
 * Customised singular and plural helpers.
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team, stensi
 * @link		http://codeigniter.com/user_guide/helpers/directory_helper.html
 */

// --------------------------------------------------------------------

/**
* Singular
*
* Takes a plural word and makes it singular (improved by stensi)
*
* @access	public
* @param	string
* @return	str
*/
if ( ! function_exists('verifica_acesso')){
	
	function verifica_acesso($id , $tipo){
		if(empty($id) || $id == '{id_ent}'){
			$config['url_retorno'] = 'login';
			 redirect("login_controller");
		}
		else{
			 redirect("inicio","refresh");
			}
			if($tipo == 'M'){
				
			}

			if($tipo == 'C'){

			}

		return true;
	}
}

/* End of file inflector_helper.php */
/* Location: ./application/helpers/inflector_helper.php */
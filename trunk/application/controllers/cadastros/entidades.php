<?php


class Entidades extends CI_Controller{

	public function index(){
		$e = new Entidade();
		$end = new Enderecos_Temp();
		$vei = new Veiculos_Temp();

		$retorno = array_merge((array)$e->stored, (array)$end->stored,(array)$vei->stored);
		$retorno['descricao_cont_tel']='';
		$retorno['descricao_cont_cel']='';
 		$this->parser->parse('cadastros/entidades',$retorno); 
	}
	public function custom_form(){
		$_data = $this->input->post();
		$e = new Entidade();
		$end = new Enderecos_Temp();
		$vei = new Veiculos_Temp();
		
		echo "<pre>"; print_r($this->upload->data()); "</pre>";
		if($e->salvar($_data)){
			$_data['id_ent']        = $e->id;
			$this->do_upload($_data['id_ent']);
			$end->salvar($_data);
			$vei->salvar($_data);
		}
		
		//-$this->parser->parse('cadastros/entidade',array());
	}

	function do_upload($id){
		$config['upload_path'] = './././resources/img/'.$id;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

			echo "<pre>"; print_r($_DATA); echo "</pre>";
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());

			echo "<pre>"; print_r($error); echo "</pre>";
			//$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//$this->load->view('upload_success', $data);
		}
	}

}
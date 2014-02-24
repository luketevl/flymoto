<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Title pagina</title>
	<?php
		$this->load->view('includes/css');
		$this->load->view('includes/js');
	?>
</head>

<body>
<section class="em-linha">
	<section id="login">
	
	<h1>ENTRAR</h1>
		<?php
			echo form_open_multipart('login_controller/custom_form','name="form"');
			echo form_fieldset('Login');

			echo form_label('CPF/CNPJ');
			echo form_input('cpf_cnpj_ent');
			
			
			echo form_label('Senha');
			echo form_password('senha_ent');
			
			
			echo form_fieldset_close();
			echo form_submit('submit','Logar');

			echo form_close();
		?>

	</section>
		<?php
		 $this->load->view('cadastros/entidades');
		?>
</section>
</body>
</html>
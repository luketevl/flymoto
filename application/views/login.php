<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Title pagina</title>

	<style type="text/css">
	</style>
<!--	<script type="text/javascript" src="<?php echo base_url()?>resources/js/location.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="<?php echo base_url()?>resources/js/mapa.js"></script> -->
</head>
<body>
<?php
	echo form_open_multipart('login_controller/custom_form','name="form"');
	echo form_fieldset('Login');

	echo form_label('CPF/CNPJ');
	echo form_input('cpf_cnpj_ent','{cpf_cnpj_ent}');
	echo "<br />";
	
	echo form_label('Senha');
	echo form_password('senha_ent','{senha_ent}');
	echo "<br />";
	
	echo form_fieldset_close();
	echo form_submit('submit','Logar');

	echo form_close();
?>



</body>
</html>
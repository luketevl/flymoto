<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Title pagina</title>

	<style type="text/css">
	</style>
</head>
<body>
<?php
	echo form_open('cadastros/entidades/custom_form','name="form"');
	echo form_fieldset('Dados pessoais');

	echo form_label('Nome Completo');
	echo form_input('nome_ent');
	echo form_label('CPF/CNPJ');
	echo form_input('cpf_cnpj_ent');
	echo form_label('CEP');
	echo form_input('');
	echo form_label('Rua');
	echo form_input('');
	echo form_label('Número');
	echo form_input('');
	echo form_label('Complemento');
	echo form_input('');
	echo form_label('Bairro');
	echo form_input('');
	echo form_label('Telefone');
	echo form_input('');
	echo form_label('Celular');
	echo form_input('');
	echo form_fieldset_close();
	echo form_submit('submit','Salvar');
	echo form_close();
?>
</body>
</html>
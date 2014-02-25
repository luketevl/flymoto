<h1>OPÇÕES</h1>
<?php
	echo form_open('opcoes/custom_form','name="formOpcoes"');
	echo form_hidden('id_opc','{id_opc}');
	echo form_label('VR por KM');
	echo form_input('vr_por_km','{vr_por_km}');
	echo form_submit('enviar','Salvar');
	echo form_close();
?>
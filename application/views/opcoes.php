<h2>Opções</h2>
<?php
	echo form_open('opcoes/custom_form','name="formOpcoes"');
	echo form_hidden('id_opc','{id_opc}');
	echo form_label('VR por KM');
	echo form_input('vr_por_km','{vr_por_km}');
	echo form_submit('enviar','Salvar','class="btn btn-default"');
	echo form_close();
?>
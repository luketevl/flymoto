 <script type="text/javascript" src="<?php echo base_url()?>resources/js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var tempo = window.setInterval(carrega, 9000);
		var valor_txt;
		function carrega(){
			alert("doido");
			$('#new_encomenda').load("encomenda_controller");
		}
		$('input[name="vr_proposta"]').focusin(function(){
			window.clearInterval(tempo);
		});
		$('input[name="vr_proposta"]').focusout(function(){
			//tempo = window.setInterval(carrega, 1000);
		});	
	});
</script>
<section id="new_encomenda">
	{encomendas}
	<?php 
		echo form_open('encomenda_controller/enviar_proposta');
		echo form_hidden('id_ent','{id_ent}');
	?>
	<h2>
		Nova Encomenda 
	</h2>

	<p>
		Feita por: <a href="#">{nome_ent}</a>
			<summary>
				<p>
					Telefone: {descricao_cont}
					CPF/CNPJ: {cpf_cnpj_ent}
				</p>
			</summary>
		Destino: Rua xxxx, 482 - BAIRRO - BH/MG
		Proposta: 
		<?php
			echo form_input('vr_proposta','0.00');
			echo form_submit('enviar','Enviar Proposta');
		?>
	</p>
	<?php
		echo form_close();
	?>
	{/encomendas}
</section>
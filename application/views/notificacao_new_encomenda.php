 <script type="text/javascript" src="<?php echo base_url()?>resources/js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		//var tempo = window.setInterval(carrega, 10000);
		var valor_txt;
		function carrega(){
			if($('input[name="vr_proposta"]') != 'undefined'){
				$('input[name="vr_proposta"]').each(function(){
					if($(this).val() != '0.00' && $(this).val() != '0,00'){
						return false;
					}
					else {
						$('#new_encomenda').load("encomenda_controller");
					}
				});

			}
		}
	});
</script>
<section id="notification_encomenda">
		
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
				<detais>
					<p>
						Telefone: {descricao_cont}
						CPF/CNPJ: {cpf_cnpj_ent}
					</p>
				</detais>
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
</section>
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
$.getJSON("http://maps.google.com/maps/api/geocode/json?address="+position.coords.latitude +","+position.coords.longitude+"&sensor=false",function(result){
                 $("#str-endereco").html("Seu endereço é: " +result.results[0].formatted_address);
            });
	
	});
</script>
<section id="notification_encomenda">
		
	<section id="new_encomenda">
		{encomendas}
		<?php 
			echo form_open('encomenda_controller/enviar_proposta','name="formEncomenda" class="bs-callout bs-callout-warning"');
			echo form_hidden('id_enc','{id_enc}');
			echo form_hidden('id_ent','{id_ent}');
			echo form_hidden('longitude_cli','{longitude_cli}');
            echo form_hidden('latitude_cli','{latitude_cli}');
            echo form_hidden('longitude_enco','{longitude_enco}');
            echo form_hidden('latitude_enco','{latitude_enco}');
            echo form_hidden('id_ent_motoboy','{id_logado}');
		?>
		<h2>
			Nova Encomenda 
		</h2>

		<p>
		 <div class="dropdown">
			Feita por: <a data-toggle="dropdown" href="#">{nome_ent} +</a>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				<detais>
					<p>
						Telefone: {descricao_cont}
					</p>
					<p>
						CPF/CNPJ: {cpf_cnpj_ent}
					</p>
				</detais>
		  </ul>
		</div>
			Destino: {formatted_address}
			Distancia: {distancia}
			Duracao: {duracao}
			<br />
			Proposta: 
			<?php
				echo form_input('vr_proposta','{vr_medio}');
				//echo form_submit('enviar','Enviar Proposta');
			?>
			<button type="button" name="enviarProposta" id="enviarProposta" class="btn btn-default" >
				<span class="glyphicon glyphicon-usd"></span> Enviar Proposta
			</button>
		</p>
		<?php
			echo form_close();
		?>
		{/encomendas}
	</section>
</section>
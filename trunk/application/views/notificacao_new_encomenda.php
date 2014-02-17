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
					Telefone: xxxxx
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
<section id="localizacao_atual">
	<div style="display:none;">
		<p><span id="str-endereco"><span></p>
	</div>
	<input type="button" name="btn_corrigir" value="Corrigir Minha Localização" style="margin-top:5px; margin-bottom:9px;" />
	    <article>
	        <fieldset>
                    <div class="campos">
                        <label for="txtEndereco">Endereço:</label>
                        <?php
                            echo form_input('txtEndereco','',"id='txtEndereco'");
                        ?>
                        <input type="button" id="btnEndereco" name="btnEndereco" value="Mostrar no mapa" />
                    </div>
                  <!--  <input type="hidden" id="txtLatitude" name="txtLatitude" />
                    <input type="hidden" id="txtLongitude" name="txtLongitude" />
-->
                </fieldset>
                  <div id="mapa" style="height: 500px; width: 700px">
		    <?php
			    //echo form_hidden('longitude_cli');
	            //echo form_hidden('latitude_cli');
            ?>
	    </article>
	 </section>
	 <script>
	 $(document).ready(function(){
 	 	$('input[name="btn_corrigir"]').click(function(){
 	 		$('#localizacao_atual > div').toggle();
 	 	}); 	



	 });

	 </script>
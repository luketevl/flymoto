<section id="localizacao_atual">
<h2>
	Localização atual
</h2>
	<?php
		echo form_hidden('hd_latitude_atual');
		echo form_hidden('hd_longitude_atual');
	?>
	<p class="bs-callout bs-callout-info"><span id="str-endereco"><span></p>
	<!-- <input type="button" name="btn_corrigir" value="Minha Localização" style="margin-top:5px; margin-bottom:9px;" /> -->
	<button type="button" name="btn_modificar" style="margin-top:5px; margin-bottom:9px;" id="esconde" class="btn btn-default" >
	    <span class="glyphicon glyphicon-refresh"></span> Corrigir Localização
	</button>
	    <article>
	        <fieldset>
                    <div class="campos">
                        <label for="txtEndereco">Endereço:</label>
                        <?php
                            echo form_input('txtEndereco','',"id='txtEndereco'");
                        ?>
                        <button type="button" id="btnEndereco" name="btnEndereco" class="btn btn-default" >
						    <span class="glyphicon glyphicon-flag"></span> Mostrar no Mapa
						
						</button>

                    </div>
                  <!--  <input type="hidden" id="txtLatitude" name="txtLatitude" />
                    <input type="hidden" id="txtLongitude" name="txtLongitude" />
			--> <hr class ="linha" />
                </fieldset>
                  <div id="mapa" style="height: 500px; width: initial" >
		    <?php
			    //echo form_hidden('longitude_cli');
	            //echo form_hidden('latitude_cli');
            ?>
	    </article>
	 </section>

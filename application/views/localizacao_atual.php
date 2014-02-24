<section id="localizacao_atual">
	<?php
		echo form_hidden('hd_latitude_atual');
		echo form_hidden('hd_longitude_atual');
	?>
	<p><span id="str-endereco"><span></p>
	<input type="button" name="btn_corrigir" value="Minha Localização" style="margin-top:5px; margin-bottom:9px;" />
	<input type="button" name="btn_modificar" value="Corrigir Localização" style="margin-top:5px; margin-bottom:9px;" id="esconde" />
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
			--> <hr class ="linha" />
                </fieldset>
                  <div id="mapa" style="height: 500px; width: initial" >
		    <?php
			    //echo form_hidden('longitude_cli');
	            //echo form_hidden('latitude_cli');
            ?>
	    </article>
	 </section>
	 <script>
	 $(document).ready(function(){

	 });

	 </script>
<script>
    $(document).ready(function(){
       
});
</script>

<h1>SOLICITAR MOTOBOY</h1>

       <!-- <div id="apresentacao"> -->
        <?php
            echo form_open('solicitar_motoboy/custom_save','name="formSolicitar"');
            echo form_fieldset('Solicitar');
            echo form_hidden('longitude_cli');
            echo form_hidden('latitude_cli');
            echo form_hidden('id_ent_motoboy','');
            echo form_hidden('id_ent','{id_logado}');
        ?>
               <!--
                <fieldset>

            
                    <div class="campos">
                        <label for="txtEndereco">Endereço:</label>
                        <?php
                            echo form_input('txtEndereco','',"id='txtEndereco'");
                        ?>
                        <input type="button" id="btnEndereco" name="btnEndereco" value="Mostrar no mapa" />
                    </div> -->
                        <?php
                            echo form_submit('btnEnviar','Enviar');
                        ?>    

                    <input type="hidden" id="txtLatitude" name="txtLatitude" />
                    <input type="hidden" id="txtLongitude" name="txtLongitude" />
<!--
                </fieldset>
            <div id="mapa" style="height: 500px; width: 700px">
-->
            <?php

            echo form_fieldset_close();
            echo form_close();
        ?>
   <!--         </div>
-->
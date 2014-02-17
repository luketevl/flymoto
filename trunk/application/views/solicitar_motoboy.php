<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Solicitar motoboy</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/css/estilo.css">
        <script type="text/javascript" src="<?php echo base_url()?>resources/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>resources/js/location_atual.js"></script>
    </head>
 
    <body>
        <div id="mapa" style="height: 500px; width: 700px">
        </div>
        
       
       <script type="text/javascript" src="<?php echo base_url()?>resources/js/jquery-ui.custom.min.js"></script>
 
        <!-- Maps API Javascript -->
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        
        <!-- Caixa de informação -->
        <script type="text/javascript" src="<?php echo base_url()?>resources/js/infobox.js"></script>
        
        <!-- Agrupamento dos marcadores -->
       <script type="text/javascript" src="<?php echo base_url()?>resources/js/markerclusterer.js"></script>
 
        <!-- Arquivo de inicialização do mapa 

        <script type="text/javascript" src="<?php echo base_url()?>resources/js/mapa.js"></script>
        -->
        <script type="text/javascript" src="<?php echo base_url()?>resources/js/mapa_search.js"></script>

       

        <div id="apresentacao">
        <?php
            echo form_open('solicitar_motoboy/custom_save');
            echo form_fieldset('Solicitar');
            echo form_hidden('longitude_cli');
            echo form_hidden('latitude_cli');
            echo form_hidden('id_ent_motoboy','');
            echo form_hidden('id_ent','{id_logado}');
        ?>
                <fieldset>

            
                    <div class="campos">
                        <label for="txtEndereco">Endereço:</label>
                        <?php
                            echo form_input('txtEndereco','',"id='txtEndereco'");
                        ?>
                        <input type="button" id="btnEndereco" name="btnEndereco" value="Mostrar no mapa" />
                    </div>
                        <?php
                            echo form_submit('btnEnviar','Enviar');
                        ?>                    
                    <input type="hidden" id="txtLatitude" name="txtLatitude" />
                    <input type="hidden" id="txtLongitude" name="txtLongitude" />

                </fieldset>


            <?php

            echo form_fieldset_close();
            echo form_close();
        ?>
            </div>


    </body>
</html>
$(document).ready(function(){
	$('#menu a').click(function(){
		if($(this).attr('id') == 'inicio'){
			location.reload();	
		}
		var valor = $(this).find('input[name="url"]').val();
		if(valor != 'undefined'){
			$('#sessao-json > #troca').load(valor);
			if(valor=='solicitar_motoboy'){
				$('#esconde').hide();
			}
			else{
				$('#mapa').hide();
			}
		}
	});

	$('#esconde').click(function(){
		lat = $('input[name="hd_latitude_atual"]').val();
		log = $('input[name="hd_longitude_atual"]').val();
		if( lat =! '' && log =! ''){
			$('#latitude_cli_entra').val(lat);
			$('#longitude_cli_entra').val(log);

		}
	});

	 $('input[name="btnEnviar"]').click(function(){
        alert();
            console.log($('form[name="formSolicitar"] > input[name="latitude_cli"]').val());
            $('form[name="formSolicitar"] > input[name="latitude_cli"]').val($('input[name="latitude_cli_entra"]').val());
            $('form[name="formSolicitar"] > input[name="longitude_cli"]').val($('input[name="longitude_cli_entra"]').val());
            
        });
//or for specific element
/* progressJs().set(80);
progressJs("#centro").start();
*/

});
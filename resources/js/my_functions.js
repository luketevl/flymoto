$(document).ready(function(){
	$('#menu a').click(function(){
		$('#mapa').hide();
		if($(this).attr('id') == 'inicio'){
			location.reload();	
		}
		var valor = $(this).find('input[name="url"]').val();
		if(valor != 'undefined'){
			$('#sessao-json > #troca').load(valor);
		}
	});

//or for specific element
/* progressJs().set(80);
progressJs("#centro").start();
*/

});
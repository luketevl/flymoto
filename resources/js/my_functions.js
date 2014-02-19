$(document).ready(function(){
	$('#menu a').click(function(){
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
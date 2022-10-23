$(function(){

	// Lista de docente
	$.post( 'pregunta.php' ).done( function(respuesta)
	{
		$( '#preg' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#preg' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})

$( function() {
  $("ul a").pjax("article", { fragment: "article" });
  $('article').bind('pjax:start', function() {
    $('article').slideUp();
  }).bind('pjax:end', function() {
    $('article').slideDown();
  });
});

$(document).ready( function() {


	// Interceptamos el evento submit
	$('#correos').submit( function() {
	// Enviamos el formulario usando AJAX
	$(this).ajaxStart( function() {
	    //$('#loading').show();
	    $('#result').hide();
	}).ajaxStop( function() {
		//$('#loading').hide();
	    $('#result').fadeIn('slow');
	});

		$('#loading').html("Espere un momento estamos enviando su mensage");
	   	$('.fiel-class').fadeOut('slow');
	    $.ajax({
	        type: 'POST',
	        url: $(this).attr('action'),
	        data: $(this).serialize(),
	        // Mostramos un mensaje con la respuesta de PHP
	        success: function(data) {
	            $('#result').html(data);
	        }
	    })        
	    return false;
	}); 

});
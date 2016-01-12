$("#btn-enviar").on('click',function(event){
	event.preventDefault();
	var noticias=$('#noticias').is('checked')?1:0;
	$.ajax({
		url:'rpc/procesar.php',
		type:'POST',
		//dataType:'defaul: Inteligent Guess(Other Vlues'

		data:{
			nombre: $("#nombre").val(),
			email: $("#email").val(),
			mensaje: $("#mensaje").val(),
			noticias:noticias
		},
	})
	.done(function(){
		console.log("sucess");
		//$('#sucess').html(msg);
	})
	.fail(function(){
		console.log("error");
	//.fail(function(jqXHR,textStatus, errorThrown){
		//console.log("fail: "+textStatus+""+errorThrown);
		//$("#error").html(textStatus)

	})
	.always(function(){
		console.log("complete");

	});
})
		
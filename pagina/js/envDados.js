$(document).ready(function(){
	$('#form').submit(function(){
		var dados = $(this).serialize();

		$.ajax({
			type: "POST",
			url: "php/cad.php",
			data: dados,
			success: function(data)
			{
				console.log(data);

			}
		});

		return false;
	});
});
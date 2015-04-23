$(document).ready(function () {
	$('select').change(function () {
		var url = $(this).val();
		console.log(url);
		window.location = url;
	});


	$('#btn_listar').click(function (e) {
		e.preventDefault();
		var id = $('#idioma').val();
		console.log(id);

		if(id === 'es'){
			window.location = 'home/listares';
		}
		if(id === 'en'){
			window.location = 'home/listaren';
		}
		if(id === 'fr'){
			window.location	= 'home/listarfr';
		}

	});
});

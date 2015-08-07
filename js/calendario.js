function inicializar() {
	var categoria = $(".calendario li a").first().text();
	
	$.post(
		'mostrar_juegos.php',
		{'calendario': '1'},
		function(data) {
			$("#nom-categoria").text(categoria);
			$("#tabla-fechas tbody").html(data);
		}
	);
}

function cambiarCalendario() {
	$(".calendario li a").click(function(e) {
		e.preventDefault();
		var pos = $(this).position();
		var calendario = $(this).data("calendario");
		var categoria = $(this).text();
		
		$(".calendario .indicador").css("top", parseInt(pos.top));
		
		$.post(
			'mostrar_juegos.php',
			{'calendario': calendario},
			function(data) {
				$("#nom-categoria").text(categoria);
				$("#tabla-fechas tbody").html(data);
			}
		);
	});
}

$(function() {
	inicializar();
	cambiarCalendario();
});
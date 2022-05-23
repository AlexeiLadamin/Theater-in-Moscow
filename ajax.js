$(document).ready(function() {
	$('form').on('submit', function() {
		let name = $("#name").val()
		let phone = $("#phone").val()
		let data = {
			'name': name,
			'phone': phone
		};
		$.get("action.php", data, function(d) {
			$("#result").html(d);
		});
		alert('Форма отправлена');
		return false;
	});
});

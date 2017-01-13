$(document).ready(function() {

		$.ajax({
			url: 'Chat.php',
			success: function(data) {
				$('#messages').html(data);
			}
		});
});
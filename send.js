$('#form_input').submit(function() {
	var message = $('#message').val();
	var accepter = $('#accepter').val();
	
	$.ajax({
		url: 'Send.php',
		data: { accepter: accepter, message: message }, 
		success: function(data) {
				
			$('#message').val('');
			$('#accepter').val('');
			
		}
	});
	
	return false;
});
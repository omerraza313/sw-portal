function submsg(){

	var sender_msg = $("#chat-message").val();
	if (sender_msg != "") {
	var msg = '<div class="chat-message-right mb-4">'+
								'<div>'+
									'<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">'+
									'<div class="text-muted small text-nowrap mt-2">2:43 am</div>'+
								'</div>'+
								'<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">'+
									'<div class="font-weight-bold mb-1">You</div>'
									+ sender_msg +
								'</div>'+
							'</div>';

	$('.chat-messages').append(msg);
	$("#chat-message").val('');
	}
} 
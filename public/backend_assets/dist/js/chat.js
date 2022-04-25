$("#sendmsg").click(function(){

	var sender_msg = $("#chat-message").val();
	if (sender_msg != "") {
 	
		$.ajax({

			url: '/member/chat/message',
			method: 'POST',
			data: {

				'_token': $('meta[name="csrf-token"]').attr('content'),
				'message':sender_msg,


			},

			success: function(data){
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
			},

			error: function(data){

				alert("failed");
			}

		});
	
	}
});


function chatList(){
	$.ajax({

		url:'/member/chat/list',
		method: 'GET',
		data: {

			'_token': $('meta[name="csrf-token"]').attr('content'),
		},
		dataType : "json",    	

		success: function(data){

			console.log(data);

		},

		error: function(data){

			console.log("failed");
		}

	});
}

setInterval(chatList, 5000);


function getChatMessages(){
	$.ajax({

		url:'/member/chat/get-messages',
		method: 'POST',
		data: {

			'_token': $('meta[name="csrf-token"]').attr('content'),
		},

		success: function(data){



		}

	});
};



$(".recieverUser").click(function(){

	var recieverName = $(".recieverUser").text();
	$('#recieverUserName').text(recieverName);


});




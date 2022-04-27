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

// setInterval(chatList, 5000);


function chatUserFun(data){

	$(".chat-messages").empty();
	$(".recieverUserName").empty();
	$("#recieverUserName").removeAttr('data-chat-id');

	var UserName = $(data).attr('data-name');	
	var chatId = $(data).attr('data-chat-id');
	$("#recieverUserName").attr('data-chat-id', chatId);
	$('#recieverUserName').text(UserName);
	var ActiveUserId = $(".active_user_id").val();

	$.ajax({

		url:'/member/chat/get-messages',
		method: 'GET',
		data: {

			
			'chat_id':chatId,
		},

		success: function(data){
			
			 var messages = data.data;
		
			$.each(data, function(index,row){
				
				if (row.user_id == ActiveUserId) {

					var msg = '<div class="chat-message-right mb-4">'+
								'<div>'+
									'<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">'+
									'<div class="text-muted small text-nowrap mt-2">2:43 am</div>'+
								'</div>'+
								'<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">'+
									'<div class="font-weight-bold mb-1">You</div>'
									+ row.message +
								'</div>'+
							'</div>';

				}

				else{

					var msg = '<div class="chat-message-left mb-4">'+
								'<div>'+
									'<img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">'+
									'<div class="text-muted small text-nowrap mt-2">2:43 am</div>'+
								'</div>'+
								'<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">'+
									'<div class="font-weight-bold mb-1">'+UserName+'</div>'
									+ row.message +
								'</div>'+
							'</div>';
				}
				

				$('.chat-messages').append(msg);
				$("#chat-message").val('');

			});
		},

		error: function(data){

			console.log(data);
		}

	});
	
}


function syncChat(){

	var chatId = $("#recieverUserName").attr('data-chat-id');

	if (chatId) {
		
		$.ajax({

			url:'/member/chat/syncMessage',
			method:'GET',
			data: {

				'chat_id':chatId
			},

			success: function(data){
				
				console.log(data.message);
				

			},

			error: function(data){

				console.log("Error");
			}

		});
	}

	else{

		console.log("IF ERROR");
	}
}

setInterval(syncChat, 3000);








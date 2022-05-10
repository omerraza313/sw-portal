$("#sendmsg").click(function(){

	var sender_msg = $("#chat-message").val();
	var chatId = $("#recieverUserName").attr('data-chat-id');
	if (sender_msg != "") {
 	
		$.ajax({

			url: '/member/chat/message',
			method: 'POST',
			data: {

				'_token': $('meta[name="csrf-token"]').attr('content'),
				'message':sender_msg,
				'chat_id': chatId,


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
									'<div class="font-weight-bold mb-1" id="userChatMsg" data-chat-msg-id="'+ row.id +'">'+UserName+'</div>'
									+ row.message +
								'</div>'+
							'</div>';
				}
				

				$('.chat-messages').append(msg);

					     
					
				

			});

			$('.chat-messages').scrollTop($('.chat-messages').height())

			$("#chat-message").val('');
			
			
		},

		error: function(data){

			console.log(data);
		}

	});
	
}

function beep() {

	var snd = new Audio("data:audio/wav;base64,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qJrx4KOQjahZxWbcZgztj2c49nKmkId44S71j0c8eV9yDK6uPRzx5X18eDvjvQ6yKo9ZSS6l//8elePK/Lf//IInrOF/FvDoADYAGBMGb7FtErm5MXMlmPAJQVgWta7Zx2go+8xJ0UiCb8LHHdftWyLJE0QIAIsI+UbXu67dZMjmgDGCGl1H+vpF4NSDckSIkk7Vd+sxEhBQMRU8j/12UIRhzSaUdQ+rQU5kGeFxm+hb1oh6pWWmv3uvmReDl0UnvtapVaIzo1jZbf/pD6ElLqSX+rUmOQNpJFa/r+sa4e/pBlAABoAAAAA3CUgShLdGIxsY7AUABPRrgCABdDuQ5GC7DqPQCgbbJUAoRSUj+NIEig0YfyWUho1VBBBA//uQZB4ABZx5zfMakeAAAAmwAAAAF5F3P0w9GtAAACfAAAAAwLhMDmAYWMgVEG1U0FIGCBgXBXAtfMH10000EEEEEECUBYln03TTTdNBDZopopYvrTTdNa325mImNg3TTPV9q3pmY0xoO6bv3r00y+IDGid/9aaaZTGMuj9mpu9Mpio1dXrr5HERTZSmqU36A3CumzN/9Robv/Xx4v9ijkSRSNLQhAWumap82WRSBUqXStV/YcS+XVLnSS+WLDroqArFkMEsAS+eWmrUzrO0oEmE40RlMZ5+ODIkAyKAGUwZ3mVKmcamcJnMW26MRPgUw6j+LkhyHGVGYjSUUKNpuJUQoOIAyDvEyG8S5yfK6dhZc0Tx1KI/gviKL6qvvFs1+bWtaz58uUNnryq6kt5RzOCkPWlVqVX2a/EEBUdU1KrXLf40GoiiFXK///qpoiDXrOgqDR38JB0bw7SoL+ZB9o1RCkQjQ2CBYZKd/+VJxZRRZlqSkKiws0WFxUyCwsKiMy7hUVFhIaCrNQsKkTIsLivwKKigsj8XYlwt/WKi2N4d//uQRCSAAjURNIHpMZBGYiaQPSYyAAABLAAAAAAAACWAAAAApUF/Mg+0aohSIRobBAsMlO//Kk4soosy1JSFRYWaLC4qZBYWFRGZdwqKiwkNBVmoWFSJkWFxX4FFRQWR+LsS4W/rFRb/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////VEFHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAU291bmRib3kuZGUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMjAwNGh0dHA6Ly93d3cuc291bmRib3kuZGUAAAAAAAAAACU=");  
	snd.play();

}
				
function syncChat(){
	


	var chatId = $("#recieverUserName").attr('data-chat-id');
	var chatMsgId = $("#userChatMsg").attr('data-chat-msg-id');
	var ActiveUserId = $(".active_user_id").val();
	var UserName = $('#recieverUserName').text();
	var count = 0;

	if (chatId) {
		
		$.ajax({

			url:'/member/chat/syncMessage',
			method:'GET',
			data: {

				'chat_id':chatId
			},

			success: function(data){

				if (data.user_id != ActiveUserId) {

					var msg = '<div class="chat-message-left mb-4">'+
								'<div>'+
									'<img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">'+
									'<div class="text-muted small text-nowrap mt-2">2:43 am</div>'+
								'</div>'+
								'<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">'+
									'<div class="font-weight-bold mb-1" id="userChatMsg" data-chat-msg-id="'+ data.id +'">'+UserName+'</div>'
									+ data.message +
								'</div>'+
							'</div>';


				$('.chat-messages').append(msg);

				beep()
				

				}
				
				
				

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








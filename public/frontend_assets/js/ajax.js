function chatUserFun(data){

	var service_id = $(data).attr('data-service-id');	

	$.ajax({

			url: '/member/favourite',
			method: 'POST',
			data: {

				'_token': $('meta[name="csrf-token"]').attr('content'),
				'service_id':service_id,	

			},

			success: function(response){

				
				if (response.result == 'added') {

					$(data).removeClass("fa-heart-o");
					$(data).addClass("fa-heart");

				}

				else{

					$(data).removeClass("fa-heart");
					$(data).addClass("fa-heart-o");
				}

				
			},

			error: function(data){

				alert("Login First");
			}

		});

}



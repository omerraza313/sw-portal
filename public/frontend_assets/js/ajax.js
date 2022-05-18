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

					$(data).addClass("bg-primary");

				}

				else{

					$(data).removeClass("bg-primary");
				}

				
			},

			error: function(data){

				alert("failed");
			}

		});

}



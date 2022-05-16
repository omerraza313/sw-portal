$('#favourite').click(function(){

	var service_id = $('#favourite').attr('data-service-id');
	alert(service_id);

	$.ajax({

			url: '/favourite',
			method: 'POST',
			data: {

				'_token': $('meta[name="csrf-token"]').attr('content'),
				'service_id':service_id,
				


			},

			success: function(data){
				
				$('#favourite').addClass('bg-primary');
			},

			error: function(data){

				alert("failed");
			}

		});

});

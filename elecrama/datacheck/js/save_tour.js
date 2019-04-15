$(document).ready(function(e) {
	$('.save_tour_error').hide('');
	$("#tourdate").datepicker();
});

function save_tour_video(){
	var flag = 1;
	$('.save_tour_error').hide('');
	
	var tourid = trim($('#tourid').val());
	
	var tourdate = trim($('#tourdate').val());
	if(tourdate == ''){
		$('#tourdate').val('');
		$('#tourdate_error').html('');
		$('#tourdate_error').html('Please Enter The Tour date');
		$('#tourdate_error').show();
		flag = 0;
		return false;
	}
	
	var tourday = trim($('#tourday').val());
	if(tourday == '' || tourday == '-1'){
		$('#tourday').val('');
		$('#tourday_error').html('');
		$('#tourday_error').html('Please Select Day');
		$('#tourday_error').show();
		flag = 0;
		return false;
	}
	
	var tourlatitude = trim($('#tourlatitude').val());
	if(tourlatitude == ''){
		$('#tourlatitude').val('');
		$('#tourlatitude_error').html('');
		$('#tourlatitude_error').html('Please Enter Latitude');
		$('#tourlatitude_error').show();
		flag = 0;
		return false;
	}
	
	var tourlongitude = trim($('#tourlongitude').val());
	if(tourlongitude == ''){
		$('#tourlongitude').val('');
		$('#tourlongitude_error').html('');
		$('#tourlongitude_error').html('Please Enter Longitude');
		$('#tourlongitude_error').show();
		flag = 0;
		return false;
	}
	
	var tourplace = trim($('#tourplace').val());
	if(tourplace == ''){
		$('#tourplace').val('');
		$('#tourplace_error').html('');
		$('#tourplace_error').html('Please Enter Place');
		$('#tourplace_error').show();
		flag = 0;
		return false;
	}
	
	var tourstate = trim($('#tourstate').val());
	if(tourstate == '' || tourstate == '-1'){
		$('#tourstate').val('');
		$('#tourstate_error').html('');
		$('#tourstate_error').html('Please Select State');
		$('#tourstate_error').show();
		flag = 0;
		return false;
	}
	
	var publishstatus = trim($('#publishstatus').val());
	if(publishstatus == '' || publishstatus == '-1'){
		$('#publishstatus').val('');
		$('#publishstatus_error').html('');
		$('#publishstatus_error').html('Please Select Status');
		$('#publishstatus_error').show();
		flag = 0;
		return false;
	}
	
	if(flag == 1){
		$('#submit_error').html('');
		$('#submit_error').html('Please Wait.. ');
		$('#submit_error').show();
		var options ={
				url : PATH_TOUR+"add2db.php",
				type:'POST',
				success: function(result_str){
					var result_str_arr = trim(result_str).split("||");
					if(result_str_arr[1] == "False"){
						$('#submit_error').html('');
						$('#submit_error').html(result_str_arr[0]);
						$('#submit_error').show();
					} else {
						if(tourid == ''){
							location.href= PATH_TOUR+"tour.php#tour";
						}else {
							location.href= PATH_TOUR+"tour.php#tour"+tourid;
						}
					}
         		}
		};
		$("#save_tour_form").ajaxForm(options).submit();
	}
}
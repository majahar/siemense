
function change_review(id,value,di){
	if(id=="" || value==""){
		alert("error");
		return false;
	}
	$.ajax({
		type : 'POST',
		data : 'id='+id +'&value=' +value,
		url  : APP_SITE_PATH+"assign_review.php",
		success: function(response){
			if (response==0)
				alert("Error");
			else {
				location.reload();
			}
		}
	});
}




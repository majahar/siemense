$(document).ready(function() {
    $(".virtual-tour a[rel^='prettyPhoto']").prettyPhoto({
    theme: 'light_square',
    overlay_gallery: false,
    horizontal_padding: 20,
    markup: '<div class="pp_pic_holder">\
        <div class="ppt"></div>\
        <a class="pp_close" href="#">Close</a>\
        <div class="pp_top">\
          <div class="pp_left"></div>\
          <div class="pp_middle"></div>\
          <div class="pp_right"></div>\
        </div>\
        <div class="pp_content_container">\
          <div class="pp_left">\
            <div class="pp_right">\
              <div class="pp_content">\
                <div class="pp_loaderIcon"></div>\
                <div class="pp_fade">\
                  <div id="pp_full_res"></div>\
                  <div class="pp_details">\
                  </div>\
                </div>\
              </div>\
            </div>\
          </div>\
          <div class="clearfix"></div>\
        </div>\
      </div>\
      <div class="pp_overlay"></div>',
    social_tools: '',
  });
  
  $('.drop-menudown').hover(function(){
	  	$('.drop-m').show();
	  
	  },function(){
		 $('.drop-m').hide(); 
	});
  
});  


function submitData(){
	$(".frmErr").html('');

	var name=$("#name").val();
	var email=$("#email").val();
	var mobile=$("#mobile").val();
	var company=$("#company").val();
        var designation=$("#designation").val();
	var city=$("#city").val();
	var business=$("#business").val();
	
	var isMobile=$("#isMobile").val();
	var uId=$("#uId").val();
	
	if(isMobile==''){
		var score=$("#score").val();
		var statement2014=$("#statement2014").val();
		var statement2013=$("#statement2013").val();
		var statement2012=$("#statement2012").val();
	}else{
		var score='';
		var statement2014='';
		var statement2013='';
		var statement2012='';
	}
	var designation=$("#designation").val();
	var IsError=true;
	
	if(name==''){
		$("#errName").html("Please enter your name");
		IsError=false;
	}
	if(email == '' || email.toLowerCase()=='please enter email'){
		$("#errEmail").html("Please enter your email");
		IsError=false;
	}else if(!(email.match(/^[a-zA-Z0-9._]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9]{2,4}[\.]?[a-zA-Z0-9]*$/))){
		$("#errEmail").html("Please enter your valid email");
		IsError=false;
	}
	var testnumber = /^[0-9]+$/;
	if (mobile == "") {
		$("#errMobile").html("Please enter your mobile number");
		IsError=false;
	}
	else if(!(mobile.match(testnumber)) || mobile.length !=10) {
		$("#errMobile").html("Please enter your valid mobile number");
		IsError=false;
	}
	
	if(company==''){
		$("#errCompany").html("Please enter your company name");
		IsError=false;
	}
	if(designation==''){
		$("#errDesignation").html("Please enter your designation");
		IsError=false;
	}
	if(city==''){
		$("#errCity").html("Please enter your city");
		IsError=false;
	}
	if(business==''){
		$("#errBusiness").html("Please enter your current business");
		IsError=false;
	}
	if(designation==''){
		$("#errDesignation").html("Please enter your designation")
		IsError=false;
	}
	if(isMobile==''){
		if(score==''){
			$("#errScore").html("Please select file");
			IsError=false;
		}
		
		/*if(statement2014==''){
			$("#errStatement2014").html("Please select file");
			IsError=false;
		}
		if(statement2013==''){
			$("#errStatement2013").html("Please select file");
			IsError=false;
		}
		if(statement2012==''){
			$("#errStatement2012").html("Please select file");
			IsError=false;
		}*/
		
		if(statement2014=='' && statement2013=='' && statement2012==''){
			$("#errStatement2012").html("Please select any two consecutive years files");
			IsError=false;
		}
				
		if(statement2014=='' && statement2013!='' && statement2012==''){
			$("#errStatement2012").html("Please select any two consecutive years files");
			IsError=false;
		}
			
		if(statement2014!='' && statement2013==''){
			$("#errStatement2012").html("Please select any two consecutive years files");
			IsError=false;
		}
		
		if(statement2014!='' && statement2012!=''  && statement2013==''){
			$("#errStatement2012").html("Please select any two consecutive years files");
			IsError=false;
		}
		
		
		if(statement2012!='' && statement2013==''){
			$("#errStatement2012").html("Please select any two consecutive years files");
			IsError=false;
		}
		
	}
	if(IsError==false){
		return false;
	}else{
		//var data="name="+name+"&email="+email+"&mobile="+mobile+"&company="+company+"&city="+city+"&business="+business+"&score="+score+"&statement2014="+statement2014+"&statement2013="+statement2013+"&isMobile="+isMobile+"&uId="+uId;
		$(".btn-holder").hide();
		$(".btn-holder-msg").show();
	var options ={success: function(data)
	{
	$(".btn-holder").show();
	$(".btn-holder-msg").hide();
	if(data=='""' || data==''){	
		$("#frmChannelPartner")[0].reset();
		if(isMobile==''){
			$(".overlay, .thanku").fadeIn("slow");
		}else{
			$(".overlay, .thanku-mobile").fadeIn("slow");
		}
		
	}
	var result=$.parseJSON(data);
		$.each(result, function(val, key) {
			$.each(key, function(fieldVal, fieldKey) {
				$(".frmErr").html('');
				$("#"+fieldVal).append(fieldKey);
			});
		});
	}};
	$("#frmChannelPartner").ajaxForm(options).submit();
	
	}
		
}



function more_info(){
		$("#errName").html('');
		$("#errEmail").html('');
		$("#errMobile").html('');
		var IsError=true;
		var testnumber = /^[0-9]+$/;
		var name=$("#name").val();
		
		var email=$("#email").val();
		var mobile=$("#mobile").val();
		if(name=='' || name=='Name' || name==' Name' || name=='Name '){
			$("#errName").html("Please enter your name");
			IsError=false;
		}
		if(email == ''){
			$("#errEmail").html("Please enter your email");
			IsError=false;
		}else if(!(email.match(/^[a-zA-Z0-9._]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9]{2,4}[\.]?[a-zA-Z0-9]*$/))){
			$("#errEmail").html("Please enter valid email");
			IsError=false;
		}if (mobile == "") {
			$("#errMobile").html("Please enter Mobile number")
			return false;
		}
		else if(!(mobile.match(testnumber)) || mobile.length !=10) {
			$("#errMobile").html("Please enter valid mobile number")
			return false;
		}if(IsError==false){
			return false;
		}else{
			var data="name="+name+"&email="+email+"&mobile="+mobile;
			$(".btn-holder").hide();
			$(".btn-holder-msg").show();
			
				$.ajax({
					type: "POST",
					url:"more_info.php",
					data:data,
					cache: false,
					success: function(result){ 
					$(".btn-holder").show();
					//$(".btn-holder-msg").html('Thank You');
                    $(".btn-holder-msg").hide();
                    $(".overlay, .thanku").fadeIn("slow");
					$('#more_info_frm')[0].reset();
					}
				});
				
		}

	}


	function more_info_reset_frm(){
		$('#more_info_frm')[0].reset();
		$("#errName").html('');
		$("#errEmail").html('');
		$("#errMobile").html('');
	}
	
	function frmChannelPartnerReset(){
		$('#frmChannelPartner')[0].reset();
		$(".frmErr").html('');
		
	}
	
    $(document).ready(function(){
            $(".close").click(function(){
                $(".overlay, .thanku").fadeOut("slow");
            }); 
            $('[placeholder]').focus(function() {
              var input = $(this);
              if (input.val() == input.attr('placeholder')) {
                input.val('');
                input.removeClass('placeholder');
              }
            }).blur(function() {
              var input = $(this);
              if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
              }
            }).blur();
            $('[placeholder]').parents('form').submit(function() {
              $(this).find('[placeholder]').each(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                  input.val('');
                }
              })
            });
        });
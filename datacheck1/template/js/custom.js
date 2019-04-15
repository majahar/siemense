function checkUser(){
	var uemail=$('#email').val();
	var upwd=$('#password').val();
	$("#errorMessage").show();
	
	$('.loginmsg').fadeIn(400).html('Please Wait <img src="'+SITE_IMAGES+'loaders/loader6.gif" />');
	var dataString = 'uemail='+ uemail + '&upwd='+ upwd;
	$.ajax({
	   type: "POST",
	   url: SITE_URL+"authenticate",
	   data: dataString,
	   cache: false,
	   success: function(result){
			if(result=='done'){
				window.location=SITE_URL+'dashboard';
			}else{
				var position=result.indexOf("||");
				var warningMessage=result.substring(0,position);
				var errorMessage=result.substring(position+2);
				$('.loginmsg').html(errorMessage);
				return false;
			}
			$("#errorMessage").hide();
	   }
	});
}

function statusChange(t,s,i){
	var operationStation='1';
	if(s=='-1'){
		var result = confirm("Want to delete?");
		if (result) {
		
		}else{
			operationStation='2';
		}
	}
	if(operationStation=='1'){
	  var thisobj=$(this);
	  var dataString = 'i=' + i + '&t=' + t + '&s=' + s;
	  $.ajax({
	  type: "POST",
	  url: SITE_URL+"status",
	  data: dataString,
	  cache: false,
	  success: function(html){
			if(s=='-1'){
				reloadForm();
			}else{
				if(html=="1")
				{
					$('#box'+i).html("<a title='Active' href='javascript:void(0)' onclick=statusChange('"+t+"','0','"+i+"')>"+ACTIVE_ICON+"</a>");
				}else if(html=="0")
				{
					$('#box'+i).html("<a title='Deactive' href='javascript:void(0)' onclick=statusChange('"+t+"','1','"+i+"')>"+DEACTIVE_ICON+"</a>");
				}
			}
			
		}
	  });
	  }
	  
}

function sortGrid(fieldName){
	$('#orderByField').val(fieldName);
	var orderByFieldValue=$("#orderByFieldValue").val();
	if(orderByFieldValue=='asc'){
		$("#orderByFieldValue").val('desc');
	}else{
		$("#orderByFieldValue").val('asc');
	}
	
	$('#orderByFieldValueChange').val('yes');
	reloadForm();
}

function searchDataBox(s_i){
	$(".sort_by_list").hide();
	if(s_i=='-1'){
		$('#searchByField').val('')
		$('#searchByFieldValue').val('');
		
		reloadForm();
	}else{
		$('#searchByField').val(s_i)
		$("#search_grid_box").show();
		$("#grid_search_button").show();
	}
}

function gridSearchData(){
	var search_grid_box=$('#search_grid_box').val();
	$('#searchByFieldValue').val(search_grid_box);
	
	reloadForm();
}

function generatePagi(selectTab,limit){
	$('#perPage').val(limit);
	$('#selectTab').val(selectTab);
	reloadForm();
}

function sortDataBox(searchFieldValue,searchField){
	//$("#search_grid_box").val('');
	//$("#search_grid_box").hide();
	//$("#grid_search_button").hide();
	//$(".sort_by_list").hide();
	if(searchField==''){
		$("#"+searchFieldValue+"_sort_by").show();
	}else{
		
		if(searchField=='status'){
			$('#status').val(searchFieldValue);
		}else{
			$('#searchByField').val(searchField);
			$('#searchByFieldValue').val(searchFieldValue);
		}
		
		reloadForm();
	}
}

function reloadForm(){
	$('#frmSort').submit();
}

function pageRedirect(url){
	window.location=url;
}

function savaData(bk,ty,referer,editBack){
	var options ={success: function(data)
	{
		
		var str = data;
		var isError = str.indexOf("elementError");
		if(isError>0){
			var getData=$.parseJSON(data);
			$.each(getData, function(val, key) {
				$.each(key, function(fieldVal, fieldKey) {
					$.each(fieldKey, function(fieldVal1, fieldKey1) {
						$("#"+fieldVal1).html(fieldKey1);
					});
				});
			}); 
		}else{
			var id=$("#id").val();
			if(id >0){
				alert('Data Updated');
				if(ty=='save'){
					window.location=SITE_URL+editBack+'/'+id;
				}else{
					if(referer=='true'){
						window.location=bk;
					}else{
						window.location=SITE_URL+bk;
					}
					
				}
			}else{
				alert('Data Added');
				id=str;
				if(ty=='save'){
					window.location=SITE_URL+editBack+'/'+id;
				}else{
					if(referer=='true'){
						window.location=bk;
					}else{
						window.location=SITE_URL+bk;
					}
				}
			}
		}
	}};
	$("#frmData").ajaxForm(options).submit();
}

function validationCategory(bk,ty,referer,editBack){
	var cat_name=$("#cat_name").val();
	var order_no=$("#order_no").val();
	
	var id=$("#id").val();
	
	var isError='false';
	
	$(".validation_message_error").html('');
	
	if(cat_name==''){
		$("#cat_nameError").html('Please enter category');
		isError='true';
	}	
	
	if(isError=='false'){
		savaData(bk,ty,referer,editBack);
	}	
}


function validationProducts(bk,ty,referer,editBack){
	var cat_id=$("#cat_id").val();
	var occasion_id=$("#occasion_id").val();
	var size_id=$("#size_id").val();
	var designer_id=$("#designer_id").val();
	var color_id=$("#color_id").val();
	var name=$("#name").val();
	var product_number=$("#product_number").val();
	var price=$("#price").val();
	var day_price_3=$("#day_price_3").val();
	var day_price_5=$("#day_price_5").val();
	var day_price_7=$("#day_price_7").val();
	var desc=$("#desc").val();
	var size_fit=$("#size_fit").val();
	
	var id=$("#id").val();
	var isError='false';
	$(".validation_message_error").html('');
	
	if(cat_id=='-1' || cat_id==''){
		$("#cat_idError").html('Please select product categories');
		isError='true';
	}
	if(occasion_id=='-1' || occasion_id==''){
		$("#occasion_idError").html('Please select product occasion');
		isError='true';
	}
	if(size_id=='-1' || size_id==''){
		$("#size_idError").html('Please select product size');
		isError='true';
	}
	if(designer_id=='-1' || designer_id==''){
		$("#designer_idError").html('Please select product designer');
		isError='true';
	}
	if(color_id=='-1' || color_id==''){
		$("#color_idError").html('Please select product color');
		isError='true';
	}
	
	if(name==''){
		$("#nameError").html('Please enter product name');
		isError='true';
	}	
	if(product_number==''){
		$("#product_numberError").html('Please enter OTR no');
		isError='true';
	}
	if(price==''){
		$("#priceError").html('Please enter product price');
		isError='true';
	}
	if(day_price_3==''){
		$("#day_price_3Error").html('Please enter 3 day price');
		isError='true';
	}
	if(day_price_5==''){
		$("#day_price_5Error").html('Please enter 5 day price');
		isError='true';
	}
	if(day_price_7==''){
		$("#day_price_7Error").html('Please enter 7 day price');
		isError='true';
	}
	if(desc==''){
		$("#descError").html('Please enter description');
		isError='true';
	}
	if(size_fit==''){
		$("#size_fitError").html('Please enter size & fit');
		isError='true';
	}
	
	if(isError=='false'){
		savaData(bk,ty,referer,editBack);
	}	
}


function addProductsAttribute(bk,ty,referer,editBack){
	var id=$("#id").val();
	var isError='false';
	$(".validation_message_error").html('');
	
	if(isError=='false'){
		savaData(bk,ty,referer,editBack);
	}	
}

function validationProductColor(bk,ty,referer,editBack){
	var color=$("#color").val();
	
	var id=$("#id").val();
	var isError='false';
	$(".validation_message_error").html('');
	
	if(color==''){
		$("#colorError").html('Please enter color');
		isError='true';
	}	
	
	if(isError=='false'){
		savaData(bk,ty,referer,editBack);
	}	
}

function validationProductSize(bk,ty,referer,editBack){
	var size_master=$("#size_master").val();
	
	var id=$("#id").val();
	var isError='false';
	$(".validation_message_error").html('');
	
	if(size_master==''){
		$("#size_masterError").html('Please enter size');
		isError='true';
	}	
	
	if(isError=='false'){
		savaData(bk,ty,referer,editBack);
	}	
}

function validationDesigner(bk,ty,referer,editBack){
	var designer=$("#designer").val();
	
	var id=$("#id").val();
	var isError='false';
	$(".validation_message_error").html('');
	
	if(designer==''){
		$("#designerError").html('Please enter designer name');
		isError='true';
	}
	if(isError=='false'){
		savaData(bk,ty,referer,editBack);
	}	
}

function validationPage(bk,ty,referer,editBack){
	var name=$("#name").val();
	
	var id=$("#id").val();
	var isError='false';
	$(".validation_message_error").html('');
	
	if(name==''){
		$("#nameError").html('Please enter name');
		isError='true';
	}	
	
	if(isError=='false'){
		savaData(bk,ty,referer,editBack);
	}	
}

function validationSecurityPrice(bk,ty,referer,editBack){
	var price=$("#price").val();
	
	var isError='false';
	$(".validation_message_error").html('');
	
	if(price=='' || price=='0'){
		$("#priceError").html('Please enter price');
		isError='true';
	}	
	
	if(isError=='false'){
		savaData(bk,ty,referer,editBack);
	}	
}

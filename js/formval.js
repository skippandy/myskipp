function edit_form(serialNo){
	$.ajax({
		url:'formvalidatephp.php',
		data:{edit_form:true,serialNo:serialNo},
		type:'POST',
		success:function(data){
			console.log(data);
			window.location.href="other_form.php";
		},
		error:function(){

		}
	});
 
 
}

function populate_serialNo(){
	$.ajax({
		url:'formvalidatephp.php',
		data:{populate_serialNo:true},
		type:'POST',
		success:function(data){
			console.log(data);
			$('#SERIAL_NO').val(data);
		},
		error:function(){

		}
	});
	
}

function formval (){
		// var DATE_RECEIVED = $("#DATE_RECEIVED").val();
		// var EQUIPMENT_MAKE = $("#EQUIPMENT_MAKE").val();
		var SERIAL_NO      = $("#SERIAL_NO").val();
		// var DEPARTMENT     = $("#DEPARTMENT").val();
		var ISSUE          = $("#ISSUE").val();
		var RESOLUTION	   = $("#RESOLUTION").val();
		// var USERNAME	   = $("#USERNAME").val();
		var DATE_REPAIRED  = $("#DATE_REPAIRED").val();
		var DATE_DISPATCHED = $("#DATE_DISPATCHED").val();
		var TECHNICHIAN		= $("#TECHNICHIAN").val();
		console.log(SERIAL_NO);
		console.log(ISSUE);
 
	$.ajax({
		url:'formvalidatephp.php',
		data:{formval:true,SERIAL_NO:SERIAL_NO,ISSUE:ISSUE,RESOLUTION:RESOLUTION,DATE_REPAIRED:DATE_REPAIRED,
			DATE_DISPATCHED:DATE_DISPATCHED,TECHNICHIAN:TECHNICHIAN},
		type:'POST',
		success:function(data){
			console.log(data);
			window.location.href="basic_table.php";
		},
		error:function(){

		}
	});
	return false;
}


// insert jquery
	function insert(){
		var DATE_RECEIVED = $("#DATE_RECEIVED").val();
		var SERIAL_NO     = $("#serialNo").val();
		var DEPARTMENT     = $("#DEPARTMENT").val();
		var EQUIPMENT_MAKE = $("#EQUIPMENT_MAKE").val();
		var USERNAME	   = $("#USERNAME").val();

		$.ajax({
			url:'formvalidatephp.php',
			data:{insert:true,DATE_RECEIVED:DATE_RECEIVED,SERIAL_NO:SERIAL_NO,DEPARTMENT:DEPARTMENT,
				EQUIPMENT_MAKE:EQUIPMENT_MAKE,USERNAME:USERNAME},
			type:'POST',
			success:function(data){
				console.log(data);
				window.location.href="basic_table.php";
			},
			error:function(){

		}
		});
		return false;

	}
// end of insert jquery


//function signup
function signup1 (){
		var BANKID = $("#BANKID").val();
		var PASSWORD = $("#PASSWORD").val();
		var CONFIRMPASSWORD = $("#CONFIRMPASSWORD").val();
			if(PASSWORD != CONFIRMPASSWORD){
				$("#error").append("password does not match");

			}else {

	$.ajax({
		url:'signup.php',
		data:{signup1:true,BANKID:BANKID,PASSWORD:PASSWORD},
		type:'POST',
		success:function(data){
			console.log(data);
			window.location.href="login.php";
		},
		error:function(){

		}
	});
			
}
return false;
}


//signin

function login1(){		
	var BANKID = $("#BANKID").val();
 	 var PASSWORD = $("#PASSWORD").val();
if(BANKID ==''){
	$("#usernameerror").html(' ');
	$("#usernameerror").append("USERNAME IS REQUIRED");
	console.log(BANKID);
}else if(PASSWORD ==''){
	$("#usernameerror").html(' ');
	$("#passworderror").html(' ');
	$("#passworderror").append("PASSWORD IS REQUIRED");
		console.log(PASSWORD);
}
else{
	$.ajax({
		url:'api.php',
		data:{login1:true,BANKID:BANKID,PASSWORD:PASSWORD},
		type:'POST',
		success:function(data){
			console.log(data);

			 
			if(data==1){
				window.location.href ="basic_table.php";
			}else {
				$("#usernameerror").html(' ');
				$("#passworderror").html(' ');
				$("#error").html(' ');
				$("#error").append("password is incorrect");
			}
			// console.log(data);
		},
		error:function(){

		}
	});
}

	return false;//prevents the page from refreshing when the function is called.
}





function search_device(){
	searchId = $('#serialNo').val();
	console.log(searchId);
	$.ajax({
		url:'api.php',
		data:{search_device:true,searchId:searchId},
		type:'POST',
		success:function(data){
			console.log(data);

			result=JSON.parse(data);
			$('#DEPARTMENT').val(result.department);
			$('#EQUIPMENT_MAKE').val(result.equipment_make);
			$('#USERNAME').val(result.username);
		},
		error:function(){

		}
	});
	return false;
}







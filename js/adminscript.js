// JavaScript Document

"use strict";

 var homeURL = "http://localhost/designer/",
	adminURL = homeURL + "admin/";
	
	$(document).ready(function() {

	// Logic for login.php form 
	$('#adminlogin').on('submit', function(e){
		e.preventDefault();
		
		var username = $('#username').val();
		var password = $('#password').val();
		
		
		
		$.post(adminURL + 'login.php', {'username': username, 'password':password}, function(data){
			
			if(data === 'found'){
				window.location.href = adminURL + 'dashboard.php';
			}
			
			else{
				
				$('#message').html('Login failed. Please try again.').css({"color":"#F00","font-weight":"bold"});
				
			}
			
		});
		
		
		
	});
	
	//for submitting register.php form data
	$('#dashboardForm').on('submit', function(e){
		
		e.preventDefault();
	
	//grab all form data  
       var eventdata = new FormData($(this)[0]);
	
	
	$.ajax({
				url: adminURL + 'addevent.php',
				type: 'POST',
				data: eventdata,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (info) {
				  
			 if(info === 'inserted'){
			   //success
			 
			 $('#message').html('Information submitted').css({"color":"#12D528","font-weight":"bold"});
		
			
		   }
		   
		   else {
			   
			   $('#message').html('Insert failed. Please try again.').css({"color":"#F00","font-weight":"bold"});
		   }
		   
		   
				  
				},
		
		 error: function (request,error) {
                            // This callback function will trigger on unsuccessful action   
							alert("Oops something went wrong. Try again.")            
          
                        }	
         });
	
	});
	

});
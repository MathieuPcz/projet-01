$(document).ready(function(){
	$('#register_name').keyup(function(){
		if($(this).val().length < 3){
		$('#register_name').css('background-color','rgb(237, 64, 64)');
		$('#infoForm').html('<br>3 caractères minimum').fadeIn(1000);
		$('#infoForm').css('color','rgb(237, 64, 64)');
		$('#register_name').css('color','white');
		
		}else{
			$('#register_name').css('background-color','rgb(54,224,139)');
			$('#register_name').css('color','white');
			$('#infoForm').fadeOut(1000);
		}
	})

	$('#register_firstname').keyup(function(){
		if($(this).val().length < 3){
		$('#register_firstname').css('background-color','rgb(237, 64, 64)');
		$('#infoForm').html('<br>3 caractères minimum').fadeIn(1000);
		$('#infoForm').css('color','rgb(237, 64, 64)');
		$('#register_firstname').css('color','white');
		
		}else{
			$('#register_firstname').css('background-color','rgb(54,224,139)');
			$('#register_firstname').css('color','white');
			$('#infoForm').fadeOut(1000);
		}
	})
	$('#register_city').keyup(function(){
		if($(this).val().length < 3){
		$('#register_city').css('background-color','rgb(237, 64, 64)');
		$('#infoForm').html('<br>3 caractères minimum').fadeIn(1000);
		$('#infoForm').css('color','rgb(237, 64, 64)');
		$('#register_city').css('color','white');
		
		}else{
			$('#register_city').css('background-color','rgb(54,224,139)');
			$('#register_city').css('color','white');
			$('#infoForm').fadeOut(1000);
		}

	})
	$('#register_email').keyup(function(){
		$.ajax({
		type: "post",
		url: "controler/verifMail.php",
		data: {
			'email' : $('#register_email').val()
			},
			success: function(data){
				if(data == "success"){
				$('#register_email').css('background-color','rgb(54,224,139)');
				$('#register_email').css('color','white');
				$('#infoForm').fadeOut(1000);
				
				} else { 
					$('#register_email').css('background-color','rgb(237, 64, 64)');
					$('#register_email').css('color','white');
					$('#infoForm').html('<br>'+data).fadeIn(1000);
					$('#infoForm').css('color','rgb(237, 64, 64)');
					
				}
			}
		});
	})

	$('#register_password').keyup(function(){
		if($(this).val().length < 4){
		$('#register_password').css('background-color','rgb(237, 64, 64)');
		$('#infoForm').html('<br>4 caractères minimum').fadeIn(1000);
		$('#infoForm').css('color','rgb(237, 64, 64)');
		$('#register_password').css('color','white');
		
		}else{
			$('#register_password').css('background-color','rgb(54,224,139)');
			$('#register_password').css('color','white');
			$('#infoForm').fadeOut(1000);
		}
	})

	$('#register_repass').keyup(function(){
		$.ajax({
		type: "post",
		url: "controler/verifPass.php",
		data: {
			'password' : $('#register_password').val(),
			'repass' : $('#register_repass').val()
			},
			success: function(data){
				if(data == "success"){
				$('#register_repass').css('background-color','rgb(54,224,139)');
				$('#register_repass').css('color','white');
				$('#infoForm').fadeOut(1000);
				
				} else { 
					$('#register_repass').css('background-color','rgb(237, 64, 64)');
					$('#register_repass').css('color','white');
					$('#infoForm').html('<br>'+data).fadeIn(1000);
					$('#infoForm').css('color','rgb(237, 64, 64)');
					
				}
			}
		});
	})

	$('#envoyer').click(function(){
		$.ajax({
		type: "post",
		url: "controler/register.php",
		data: {
			'name' : $('#register_name').val(),
			'firstname' : $('#register_firstname').val(),
			'city' : $('#register_city').val(),
			'email' : $('#register_email').val(),
			'password' : $('#register_password').val()
			},
			success: function(data){
				if(data == "success"){
				$('#infoForm').html(data).fadeIn(1000);
				$('#infoForm').fadeOut(5000);
				$('#infoForm').css('color','green');
				
				} else { 
					$('#infoForm').html('<br>'+data).fadeIn(1000);
					$('#infoForm').css('color','rgb(237, 64, 64)');
					
				}
			}
		});
	})
	

})
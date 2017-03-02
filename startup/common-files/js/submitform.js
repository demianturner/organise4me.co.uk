$(document).ready(function(){

	$("#formsubmit").click(function(){
alert('test');
		$(".error").hide();
		var hasError = false;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

		var nameFromVal = $("#nameFrom").val();
		if(nameFromVal == '') {
			$("#nameFrom").after('<span class="error">You forgot to enter the email address to send to.</span>');
			hasError = true;
		} else if(!emailReg.test(nameFromVal)) {
			$("#nameFrom").after('<span class="error">Enter a valid email address to send to.</span>');
			hasError = true;
		}

		var emailFromVal = $("#emailFrom").val();
		if(emailFromVal == '') {
			$("#emailFrom").after('<span class="error">You forgot to enter the email address to send from.</span>');
			hasError = true;
		} else if(!emailReg.test(emailFromVal)) {
			$("#emailFrom").after('<span class="error">Enter a valid email address to send from.</span>');
			hasError = true;
		}

		var messageVal = $("#message").val();
		if(messageVal == '') {
			$("#message").after('<span class="error">You forgot to enter the message.</span>');
			hasError = true;
		}


		if(hasError == false) {
			$(this).hide();
			$("#sendEmail li.buttons").append('<img src="/wp-content/themes/default/images/template/loading.gif" alt="Loading" id="loading" />');

			$.post("/yasemin/_website6/startup/common-files/php/sendemail.php",
   				{ nameFrom: nameFromVal, emailFrom: emailFromVal, subject: subjectVal, message: messageVal },
   					function(data){
						$("#sendEmail").slideUp("normal", function() {

							$("#sendEmail").before('<h1>Success</h1><p>Your email was sent.</p>');
						});
   					}
				 );
		}

		return false;
	});
});

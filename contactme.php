<?php 
	require($_SERVER['DOCUMENT_ROOT']."/includes/header.php")
?>
	<link rel="stylesheet" type="text/css" href="/src/css/contact-styles.css">
	<div id="gradient">
		<div id="grad-content">
			<h2 id="grad-heading" class="nav-nowrap" data-swipe="1">Contact Me</h2>
			<p id="grad-subheading" class="nav-nowrap" data-swipe="1">Want to get in contact with me? Well here's a great place to start!</p>
		</div>
	</div>
	<div id="mainbody">
		<div class="newsection">
			<section>
				<h1>Contact Me</h1><br>
				<h3>Please fill out the following to get in touch.</h3>
				<form action="http://www.nicolasjmendez.com/processors/contactme_processor.php" method="POST">
					<div class="pull-left2">
						<ul>
							<li><label for="name">Name</label><input type="text" name="name" placeholder="Name (required)" ></li>
							<li><label for="email">Email</label><input type="text" name="email" placeholder="Email (required)" ></li>
						</ul>
						
						
					</div>
					<div class="pull-right2">
						<ul>
							<li><label for="subject">Subject</label><input type="text" name="subject" placeholder="Subject (required)" ></li>
							<li><label for="message">Message</label><input type="text" name="message" placeholder="Message (required)" ></li>
						</ul>
						
						
					</div>
					<div class="clearfix"></div>
					<div style="width:100%; text-align: center;margin: 10px 0 5px 0;"><div class="g-recaptcha" data-sitekey="6LcUbR0UAAAAABynylK1QMCwuk0_nwsYK985w7yn"></div></div>
					<div style="width:100%; text-align: center;"><input type="submit" name="submit" id="submit"></div>
				</form>
				<div class="clearfix"></div>
				<div id="messages">
<!-- 					<div id="messages-error">
						<h1>Your information has been submitted, thank you!</h1>
					</div> -->
				</div>
				
			</section>
		</div>
		<div class="newsection">
			<section>
				<h1>Other</h1><br>
				<p>Email: <a href="mailto:nmendez011@gmail.com">nmendez011@gmail.com</a></p>
			</section>
		</div>
	</div>
	<script type="text/javascript">
		$('#submit').click(function(e) {
			e.preventDefault();
			$(this).prop('disabled', true);
			$(this).animate({"background-color":"#bdbdbd"}, 500);
			$.ajax({ 
                type: 'POST', 
                url: window.location.origin + "/processors/contactme_processor.php", 
                data: { name: $("input[name=name]").val(), email: $("input[name=email]").val(), subject: $("input[name=subject]").val(), message: $("input[name=message]").val(), captcha: grecaptcha.getResponse() }, 
                success: function (data) { 
                	if (data == "200OK") {
                		setTimeout(function(){
							console.log('ok');
							$("input[name=email]").val('');
							$("input[name=name]").val('')
							$("input[name=subject]").val('')
							$("input[name=message]").val('')
							$('#submit').prop('disabled', false);
							$('#submit').animate({"background-color":"#1e968d"}, 500);
							$('#messages').append('<div id="messages-ok"><h4>Your information has been submitted, thank you!</h4></div>').hide().fadeIn(500);
                		}, 1000);
                		
                	}else if (data == "ERROR") {
                		setTimeout(function(){
							console.log('error');
							$('#submit').prop('disabled', false);
							$('#submit').animate({"background-color":"#1e968d"}, 500);
							$('#messages').append('<div id="messages-error"><h4>There was an error, please try again.</h4></div>').hide().fadeIn(500);
                		}, 1000);
                	}else if (data == "ERRORCAPTCHA") {
                		setTimeout(function(){
							console.log('error');
							$('#submit').prop('disabled', false);
							$('#submit').animate({"background-color":"#1e968d"}, 500);
							$('#messages').append('<div id="messages-error"><h4>Please enter the captcha.</h4></div>').hide().fadeIn(500);
                		}, 1000);
                	}
                	setTimeout(function(){
                		$('#messages').fadeOut(500, function() {
						    $('#messages').empty();
						});
                	}, 6000);
                }
            });
		});
	</script>

<?php 
	require($_SERVER['DOCUMENT_ROOT']."/includes/footer.php")
?>
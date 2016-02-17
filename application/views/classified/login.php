	<title>Right Deals :: Login</title>
	<style>
		.section-title-01{
		height: 315px;
		background-color: #262626;
		text-align: center;
		position: relative;
		width: 100%;
		overflow: hidden;
		}
	</style>
	<link rel="stylesheet" type="text/css" media="all" href="css/logreg.css">
	<link rel="stylesheet" href="j-folder/css/j-forms.css">
	
	<!-- jQuery Form Validation code -->
		<script>
		  
		  // When the browser is ready...
		  $(function() {
		  
			// Setup form validation on the #register-form element
			$("#login_form").validate({
			
				// Specify the validation rules
				rules: {
					email: {
						required: true,
						email: true
					},
					password: {
						required: true,
						minlength: 5
					},
				},
				
				// Specify the validation error messages
				messages: {
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					email: "Please enter a valid email address",
				},
				
				submitHandler: function(form) {
					return true;
					//form.submit();
				}
			});

		  });
		  
		  </script>
		  
	<!-- Section Title-->    
	<div class="section-title-01">
		<div class="bg_parallax image_02_parallax"></div>
	</div>
	<!-- End Section Title-->
	<!--Content Central -->
	<section class="content-central">
		<!-- Shadow Semiboxed -->
		<div class="semiboxshadow text-center">
			<img src="img/img-theme/shp.png" class="img-responsive" alt="Shadow" title="Shadow view">
		</div>
		<!-- End Shadow Semiboxed -->
		<!-- End content info - page Fill with -->
		<div class="content_info">
			<div class="paddings-mini">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="login-form">
								<?php echo $this->view("classified_layout/success_error"); ?>
								<div class="row login_totpad">
									
									<div class="col-md-12">
										<script type="text/javascript">
											function check(){
												var ch = document.getElementById('w_check').checked;
												if(ch){
													document.getElementById('password').disabled = true;
												}
												else{
												 document.getElementById('password').disabled = false;
												}
											}
											
											$(function(){
												$('#wo_login .switchery').click(function(){
													var  col = $('.switchery').css('box-shadow');
													if(col == 'rgb(223, 223, 223) 0px 0px 0px 0px inset'){
														document.getElementById('password').disabled = true;
														document.getElementById('w_login').value = 1;
													}
													else{
														document.getElementById('password').disabled = false;
														document.getElementById('w_login').value = 0;
													}
											
												});
												 $('#remember .switchery').click(function(){
													var  col = $('.switchery').css('box-shadow');
													if(col == 'rgb(223, 223, 223) 0px 0px 0px 0px inset'){
														document.getElementById('remember').value = 1;
													}
													else{
														document.getElementById('remember').value = 0;
													}
											
												});
											});
										</script>
										<div class="">
											<div class="row login_left">
												<div class="col-md-8">
													<div class=" pull-left">
														<a href="<?php echo base_url(); ?>index.php"><img src="<?php echo base_url(); ?>img/maillogo.png"  class="" alt="Logo" title="99 Right Deals">  </a> 
													</div>
												</div>
												<div class="col-md-4">
													<h2 class="login_name">Login</h2>
												</div>
											</div>
											<div class="login_form">
												<form  method="post" class="log_form" action="" id="login_form">
													<div class="col-1">
														<label>Email <sup style='color:red;'>*</sup>
														<input placeholder="Enter Email" id="email" name="email" tabindex="1" required>
														</label>
													</div>
													<div class="col-1">
														<label>Password <sup style='color:red;'>*</sup>
														<input type="password" placeholder="Enter password" id="password" name="password" tabindex="2" required>
														</label>
													</div>
													<div class="col-1" id='wo_login'>
														<label> <a href="signup" class="signup_clr">Sign Up</a>
														</label>
													</div>
													<div class="col-submit">
														<input type='submit' id="submit" name='submit' class="pull-left btn btn-primary" value='Login' />
														<h4 class="log_side pull-right"><a href="forgot_password" class="signup_clr">Forgot Password</a></h4>
													</div>
												</form>
												<!-- End form -->
												<div class="row social_icons">
													<div class="col-md-6">
														<div class="login-options">
															<a href="#" class="login-op-btn grad-btn ln-tr fb">Login with Facebook</a>
														</div>
													</div>
													<div class="col-md-6">
														<!-- end FB login -->
														<div class=" login-options">
															<a href="#" class="login-op-btn grad-btn ln-tr gp">Login with Google</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end col-md-8/offset -->
					</div>
					<!-- end row -->
				</div>
			</div>
		</div>
		<!-- End content info - page Fill with  --> 
	</section>
	<script src="js/jquery.js"></script> 
	<script>
		setTimeout(function(){
			 $(".alert").hide();
		},5000);
		
	</script>
	
	<script src="j-folder/js/jquery.validate.min.js"></script>
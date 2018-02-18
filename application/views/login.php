<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to SocialTweets |Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
									<?php
					echo form_open('Login/login_check', ['class'=>'login100-form validate-form']);			?>

					<span class="login100-form-title p-b-26">
						Welcome User!
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" >
						
						<?php
						echo form_input(['name'=>'username', 'type'=>'text', 'class'=>'input100', 'value'=>set_value('username')]);
						?>
						<span class="focus-input100" data-placeholder="Username"></span>
						
					</div><?php echo form_error('username') ?>


					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						
						<?php
						echo form_password(['name'=>'password', 'type'=>'password', 'class'=>'input100']);
						?>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div><?php echo form_error('password'); ?>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>

							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>
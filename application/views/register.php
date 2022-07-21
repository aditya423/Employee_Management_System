<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login/Register</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/register.css">
  </head>
  <body>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-8 col-lg-push-3 col-md-push-2">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color: #9ed7ff;">Register</div>
					<div class="panel-body">
						<?php echo form_open('home/register_process'); ?>

						<div class="form-group1">
							<input type="email" name="u_email" class="form-control input-sm" placeholder="Email" style="padding-top: 20px; padding-bottom: 20px;" required>
						</div>

						<div class="form-group2">
							<input type="text" name="u_name" class="form-control input-sm" placeholder="Username" style="padding-top: 20px; padding-bottom: 20px;" required>
						</div>

						<div class="form-group2">
							<input type="password" name="u_pass" class="form-control input-sm" placeholder="Password" style="padding-top: 20px; padding-bottom: 20px;" required>
						</div>

						<div class="form-group3">
							<input type="submit" name="u_reg" value="Register" class="btn btn-success btn-sm">
							<a href="<?php echo site_url('home'); ?>" class="btn btn-warning btn-sm">Login as Admin</a>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
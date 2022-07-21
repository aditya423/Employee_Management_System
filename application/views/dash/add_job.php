<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']) {
	redirect('home','refresh');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Add Job</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  </head>
  <body>

  	<!-- dash nav -->
  	<?php $this->load->view('dash/inc/nav'); ?>
  	<!-- dash nav -->

    <!-- dash data -->
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <!-- sidebar -->
          <?php $this->load->view('dash/inc/sidebar'); ?>
          <!-- sidebar -->
        </div>
        <div class="col-lg-9 col-md-9" style="padding-top:30px;">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#ffd992;">Add Job</div>
            <div class="panel-body">
              <?php echo form_open('jobs/add_job','class="form-horizontal"'); ?>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Job Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="j_name" class="form-control input-sm" placeholder="Job Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" name="add_job" class="btn btn-sm btn-success" value="Add Job">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- dash data -->

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
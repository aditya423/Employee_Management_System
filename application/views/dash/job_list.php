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
    <title>Dashboard | Jobs List</title>
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
          <table class="table table-bordered">
            <tr>
              <th style="background-color: #f8ff93;">ID</th>
              <th style="background-color: #f8ff93;">Name</th>
              <th style="background-color: #f8ff93;">Edit</th>
              <th style="background-color: #f8ff93;">Delete</th>
            </tr>
            <?php
            $job_list = $this->db->get('jobs');
            foreach ($job_list->result() as $job) 
            { ?> 
              <tr>
                <td><?php echo $job->j_id; ?></td>
                <td><?php echo $job->j_name; ?></td>
                <td><a href="<?php echo site_url(); ?>jobs/update_job/<?php echo $job->j_id; ?>" class="btn btn-warning btn-block btn-xs">Edit</a></td>
                <td><a href="<?php echo site_url(); ?>jobs/delete_job/<?php echo $job->j_id; ?>" class="btn btn-danger btn-block btn-xs">Delete</a></td>
              </tr>
            <?php }
            ?>
          </table>   
        </div>
  		</div>
  	</div>
  	<!-- dash data -->

  	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
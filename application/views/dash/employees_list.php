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
    <title>Dashboard | Employees List</title>
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
              <th style="background-color: #f8ff93; font-size:12px;">ID</th>
              <th style="background-color: #f8ff93; font-size:12px;">Name</th>
              <th style="background-color: #f8ff93; font-size:12px;">Job</th>
              <th style="background-color: #f8ff93; font-size:12px;">Details</th>
              <th style="background-color: #f8ff93; font-size:12px;">Edit</th>
              <th style="background-color: #f8ff93; font-size:12px;">Delete</th>
            </tr>
            <?php

            $employees_list = $this->db->get('employees');
            foreach ($employees_list->result() as $employee) 
            { ?>
            

            <tr>
              <td style="font-size:12px;"><?php echo $employee->e_id; ?></td>
              <td style="font-size:12px;"><?php echo $employee->e_name; ?></td>
              <td style="font-size:12px;"><?php echo $employee->e_job; ?></td>
              <td style="font-size:12px;"><a href="<?php echo site_url(); ?>employees/single_employee/<?php echo $employee->e_id; ?>" class="btn btn-info btn-xs btn-block" style="font-size: 12px;">Details</a></td>
              <td style="font-size:12px;"><a href="<?php echo site_url(); ?>employees/update_employee/<?php echo $employee->e_id; ?>" class="btn btn-warning btn-xs btn-block" style="font-size: 12px;">Edit</a></td>
              <td style="font-size:12px;"><a href="<?php echo site_url(); ?>employees/delete_employee/<?php echo $employee->e_id; ?>" class="btn btn-danger btn-xs btn-block" style="font-size: 12px;">Delete</a></td>
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




<nav class="navbar navbar-default" style="color: black; background-color: #9ed7ff; font-size: large; padding-top: 20px; padding-bottom: 20px;">
  	<div class="container">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
     		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="<?php echo site_url('dash'); ?>">Hi, <?php echo $_SESSION['u_name']; ?></a>
    	</div>

    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      		<ul class="nav navbar-nav navbar-right">
        		<li><a href="<?php echo site_url(); ?>home/logout" style="background-color: #ffb5b5;">Log Out</a></li>
      		</ul>
    	</div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
</nav>
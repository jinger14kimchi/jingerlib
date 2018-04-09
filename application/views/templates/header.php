<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Jinger Book Track</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.min.css'); ?>">
      <link rel="icon" href="<?php echo base_url('assets/img/emojibook.ico');?>" type="image/ico">
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
   </head>
   <body>

	<?php if(isset($logged_in)) { ?>


   	<nav class="navbar navbar-default">
   		<div class="container-fluid">
   			<div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Book Track</a>   				
   			</div>

   		 <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">About</a></li>
	      </ul>
	  </div>
   		</div>	

   	</nav>


	<?php } ?>


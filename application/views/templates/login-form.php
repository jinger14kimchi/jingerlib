<div class="container-fluid">
	<div class="row form-body bordere">
		<div class="form-img col-md-3 col-md-offset-2">
			<img src="<?= base_url('assets/img/bookman.png') ?>" class="img-responsive">
		</div>
		<div class="col-md-6 form-container borderd">
				<?php
					if(isset($msg)) {
						?>
						<div class="text-center alert alert-danger alert-dismissable">
				
							<a href="#" data-dismiss="alert" class="close">&times;</a>
							<?php echo $msg; ?>
						</div>
				<?php
					}
				 ?>
			<div class="form-header text-center no-displa">
				<h2 class="welcome-msg">Welcome to Book Track!</h2>
				<p>Lend them your books and make sure they return em!</p>
			</div>
			<form action="<?= base_url('account/validate')?>" method="post" class="borered text-center">
				<div class="form-group">
					<input type="text" name="username" placeholder="Username" class="for-control" required>
					<br><br>
					<input type="password" name="password" placeholder="Password" class="for-control" required><br><br>
					
				</div>
				<div class="text-right">
					
					<button type="submit" class="login-btn">Log In </button>
				</div>
			</form>
		</div>
		<!-- /form-container -->
	</div>
	<!-- /form-body -->
</div>
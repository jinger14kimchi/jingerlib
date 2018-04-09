<div class="container-fluid">
	<div>
		<h2>Welcome to your library, <span class="theme-text">
			<?php
				$logged_in = $this->session->userdata('logged_in');
				if($logged_in) {
					$username = $this->session->userdata('username');
					echo "$username";					
				}
			 ?>
		 	
		 </span></h2>

	</div>

</div>
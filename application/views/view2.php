<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$this->load->helper('url');
echo site_url();
echo base_url();

?>


<div id="container">
	<h1>View 2</h1>

	<?php
		if(isset($disp)){
			echo "<h2>Displaying data</h2>";
		}

		//print_r($data);
	?>

	<div id="body">
		<button class="btn btn-warning">Test btn</button>
		<br/>
		<img src="<?php echo base_url('assets/img/login.png'); ?>">
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>


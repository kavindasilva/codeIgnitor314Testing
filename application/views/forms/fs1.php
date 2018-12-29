<?php
/**
	Form 1 success page
*/
?>

<html>
<head>
<title>My Form</title>
</head>
<body>

<h3>Your form was successfully submitted!</h3>

<p><?php //echo anchor('index.php/cnt3', 'Try it again!'); //when config.php: $config['index_page'] = ""; ?></p>
<p><?php echo anchor('cnt3', 'Try it again!'); ?></p>



</body>
</html>
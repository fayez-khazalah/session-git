<?php
  // Start the session
  session_start();
	/*
	- SESSION: the period beginning when a user views the first page 
	         and ending when a user leaves the Web site.
	- You usually want info to be available for a complete session.
	*/
?>
<!DOCTYPE html>
<html>
<body>

<?php
  // Set session variables
  $_SESSION['favcolor'] = 'green';
  $_SESSION['favanimal'] = 'cat';
  echo 'Session variables are set.';
  
  
	echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
	
?>

</body>
</html>

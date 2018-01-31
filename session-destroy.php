<?php
  // Open the session
  session_start();
	setcookie('PHPSESSID');
?>
<!DOCTYPE html>
<html>
<body>

<?php

	/*
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
	*/
  
  // Remove all session variables from $_SESSION array.
  session_unset();
  
  /*
	echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
	*/
  
  // destroy the session - delete the session file from the server file system.
  session_destroy();
	
	echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
  
  echo 'All session variables are now removed, and the session is destroyed.';
  
?>

</body>
</html>

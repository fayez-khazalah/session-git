<?php
  // Open the session
  session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
  // Echo session variables that were set on previous page
  echo 'Favorite color is ' . $_SESSION['favcolor'] . '<br>';
  echo 'Favorite animal is ' . $_SESSION['favanimal'] . '.';
  
	
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
	
?>

</body>
</html>

<!DOCTYPE html>
	<body>
		<?php
		
		//Starting session
		session_start();
		
		//Storing session data
		$_SESSION["firstname"]="Bhavi";
		$_SESSION["lastname"]="Dudhat";
		
		// Accessing session data
		echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
		
		// Removing session data
		if(isset($_SESSION["lastname"])){
		unset($_SESSION["lastname"]);
		}
		
		echo "</br>";
		print_r($_SESSION);
		?>
	</body>

</html>
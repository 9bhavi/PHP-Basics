<!DOCTYPE html>
	<body>
		<?php
		
		//Setting a cookie
		setcookie("username","Bhavi",time() + (86400 * 30), "/");
		
		//Check whether a cookie is set or not
		if(!isset($_COOKIE["username"])){
			echo "Welcome Guest!";
			}
		else{
			echo "Hi , " . $_COOKIE["username"]."</br>";
			}
		
		//Accessing an individual cookie value
		echo $_COOKIE["username"];
		
		//delete a cookie
		setcookie("username","", time()-3600);
		
		
		?>
	</body>

</html>
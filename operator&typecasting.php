<!DOCTYPE html>
	<body>
		<?php
			$a = 10;
			$b = 5;
			$c = 3;
			$d = 8;

			//addition example
			$add=$a + $b;
			echo $add; =
			echo "<br>";

			//subtraction example
			$sub = $a - $b;
			echo $sub; 
			echo "<br>";

			//multiplication example
			$mul = $a * $b;
			echo $mul; 
			echo "<br>";

			//division example
			$div = $a / $b;
			echo $div; 
			echo "<br>";
			echo $a/$c; 
			echo "<br>";
			echo $d/$c; 
			echo "<br>";

			//modulus example
			$mod= $a % $b;
			echo $mod;
			echo "<br>";

			//Negation example
			$neg = -$a;
			echo $neg; 
			echo "<br>";

			//Concatenation example
			$str1="Pankaj";
			$str2="Kumar";

			echo $str1 . " " . $str2; 
			echo "<br>";

			echo $a . $b;
			echo "<br>";

			echo $c . $d; 
			
			
		?>
		
		<?php

			$a=12;

			//assignment operator example
			$b=$a;
			echo $b; 
			echo "<br>";

			$a+=$b;
			echo $a; 
			echo "<br>";

			$a-=$b;
			echo $a; 
			echo "<br>";

			$a*=$b;
			echo $a; 
			echo "<br>";

			$a/=$b;
			echo $a; 
			echo "<br>";

			$a%=$b;
			echo $a; 
			echo "<br>";

			$a.=$b;
			echo $a; 

			?> 
		
		<?php

			$a=12;

			//Pre-increment example
			$b=++$a;
			echo "a=".$a." ,b=".$b; //prints a=13 ,b=13
			echo "<br>";

			//Post-increment example
			$b=$a++;
			echo "a=".$a." ,b=".$b; //prints a=14 ,b=13
			echo "<br>";

			//Pre-decrement example
			$b=--$a;
			echo "a=".$a." ,b=".$b; //prints a=13 ,b=13
			echo "<br>";

			//Post-decrement example
			$b=$a--;
			echo "a=".$a." ,b=".$b; //prints a=12 ,b=13
			echo "<br>";

			?> 
			
		<?php

			$a=true;
			$b=false;
			$c=true;

			//And example
			var_dump($a and $b); //prints bool(false)
			var_dump($a and $c); //prints bool(true)

			var_dump($a && $b); //prints bool(false)
			var_dump($a && $c); //prints bool(true)

			echo "<br>";

			//Or example
			var_dump($a or $b); //prints bool(true)
			var_dump($a or $c); //prints bool(true) 

			var_dump($a || $b); //prints bool(true)
			var_dump($a || $c); //prints bool(true)
			echo "<br>";

			//Xor example
			var_dump($a xor $b); //prints bool(true)
			var_dump($a xor $c); //prints bool(false)
			echo "<br>";

			//Not example
			var_dump(!$a); //prints bool(false)
			var_dump(!$b); //prints bool(true)
			echo "<br>";

			?> 
			
			<?php
			$x = 25;
			$y = 35;
			$z = "25";
			var_dump($x == $z);  // Outputs: boolean true
			var_dump($x === $z); // Outputs: boolean false
			var_dump($x != $y);  // Outputs: boolean true
			var_dump($x !== $z); // Outputs: boolean true
			var_dump($x < $y);   // Outputs: boolean true
			var_dump($x > $y);   // Outputs: boolean false
			var_dump($x <= $y);  // Outputs: boolean true
			var_dump($x >= $y);  // Outputs: boolean false
			?>
			
			<?php
			//typecasting
			
			$foo = '1';
			echo gettype($foo); // outputs 'string'
			settype($foo, 'integer');
			echo gettype($foo); // outputs 'integer'

			$foo = true;
			echo (int)$foo; // outputs 1
			$foo = false;
			echo (int)$foo; // outputs 0
			
			
			?>
		
	</body>

</html>
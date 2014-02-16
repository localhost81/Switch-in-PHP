<head>
		<title>Switch Staments!</title>
	</head>
	<body>
		<?php
			$a = 2;
			
			switch ($a) {
				case 0:
					echo "a equals 0<br />";
					break;
				case 1:
					echo "a equals 1<br />";
					break;
				case 2:
					echo "a equals 2<br />";
					break;
				case 3:
					echo "a equals 3<br />";
					break;
				default:
					echo "a is not 0, 1, 2, or 3<br />";
					break;
			}
		
		?>
		
		<?php
		$saurabh = 164;
		switch (($saurabh) % 12) {
			case  0: $ss = 'MD';    break;
			case  1: $ss = 'AB'; 	 break;
			case  2: $ss = 'SV'; 	break;
			case  3: $ss = 'CV'; 	break;
		}
		echo "{$saurabh} is the year of the {$ss}.<br />";
		?>
		
		<?php

			$user_type = 'customer';   // case with multiple values
			
			switch ($user_type) {
				case 'student':
					echo "Welcome!";
					break;
				case 'press':
				case 'customer':
				case 'admin':
					echo "Hello!";
					break;
			}
		?>
		
	</body>
</html>


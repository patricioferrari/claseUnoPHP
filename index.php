<html>
<head>
	<title>Ferrari</title>
</head>
<body>
		<!-- Lo que nosotros queremos que se muestre -->

		<h1>Hola Mundo!</h1>

		<?php
			$numeroRandom = rand(0,10);	
			
			echo "$numeroRandom";
			
			if ($numeroRandom%2) 
			{
				echo "Es impar";
			}else {
				echo "Es par";
			}

			

		?>
</body>
</html>
<html>
<head>
	<title>Ferrari</title>
</head>
<body>
		<!-- Lo que nosotros queremos que se muestre -->

		<h1>Hola Mundo!</h1>

		<?php

			$vueltas = 10;
			$contPar = 0;
			$contImpar = 0;
			$num1=0;
			$num2=0;
			$num3=0;
			$num4=0;
			$num5=0;
			$num6=0;
			$num7=0;
			$num8=0;
			$num9=0;
			$num10=0;


			for ($i=0; $i < $vueltas; $i++) 
			{ 
				$numeroRandom = rand(1,10);	
								
				if ($numeroRandom %2 == 0) 
				{
					$contImpar++;
				}else{
						
					$contPar++;
					}
			

			switch ($numeroRandom) 
			{
				case 1:
					{
						$num1++;
					}
					break;
				case 2:
					{
						$num2++;
					}
					break;	
				case 3:
					{
						$num3++;
					}
					break;
				case 4:
					{
						$num4++;
					}
					break;
				case 5:
					{
						$num5++;
					}
					break;
				case 6:
					{
						$num6++;
					}
					break;
				case 7:
					{
						$num7++;
					}
					break;
				case 8:
					{
						$num8++;
					}
					break;
				case 9:
					{
						$num9++;
					}
					break;
				case 10:
					{
						$num10++;
					}
					break;

			}
		}
			

			echo "Numeros Pares: ".$contPar."<br>";
			echo "Numeros Impares: ".$contImpar."<br>";
			
			echo"Cantidad de numeros uno: ".$num1*100/$vueltas."%"."<br>";
			echo"Cantidad de numeros dos: ".$num2*100/$vueltas."%"."<br>";
			echo"Cantidad de numeros tres: ".$num3*100/$vueltas."%"."<br>";
			echo"Cantidad de numeros cuatro: ".$num4*100/$vueltas."%"."<br>";
			echo"Cantidad de numeros cinco: ".$num5*100/$vueltas."%"."<br>";
			echo"Cantidad de numeros seis: ".$num6*100/$vueltas."%"."<br>";
			echo"Cantidad de numeros siete: ".$num7*100/$vueltas."%"."<br>";
			echo"Cantidad de numeros ocho: ".$num8*100/$vueltas."%"."<br>";
			echo"Cantidad de numeros nueve: ".$num9*100/$vueltas."%"."<br>";
			echo"Cantidad de numeros diez: ".$num10*100/$vueltas."%"."<br>";

			
			// despues en el 7, sacar un if que no muestre mas del 5%;
		?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 9 </title>
</head>


<body>
<!--Un alumno desea comprar un computadora portátil en El Lago, antes desea sabes cuánto le costará en realidad si le tiene que agregar al precio de la LapTop, $300 pesos de impuestos que le cobran el Km. 30 el SAT, y con los Soldados, tiene que pagar de impuesto el 5% del valor inicial de la LapTop. Cuánto le saldrá en total la LapTop. -->

<form action="Desarrollo_09.php" method="POST">
		 Ingrese el valor de la Computadora:<br>
  		<input type="text" name="Costo" id="Costo" value="0">
  		<input type="submit" value="Enviar">
	</form>

                            
    <?php
	   if (isset($_POST['txtCosto'])){
        // put your code here
      $costo=$_POST['txtCosto'];
	$portatil=0;
	$ini=$costo;
	$suma=$costo+300;
	$portatil=$costo*0.05;

	$ValorTotal=$suma+$portatil;
	echo "El precio inicial de la Laptop es: ".$ini;
	echo "<br>El valor a pagar con los impuestos incluidos es: ".$suma;
	echo "<br>El valor a pagar a los soldados es: ".$portatil;
	echo "<br>El valor final de la Laptop es: ".$ValorTotal;
	
	   }
        ?>
        
</html>
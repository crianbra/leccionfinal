<?php
  session_start();

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Insertar</title>
</head>
<body>

<h1>Insertar Demo</h1>


<form action="guardarTemperatura.php" method="post">
            <fieldset>
		<label>Dia</label>
		<input type="text" name="dia" autofocus required /></br>
		</br>
        <label>Mes</label>
		<input type="text" name="mes" autofocus required /></br>
		</br>
        <label>Hora</label>
		<input type="text" name="hora" autofocus required /></br>
		</br>
        <label>Temp</label>
		<input type="text" name="temp" autofocus required /></br>
		</br>
        <label>IdCiudad</label>
		<input type="text" name="idciudad" autofocus required /></br>
		</br>
                <button type="submit">Guardar</button>
        </fieldset>
	</form>

 

</body>
</html>

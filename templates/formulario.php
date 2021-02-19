<link rel="stylesheet" href="../styles/styles.css">
<?php

    echo '<form method="POST" action="comprobarForm.php">
            <fieldset>
                <legend>¿CUÁNTO SABES DE DAW2?</legend>
                    <center><label>Nombre de la asignatura</label>
                    <input type="text" name="nombre" required /> <br><br>
		
                    <label>Año en el que se cursa</label>
                    <input type="text" name="año" required /> <br><br>
                    
                    <label>Nombre de la profesora</label>
                    <input type="text" name="profe" required /> <br><br>
                    
                    <label>¿Has aprobado DAW1?</label>
                    <input type="text" name="daw1" required /> <br><br>
		
                    <button name="enviar" value="enviar">Enviar</button></center>
            </fieldset>
          </form>';

?>


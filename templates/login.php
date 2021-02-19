<link rel="stylesheet" href="../styles/styles.css">
<?php
    $user = $_POST['username'];
    $psw = $_POST['password'];
    $id = logueado($user, $psw);
    
    if(estaLogueado($user, $psw)) {
        echo 'Ha iniciado sesión correctamente';
        
        echo "<form method='POST' action='comprobarForm.php'>
            <fieldset>
                <legend>¿CUÁNTO SABES DE DAW2?</legend>
                    <center><label>Nombre de la asignatura</label>
                    <input type='text' name='nombre' required /> <br><br>
		
                    <label>Año en el que se cursa</label>
                    <input type='text' name='año' required /> <br><br>
                    
                    <label>Nombre de la profesora</label>
                    <input type='text' name='profe' required /> <br><br>
                    
                    <label>¿Has aprobado DAW1?</label>
                    <input type='text' name='daw1' required /> <br><br>
                    
                    <input type='hidden' name='id' value='$id'>
		
                    <button name='enviar' value='enviar'>Enviar</button></center>
            </fieldset>
          </form>";
    } else {
        echo 'Parámetros incorrectos   ';
        echo '<a href="index.php"> Volver atrás </a>';
    }
    
    function estaLogueado ($u, $p) {
        $db = new PDO("sqlite:./user.db");
        foreach($db -> query("SELECT * FROM users") as $fila) {
            if($u == $fila[1] && $p == $fila[2]) {
                return true;
            }
        }
        return false;
    }
    
    function logueado($u, $p) {
        $db = new PDO("sqlite:./user.db");
        foreach($db -> query("SELECT * FROM users") as $fila) {
            if($u == $fila[1] && $p == $fila[2]) {
                return $fila[0];
            }
        }
        return null;
    }
    
?>

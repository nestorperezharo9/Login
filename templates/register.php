<link rel="stylesheet" href="../styles/styles.css">
<?php

    echo '<form method="POST" action="comprobarRegistro.php">
            <fieldset>
                <legend>REGISTRARME</legend>
                    <center><label>Username</label>
                    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required /> <br><br>
		
                    <label>Password</label>
                    <input type="password" name="password" required /> <br><br>
		
                    <button name="registro" value="registro">Registrarme</button></center>
            </fieldset>
           </form>';
    
    echo '<center><p> Ya tengo cuenta, <a href="index.php">Iniciar sesión</a> </p></center>';

?>


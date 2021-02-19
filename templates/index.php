<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN APP</title>
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <?php
            echo '<form method="POST" action="login.php">
                    <fieldset>
                        <legend>INICIAR SESIÓN</legend>
                        <center><label>Username</label>
                        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required /> <br><br>
		
                        <label>Password</label>
                        <input type="password" name="password" required /> <br><br>
		
                        <button name="login" value="login">Iniciar sesión</button></center>
                    </fieldset>
                  </form>';
            
            echo '<center><p> No tengo cuenta, <a href="register.php">Registrarme</a> </p></center>';
        ?>
    </body>
</html>

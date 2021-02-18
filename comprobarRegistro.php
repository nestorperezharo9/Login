<link rel="stylesheet" href="styles.css">
<?php
    $user = $_POST['username'];
    $psw = $_POST['password'];
    
    if(comprobarRegistro($user, $psw)) {
        echo 'Se ha registrado correctamente, puede iniciar sesión aquí <a href="index.php">Iniciar sesión </a>';
    } else {
        echo 'Usuario ya registrado, por favor cambie el nombre de usuario <a href="register.php">Volver al registro</a>';
    }
    
    function comprobarRegistro ($u, $p) {
        $db = new PDO("sqlite:./user.db");
        foreach($db -> query("SELECT * FROM users") as $fila) {
            if($u == $fila[0]) {
                return false;
            }
        }
        $stado= $db->prepare("INSERT INTO users (username, pasword) VALUES (:u, :p)");
        $stado->execute(array(':u' => $u, ':p' => $p));
        return true;
    }

?>

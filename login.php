<link rel="stylesheet" href="styles.css">
<?php
    $user = $_POST['username'];
    $psw = $_POST['password'];

    
    if(estaLogueado($user, $psw)) {
        echo 'Ha iniciado sesión correctamente';
        
    } else {
        echo 'Parámetros incorrectos';
        echo '<a href="index.php"> Volver atrás </a>';
    }
    
    function estaLogueado ($u, $p) {
        $db = new PDO("sqlite:./user.db");
        foreach($db -> query("SELECT * FROM users") as $fila) {
            if($u == $fila[0] && $p == $fila[1]) {
                return true;
            }
        }
        return false;
    }
    
?>

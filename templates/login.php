<link rel="stylesheet" href="../styles/styles.css">
<?php
    $user = $_POST['username'];
    $psw = $_POST['password'];

    
    if(estaLogueado($user, $psw)) {
        echo 'Ha iniciado sesión correctamente, puede acceder a nuestro formulario aquí --> <a href="formulario.php">formulario</a>';
    } else {
        echo 'Parámetros incorrectos   ';
        echo '<a href="index.php"> Volver atrás </a>';
    }
    
    function estaLogueado ($u, $p) {
        $db = new PDO("sqlite:../user.db");
        foreach($db -> query("SELECT * FROM users") as $fila) {
            if($u == $fila[1] && $p == $fila[2]) {
                return true;
            }
        }
        return false;
    }
    
?>

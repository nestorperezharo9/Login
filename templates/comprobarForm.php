<link rel="stylesheet" href="../styles/styles.css">
<?php

    $name = $_POST['nombre'];
    $año = $_POST['año'];
    $profe = $_POST['profe'];
    $daw = $_POST['daw1'];
    
    $db = new PDO("sqlite:../user.db");
    $stado= $db->prepare("INSERT INTO form (nombre, año, profe, daw) VALUES (:n, :a, :p, :d)");
    $stado->execute(array(':n' => $name, ':a' => $año, ':p' => $profe, ':d' => $daw));

    echo '<p>Formulario realizado con éxito, se han guardado sus respuestas en la base de datos</p>'
?>

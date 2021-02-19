<link rel="stylesheet" href="../styles/styles.css">
<?php

    $name = $_POST['nombre'];
    $año = $_POST['año'];
    $profe = $_POST['profe'];
    $daw = $_POST['daw1'];
    $id = $_POST['id'];
    
    $db = new PDO("sqlite:./user.db");
    $stado= $db->prepare("INSERT INTO form (id, nombre, año, profe, daw) VALUES (?, ?, ?, ?, ?)");
    $stado->execute(array($id, $name, $año, $profe, $daw));

    echo '<p>Formulario realizado con éxito, se han guardado sus respuestas en la base de datos</p>'
?>

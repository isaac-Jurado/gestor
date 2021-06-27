<?php
    require_once 'app/config.php'
?>

<!doctype html>
<html lang="es">
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- se abre un tag de php para mandar a traer las dependencias -->
    <?php
    //? se requieres una sola vez he ignora los demas que esten debajo
    require_once 'app/dependencias.php';
    ?>

</head>
<body>
    <?php
    //!para el metodo get se usara la variable que se coloco en htaccess
        if(isset($_GET['vista'])){
            switch ($_GET['vista']) {
                case 'home':
                    echo 'bienvenido a casa';
                    break;
                
                default:
                    echo 'error 404';
                    break;
            }
        }else{
            echo 'estas en el index';
        }
    ?>
</body>
</html>
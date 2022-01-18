<?php
    require_once 'operacionVideoJuego.php';
    $jogo= new VideoJuego();
    if(isset($_POST['enviar'])){
        $nombre="'".$_POST['nombre']."'";
        $url="'".$_POST['url']."'";
        $img="'".$_POST['img']."'";
        $jogo->preparar();
        $jogo->ejecucion($nombre,$img,$url);
        echo '<button onclick="window.location.reload()">Recargar la pagina</button>';
    }else{
        formulario();
    }
    function formulario(){
        echo 
        '<form method="post" action="">
        <label>Introducir Juego</label>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="url" placeholder="URL" required>
        <input type="text" name="img" placeholder="Imagen" required>
        <input type="submit" name="enviar" value="Enviar">
        </form>';
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Niveles del minijuego</title>
    </head>
    <body>   
        
    </body>
</html>
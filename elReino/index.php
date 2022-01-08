<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/app.css">

    <title>ElReino - Inscripción</title>

</head>
<body>
    <!-- <pre>
        <?php // var_dump($_POST) ?>
    </pre> -->
    <!-- <pre> -->
    <?php
    $equipo = $_POST ?? null;
    $errores = [];
    $nombreEquipo = "";
    $abreviacion = "";
    $capitan = [
        'nombre' => "",
        'discord' => "",
        'edad' => "",
        'twitch' => ""
    ];
    $jugador2 = [
        'nombre' => "",
        'discord' => ""
    ];
    $jugador3 = [
        'nombre' => "",
        'discord' => ""
    ];
    $jugador4 = [
        'nombre' => "",
        'discord' => ""
    ];
    $suplente = [
        'nombre' => "",
        'discord' => ""
    ];


    if($equipo){
        $nombreArchivo = $equipo['nombreEquipo'];
        
        $nombreEquipo = $equipo['nombreEquipo'];
        $abreviacion = $equipo['abrvEq'];
        $capitan = [
                'nombre' => $equipo['nomCap'],
                'discord' => $equipo['discordCap'],
                'edad' => $equipo['edadCap'],
                'twitch' => $equipo['twitchCap']
        ];
    $jugador2 = [
                'nombre' => $equipo['nombre2'],
                'discord' => $equipo['discord2']
    ];
    $jugador3 = [
        'nombre' => $equipo['nombre3'],
        'discord' => $equipo['discord3']
    ];
    $jugador4 = [
        'nombre' => $equipo['nombre4'],
        'discord' => $equipo['discord4']
    ];
    $suplente = [
        'nombre' => $equipo['nombreSup'],
        'discord' => $equipo['discordSup']
    ];
    if(!$nombreEquipo) {
        $errores [] = "Debes añadir un Nombre al equipo";
    };
    if(!$abreviacion) {
        $errores [] = "Debes añadir una Abreviación al equipo";
    };
    if(!$capitan['nombre']||!$capitan['discord']|| !$capitan['edad'] || !$capitan['twitch']) {
        $errores [] = "Faltan datos del capitán";
    };
    if(!$jugador2['nombre']||!$jugador2['discord']) {
        $errores [] = "Faltan datos del segundo jugador";
    };
    if(!$jugador3['nombre']||!$jugador3['discord']) {
        $errores [] = "Faltan datos del tercer jugador";
    };
    if(!$jugador4['nombre']||!$jugador4['discord']) {
        $errores [] = "Faltan datos del cuarto jugador";
    };
    if(!$suplente['nombre']||!$suplente['discord']) {
        $errores [] = "Faltan datos del suplente";
    };
    if(empty($errores)) {
        $contenido = "
        Nombre del equipo: $nombreEquipo
        Abreviación: $abreviacion

        Datos del Capitán
            Nombre: ${capitan['nombre']}
            Discord: ${capitan['discord']}
            Edad: ${capitan['edad']}
            Twitch: ${capitan['twitch']}

        Datos del Segundo Jugador:
            Nombre: ${jugador2['nombre']}
            Discord: ${jugador2['discord']}
        
        Datos del Tercer Jugador:
            Nombre: ${jugador3['nombre']}
            Discord: ${jugador3['discord']}

        Datos del Cuarto Jugador:
            Nombre: ${jugador4['nombre']}
            Discord: ${jugador4['discord']}
        
        Datos del Suplente:
            Nombre: ${suplente['nombre']}
            Discord: ${suplente['discord']}
    ";
    $archivo=fopen("respuestas/${'nombreArchivo'}.txt","w");
    fwrite($archivo, $contenido);

    header("Location: /elReino?resultado=success");
    }
        
    }
    ?>

    <!-- </pre> -->
    <header>
    </header>
    <main>
    <?php
    $resultado = $_GET['resultado'] ?? null;
     if($resultado && empty($errores)) {
        ?>
        <div class="alerta exito">
            <p>Equipo enviado correctamente</p>
        </div>
        <?php
    }
    ?>
    <?php foreach($errores as $error):?>
        <div class="alerta error">
            <?php echo $error;  ?>
        </div>
        <?php endforeach;?>

    <form class="formulario" method="POST">
        <fieldset>
                <legend class="primero"> Información Capitán</legend>
                <label for="nombreCap">Nombre Capitán:</label>
                <input
                    type="text"
                    id="nomCap"
                    name="nomCap"
                    placeholder="Nombre del Capitán"
                    value="<?php echo $capitan['nombre']?>">
                    

                <label for="discordCap">Discord Capitán:</label>
                <input
                    type="text"
                    id="discordCap"
                    name="discordCap"
                    placeholder="Discord del Capitán"
                    value="<?php echo $capitan['discord']?>">

                <label for="edadCap">Edad Capitán:</label>
                <input
                    type="number"
                    id="edadCap"
                    name="edadCap"
                    placeholder="Edad del Capitán"
                    value="<?php echo $capitan['edad']?>">


                <label for="twitchCap">Twitch Capitán:</label>
                <input
                    type="text"
                    id="twitchCap"
                    name="twitchCap"
                    placeholder="Usuario de twitch del Capitán"
                    value="<?php echo $capitan['twitch']?>">

        </fieldset>
            <fieldset>
                <legend> Información Usuarios</legend>

                <label for="nombre2">Nombre Usuario 2:</label>
                <input
                    type="text"
                    id="nombre2"
                    name="nombre2"
                    placeholder="Nombre del segundo usuario"
                    value="<?php echo $jugador2['nombre']?>">


                <label for="discord2">Discord usuario 2:</label>
                <input
                    type="text"
                    id="discord2"
                    name="discord2"
                    placeholder="Discord del segundo usuario"
                    value="<?php echo $jugador2['discord']?>">

                    <label for="nombre3">Nombre Usuario 3:</label>
                <input
                    type="text"
                    id="nombre3"
                    name="nombre3"
                    placeholder="Nombre del tercer usuario"
                    value="<?php echo $jugador3['nombre']?>">


                <label for="discord3">Discord usuario 3:</label>
                <input
                    type="text"
                    id="discord3"
                    name="discord3"
                    placeholder="Discord del tercer usuario"
                    value="<?php echo $jugador3['discord']?>">


                <label for="nombre4">Nombre Usuario 4:</label>
                <input
                    type="text"
                    id="nombre4"
                    name="nombre4"
                    placeholder="Nombre del cuarto usuario"
                    value="<?php echo $jugador4['nombre']?>">


                <label for="discord4">Discord usuario 4:</label>
                <input
                    type="text"
                    id="discord4"
                    name="discord4"
                    placeholder="Discord del cuarto usuario"
                    value="<?php echo $jugador4['discord']?>">

                <label for="nombreSup">Nombre Suplente:</label>
                <input
                    type="text"
                    id="nombreSup"
                    name="nombreSup"
                    placeholder="Nombre del Suplente"
                    value="<?php echo $suplente['nombre']?>">


                <label for="discordSup">Discord Suplente:</label>
                <input
                    type="text"
                    id="discordSup"
                    name="discordSup"
                    placeholder="Discord del Suplente"
                    value="<?php echo $suplente['discord']?>">

            </fieldset>

            <fieldset>
                <legend>Información del Equipo</legend>

                <label for="nombreEquipo">Nombre Equipo:</label>
                <input
                    type="text"
                    id="nombreEquipo"
                    name="nombreEquipo"
                    placeholder="Nombre del Equipo"
                    value="<?php echo $nombreEquipo?>">

                <label for="abrvEq">Abreviación Equipo:</label>
                <input
                    type="text"
                    id="abrvEq"
                    name="abrvEq"
                    placeholder="Abreviación del nombre del Equipo"
                    value="<?php echo $abreviacion?>">

            </fieldset>

            <input type="submit" value="Enviar" class="boton">
        </form>
    </main>
    <footer class="footer">
        <cite class = "copyright">&copy; ElReino.top (Todos los derechos reservados <?php echo date('Y');?> )</cite>
    </footer>
</body>
</html>
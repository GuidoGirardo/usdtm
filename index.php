<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>verified usdt cloud crypto mining</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>

    <p id="error"><?php
        session_start();
        echo isset($_SESSION["error"]) ? $_SESSION["error"] : "";

        if(isset($_SESSION["usuario"])) $user = $_SESSION["usuario"];
        else $user = "";
        echo '<br>' . $user;
    ?></p>

    <header>
        <h1>usdt <span>verified</span> cloud mining</h1>
        <?php
            if($user == ""){
                echo '<div>
                <button id="btniniciarsesion">iniciar sesión</button>
                <button id="btnregistrarme">registrarme</button>
            </div>';
            }else echo '';
        ?>
    </header>

    <div id="iniciarsesion" class="logeo">
        <button id="cerrariniciarsesion" class="btncerrarlogeo" onclick="cerrarIniciarSesion()">X</button>
        <p>iniciar sesión</p>
        <form action="http://localhost/usdtmining/login.php" method="post">
            <input type="text" name="usuario" placeholder="nombre">
            <input type="text" name="contrasena" placeholder="contrasena">
            <button type="submit" class="send">send</button>
        </form>
    </div>

    <div id="registrarme" class="logeo">
        <button id="cerrarregistrarme" class="btncerrarlogeo" onclick="cerrarRegistrarme()">X</button>
        <p>registrarme</p>
        <form action="http://localhost/usdtmining/register.php" method="post">
            <input type="text" name="usuario" placeholder="nombre">
            <input type="text" name="correo" placeholder="correo">
            <input type="text" name="contrasena" placeholder="contrasena">
            <input type="text" name="billetera" placeholder="billetera usdt">
            <button type="submit" class="send">send</button>
        </form>
    </div>

    <div id="cryptozone">
        <p id="contador"><?php
            echo isset($_SESSION["contador"]) ? $_SESSION["contador"] : "-";
        ?></p>
    </div>

    <?php
        if($user != ""){
            echo '<button id="cerrarsesion">cerrar sesion</button>';
        }
    ?>

    <script src="script.js"></script>
</body>
</html>
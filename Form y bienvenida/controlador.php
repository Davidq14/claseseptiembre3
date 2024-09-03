<?php
session_start();
if (isset($_GET["Aceptar"]))
    {
        $usuario_existe=0;
        if ($_GET["usuario"]=="msilva" && $_GET["contrasenia"]=="123456")
        {
            $_SESSION["usuario"]="msilva";
            $_SESSION["color"]="#0088ff";
            $usuario_existe=1;
        }
        if ($_GET["usuario"]=="jcano" && $_GET["contrasenia"]=="123456")
        {
            $_SESSION["usuario"]="jcano";
            $_SESSION["color"]="#ff00cd";
            $usuario_existe=1;
        }
        if ($usuario_existe==0)
        {
            echo "Usuario no existe o contrasenia invalida!!!!";
            echo "<br><a href='idex.php'>Volver</a>";
        }
    }

else
{
    echo "Cancelar";
    header("Location: index.php");
}
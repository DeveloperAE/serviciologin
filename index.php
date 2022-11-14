<?php 

    header("Access-Control-Allow-Origin: *");
    $cn = new mysqli("localhost","root","","proyectocasas");

    require_once("config.php");
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $rs = $cn->query("SELECT * from iniciosesion WHERE usuario ='$usuario'");
    if($rs->num_rows == 1){
        $row = $rs->fetch_assoc();
        if($row["clave"] == $clave){
            $res[] = $row;
            echo json_encode($res, JSON_UNESCAPED_UNICODE);
        }
        else{
            echo "-2";
        }
    }
    else{
        echo "-1";
    }
    $cn->close();
?>
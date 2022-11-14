<?php
        header("Access-Control-Allow-Origin: *");
        //Esto es para que se pueda acceder al servicio web
        //desde cualquier otro dominio.


        $cn = new mysqli("localhost","root","","proyectocasas");
        //$cn = new mysqli("localhost","nombre del usuario","contrasena","nombre de la base de datos");
        //Así se establece la conexión a la base de datos
        //Parámetros: Nombre del servidor, usuario de la base de datos
        //contraseña y el nombre de la base de datos
?>
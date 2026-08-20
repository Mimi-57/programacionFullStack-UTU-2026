<?php

$usuarios = [
    [
        "id" => 1,
        "nombre" => "Juan",
        "usuario" => "juan123",
        "contraseña" => "1234",
        "rol" => "administrador",
        "activo" => true
    ],
    [
        "id" => 2,
        "nombre" => "Maria",
        "usuario" => "maria123",
        "contraseña" => "5678",
        "rol" => "empleado",
        "activo" => true
    ],
    [
        "id" => 3,
        "nombre" => "Pedro",
        "usuario" => "pedro123",
        "contraseña" => "abcd",
        "rol" => "empleado",
        "activo" => false
    ]
];

$usuariobuscado = "juan123";
$contraseñaingresada = "1234";

$usuarioencontrado = null;


foreach ($usuarios as $usuario) {

    if ($usuario["usuario"] == $usuariobuscado) {
        $usuarioencontrado = $usuario;
    }
}



if ($usuarioencontrado == null) {

    echo "Usuario o contraseña incorrectos.";

} else {


    if ($usuarioencontrado["contraseña"] != $contraseñaingresada) {

        echo "Usuario o contraseña incorrectos.";

    } else {


        if ($usuarioencontrado["activo"] == false) {

            echo "El usuario está inactivo.";

        } else {

            echo "Inicio de sesión correcto.\n";
            echo "Bienvenido, " . $usuarioencontrado["nombre"] . "\n";

        
            if ($usuarioencontrado["rol"] == "administrador") {

                echo "Tiene permisos de administrador.";

            } elseif ($usuarioencontrado["rol"] == "empleado") {

                echo "Tiene permisos de empleado.";

            } else {

                echo "Rol no reconocido.";
            }
        }
    }
}

?>
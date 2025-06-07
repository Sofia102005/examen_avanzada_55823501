<?php

namespace App\views;

use App\Controller\controller;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form>
        <input type="hidden" name="id" >
        <label>Nombre Empleado</label>
        <input type="text" name="nombre" require>
        <label>Salario Base</label>
        <input name="salario" type="number" require>
    <table>
        <thead>
            <th>
                <tr>
                    Empleado
                </tr>
                <tr></tr>
            </th>
        </thead>
    </table>
</body>
</html>
<?php
/**
 * SarmientoLabs - Desarrollo Web
 * Laboratorio #1: Sintaxis Base de PHP
 */

// ==========================================
// SECCIÓN 1: DATOS DEL ESTUDIANTE (Anti-Plagio)
// ==========================================
// TODO: Reemplaza los valores entre comillas con tus datos reales
define("UNIVERSIDAD", "Universidad Tecnológica de Panamá");
$nombre_estudiante = "TU NOMBRE Y APELLIDO AQUÍ";
$cedula_estudiante = "E-8-XXXXXX"; // Tu cédula o ID
$materia           = "Desarrollo Web";

// ==========================================
// SECCIÓN 2: NOTAS Y CÁLCULOS
// ==========================================
// TODO: Ingresa 3 notas entre 0 y 100 para evaluar el algoritmo
$nota1 = 85;
$nota2 = ; //debes ingresar un monto diferente a la Nota 1
$nota3 = ; ////debes ingresar un monto diferente a la Nota 1 y 2

// TODO: Calcula el promedio sumando las 3 notas y dividiendo entre 3
$promedio = ($nota1 + $nota2 + $nota3) / 3;

// ==========================================
// SECCIÓN 3: LÓGICA DE APROBACIÓN
// ==========================================
// TODO: Completa la condición. En UTP se aprueba con 71 o más.
if ($promedio >= 71) {
    $estado = "APROBADO";
    $color_estado = "green";
} else {
    $estado = "REPROBADO";
    $color_estado = "red";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 1 - <?php echo $nombre_estudiante; ?></title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; }
        .card { background: white; padding: 20px; border-radius: 8px; max-width: 450px; margin: auto; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .badge { color: white; padding: 5px 10px; border-radius: 4px; font-weight: bold; }
    </style>
</head>
<body>

    <div class="card">
        <h2><?php echo UNIVERSIDAD; ?></h2>
        <h3><?php echo $materia; ?></h3>
        <hr>
        <p><strong>Estudiante:</strong> <?php echo $nombre_estudiante; ?></p>
        <p><strong>Cédula:</strong> <?php echo $cedula_estudiante; ?></p>
        <p><strong>Promedio Final:</strong> <?php echo number_format($promedio, 2); ?></p>
        
        <p><strong>Estado:</strong> 
            <span class="badge" style="background-color: <?php echo $color_estado; ?>;">
                <?php echo $estado; ?>
            </span>
        </p>
    </div>

</body>
</html>

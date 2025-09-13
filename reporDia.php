<?php
// Suponiendo que $reservaciones es el arreglo del punto 2

$reporteDiario = []; // Arreglo para guardar el resultado

foreach ($reservaciones as $reserva) {
    $fecha = $reserva["fecha"];
    $comensales = $reserva["comensales"];

    if (!isset($reporteDiario[$fecha])) {
        // Si es la primera vez que vemos esta fecha, la inicializamos
        $reporteDiario[$fecha] = [
            "total_comensales" => 0,
            "reservas_del_dia" => [] // Opcional: para guardar las reservas de ese día
        ];
    }

    // Acumulamos los comensales y añadimos la reserva al listado del día
    $reporteDiario[$fecha]["total_comensales"] += $comensales;
    $reporteDiario[$fecha]["reservas_del_dia"][] = $reserva;
}

// Ahora $reporteDiario contiene los totales por día.
// print_r($reporteDiario);
?>
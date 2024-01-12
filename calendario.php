<?php

function createCalendar($year, $month) {
    $currentDay = date("j");
    $daysList = ["Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"]; // Array de días de la semana

    $numberDays = cal_days_in_month(CAL_GREGORIAN, $month, $year); // Obtenemos el número de días del mes
    $calendar= "<h4> Estamos en el $currentDay del $month del $year DBY</h4>";
    $calendar .= "<table id='calendario'>";

    $calendar .= "<tr>"; // Fila para los días de la semana
    foreach ($daysList as $day) {
        $calendar .= "<th>$day</th>";
    }
    $calendar .= "</tr>";

    $newRow = "<tr>";

    for ($day = 1; $day <= $numberDays; $day++) { // Iteramos los días hasta llegar al final del mes
        $positioDay = date("w", mktime(0, 0, 0, $month, $day, $year)); // Sacamos la posición del día en la semana (Siendo 0 el domingo)
        if ($positioDay == 1) { // Si es lunes, creamos una nueva fila en el calendario al final de sus hermanas
            $calendar .= $newRow . "</tr>";
            $newRow = "<tr>";
        } elseif ($day == 1) { // Si el día es el primero del mes, creamos una fila y llenamos celdas vacías hasta llegar a la posición de su día de la semana
            for ($i = 1; $i < $positioDay; $i++) {
                $newRow .= "<td></td>";
            }
        }
        $cellContent = ($day == $currentDay && $month == date("n") && $year == date("Y")) ? "<td class='current-day'>$day</td>" : "<td>$day</td>";
        $newRow .= $cellContent; // Creamos una nueva celda y la rellenamos con su día correspondiente
        
    }

    $calendar .= $newRow . "</tr>";
    $calendar .= "</table>";

    echo $calendar;
}


$currentYear = date("Y");
$currentMonth = date("n");
createCalendar($currentYear, $currentMonth);


?>
<?php
$ship = [
    'Пассажирские корабли' => ['Лайнер','Яхта','Паром'],
    'Военные корабли' => ['Авианосец','Линкор','Эсминец'],
    'Грузовые корабли' => ['Сормовский','Волго-Дон','Окский']
];
foreach ($ship as $key => $type) {
    // Вывод значений основных массивов
    echo "<b>$key</b><br />";
    foreach ($type as $ship) {
        // Вывод значений для каждого из массивов
        echo "<li>$ship</li>";
    }
}

<?php
// Формируем случайное число от 1 до 10
$index = rand(1, 10);
// Формируем имя константы
$name = "VALUE{$index}";

// Определяем константу с динамическим именем
define($name, 1);

// Получаем значение константы
echo constant($name);
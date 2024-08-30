<?php
// Болгарский
$base_array = array(
    'name' => 'Име:',
    'phone' => 'Телефонен номер:',
    'return' => 'Връщане',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Благодаря ти',
    'text-1' => 'Благодаря ви за вашата поръчка!',
    'text-2' => 'Нашите специалисти ще се свържат с вас',
    'text-3' => 'Уверете се, че влизате:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Грешка',
    'text-1' => 'Възникна грешка',
    'text-2' => 'Върнете се на главната страница и опитайте отново',
    'text-3' => 'Уверете се, че влизате:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Благодаря ти',
    'text-1' => 'Вашата поръчка вече се обработва!',
    'text-2' => 'Нашите специалисти ще се свържат с вас',
    'text-3' => 'Предоставените от вас данни:',
));
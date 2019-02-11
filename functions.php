<?php
// Шаблонизатор
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
};

// Округляет число в большую сторону, форматирует и добавляет знак рубля
function num_to_price($number) {
  
     return number_format(ceil($number),0,","," ") . ' ₽';   
};

// Добавляет таймер обратного отсчет (интервал между 2-мя временными метками)
function finish_time_counter() {
  
    return date_interval_format(date_diff(date_create('tomorrow'), date_create('now')), '%H:%I');
};

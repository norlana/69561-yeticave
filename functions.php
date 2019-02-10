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
}

// Округляет число в большую сторону, форматирует и добавляет знак рубля
function num_to_price($number) {
  
     return number_format(ceil($number),0,","," ") . ' ₽';   
}

// Добавляет таймер обратного отсчет (интервал между 2-мя временными метками)
function finish_time_counter() {
  
    $check_time = strtotime('tomorrow') - time();

    if ($check_time <= 0) {
      
        return '00:00';
    } else {
      
      return date('s', floor($check_time / 3600)) . ':' . date('s', ceil(($check_time % 3600) / 60));
    }
}

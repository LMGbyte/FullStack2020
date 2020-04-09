<?php

function calculate($exp)
{
    if ($exp == '') {
        return $exp;
    }
    $actions = ['+', '-', '*', '/', '^'];
    $act_pos = 0;
    $act_count = 0;
    for ($i = 0; $i < strlen($exp); $i++) {
        if (in_array($exp[$i], $actions)) {
            $act_pos = $i;
            $act_count += 1;
        }
    }
    if ($act_pos > 0 && $act_count == 1) {
        $a = floatval(substr($exp, 0, $act_pos));
        $b = floatval(substr($exp, (strlen($exp) - $act_pos - 1) * (-1)));
    } else {
        array_unshift($_SESSION[SESSION_KEY], 'Bad expression');
        return 'Bad expression';
    }
    $calculator = new Calculator();

    $calculator->setBoth($a, $b);

    switch ($exp[$act_pos]) {
        case '+':
            $result = $calculator->sum();
            break;
        case '-':
            $result = $calculator->minus();
            break;
        case '*':
            $result = $calculator->multi();
            break;
        case '/':
            $result = $calculator->div();
            break;
        case '^':
            $result = $calculator->pow();
            break;
    }

    $output = $exp . ' = ' . $result;;
    array_unshift($_SESSION[SESSION_KEY], $output);
    return $output;
}

function clear_data()
{
    if (isset($_SESSION[SESSION_KEY])) {
        $_SESSION[SESSION_KEY] = array();
    }
}

?>

<?php

function calculate($exp)
{
    $actions = ['+', '-', '*', '/'];
    $act_pos = 0;
    for ($i = 0; $i < strlen($exp); $i++) {
        if (in_array($exp[$i], $actions)) {
            $act_pos = $i;
        }
    }
    if ($act_pos > 0) {
        $a = intval(substr($exp, 0, $act_pos));
        $b = intval(substr($exp, (strlen($exp) - $act_pos - 1) * (-1)));
    } else {
        return 'Bad expression';
    }
    switch ($exp[$act_pos]) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $a / $b;
            break;
    }
    return $exp . ' = ' . $result;
}


?>

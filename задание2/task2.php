<?php
$result = "";
if (isset($_POST['show_result'])) {
    $op1 = (int)$_POST['operator1'];
    $op2 = (int)$_POST['operator2'];
    $result = "";
    $operation = $_POST['operation'];

    if ($operation == 'Сложение') {
        $result = $op1 + $op2;
        $equationString = $op1 . ' + ' . $op2 . ' = ' . $result;
    }

    else if ($operation == 'Вычитание') {
        $result = $op1 - $op2;
        $equationString = $op1 . ' - ' . $op2 . ' = ' . $result;
    }

    else if ($operation == 'Умножение') {
        $result = $op1 * $op2;
        $equationString = $op1 . ' &times; ' . $op2 . ' = ' . $result;
    }

    else if ($op2 == 0) {
            echo 'Делить на ноль нельзя';
        }
        else {
            $result = $op1 / $op2;
            $equationString = $op1 . ' &divide; ' . $op2 . ' = ' . $result;
        }

}


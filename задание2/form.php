<?php
    require(__DIR__ . '/task2.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор на 4 арифметических действия</title>
    <style>
        body {
            font-size: 80px;
        }
        
        input {
            width: 200px;
            font-size: 80px;
        }

        select {
            font-size: 50px;
        }

        input[type=submit] {
            width: 270px;
        }

    </style>
</head>
<body>
    <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>" name="form-calculator">
        <div>
            <input type="text" name="operator1" required="required">
            <select name="operation" required="required">
                <option selected="selected">Выберите действие</option>
                <option value="Сложение">+</option>
                <option value="Вычитание">-</option>
                <option value="Умножение">&times;</option>
                <option value="Деление">&divide;</option>
            </select>
            <input type="text" name="operator2" required="required">
            <div>
                <? if (isset($equationString)): ?>
                    <span><?=$equationString?></span>
                <?endif;?>
            </div>

        </div>
        <br>
        <input type="submit" name="show_result" value="Расчет">
        

    </form>

</body>
</html>
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>
<body>
    <h1>計算結果</h1>
    <?php switch ($operator) {
        case 'addition':
            $result = $num1 + $num2;
            echo $num1 . ' + ' . $num2 . ' = ' . $result;
            break;
        case 'subtraction':
            $result = $num1 - $num2;
            echo $num1 . ' - ' . $num2 . ' = ' . $result;
            break;
        case 'multiplication':
            $result = $num1 * $num2;
            echo $num1 . ' * ' . $num2 . ' = ' . $result;
            break;
        case 'division':
            $result = $num1 / $num2;
            echo $num1 . ' / ' . $num2 . ' = ' . $result;
            break;
    }
    ?>
    <p><a href="calc_form.php">戻る</a></p>
</body>
</html>

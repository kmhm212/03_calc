<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];
switch ($operator) {
    case 'addition':
        $result = $num1 + $num2;
        $op = ' + ';
        break;
    case 'subtraction':
        $result = $num1 - $num2;
        $op = ' - ';
        break;
    case 'multiplication':
        $result = $num1 * $num2;
        $op = ' * ';
        break;
    case 'division':
        $result = $num1 / $num2;
        $op = ' / ';
        break;
}
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
    <?= $num1 . $op . $num2 . ' = ' . $result ?>
    <p><a href="calc_form.php">戻る</a></p>
</body>
</html>
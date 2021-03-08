<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算アプリ</title>
</head>
<body>
    <h1>計算アプリ</h1>
    <h2>計算式を入力して下さい</h2>
    <form action="answer.php" method="get">
        <input type="number" name="num1" id="num1" required>
        <select name="operator" id="operator" required>
            <option value="addition">+</option>
            <option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="number" name="num2" id="num2" required>
        <input type="submit" value="計算">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare act</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="age" id="age" placeholder="Age" min="10" max="80" required><br>
        <input type="number" name="distance" id="distance" placeholder="Distance (km)" required><br>
        <button type="submit" name="btn_compute">Compute</button>
    </form>

<?php
include 'Fare.php';

if (isset($_POST['btn_compute'])) {
    $age = $_POST['age'];
    $distance = $_POST['distance'];

    // インスタンス作成
    $fare = new Fare();

    // 値をセット
    $fare->setValues($age, $distance);

    // 計算結果を取得
    $result = $fare->computeFare();

    // 表示
    echo "<p>Age: $age years old</p>";
    echo "<p>Distance:$distance km</p>";
    echo "<p>$result</p>";
}
?>
</body>
</html>
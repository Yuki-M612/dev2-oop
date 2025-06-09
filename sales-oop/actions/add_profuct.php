<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    try {
        // DB接続
        $pdo = new PDO("mysql:host=localhost;dbname=sales_oop", "root", "");

        // INSERT文でデータ追加
        $stmt = $pdo->prepare("INSERT INTO products (product_name, price, quantity) VALUES (?, ?, ?)");
        $stmt->execute([$product_name, $price, $quantity]);

        // 一覧ページに戻る
        header("Location: ../views/dashboard.php");
        exit();

    } catch (PDOException $e) {
        die("エラー: " . $e->getMessage());
    }
}
?>
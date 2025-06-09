<?php
require_once '../classes/Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $db = new Database();
    $conn = $db->connect();

    $stmt = $conn->prepare("UPDATE products SET product_name = ?, price = ?, quantity = ? WHERE id = ?");
    $result = $stmt->execute([$name, $price, $quantity, $id]);

    if ($result) {
        header("Location: ../views/dashboard.php");
        exit;
    } else {
        echo "更新に失敗しました。";
    }
}
?>
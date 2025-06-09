<?php
session_start();

// データベース接続
$host = "localhost";
$dbname = "sales_oop";
$dbuser = "root";
$dbpass = "root";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $e) {
    die("接続失敗: " . $e->getMessage());
}

// フォームが送信されたか確認
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // ユーザーを検索
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password"])) {
        // ログイン成功！
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        header("Location: ../views/dashboard.php");
        exit();
    } else {
        echo "ユーザー名またはパスワードが間違っています。";
    }
}
?>
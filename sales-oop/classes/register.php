<?php
// データベース接続
$host = "localhost";
$dbname = "sales_oop";
$username = "root"; // XAMPPの人はたいてい root
$password = "";     // XAMPPならパスワードは空

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("データベース接続エラー: " . $e->getMessage());
}

// フォームが送信されたか確認
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // 安全なハッシュ

    // SQLにデータを入れる
    $sql = "INSERT INTO users (first_name, last_name, username, password)
            VALUES (:first_name, :last_name, :username, :password)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":first_name", $first_name);
    $stmt->bindParam(":last_name", $last_name);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);

    if ($stmt->execute()) {
        echo "登録成功！ログインページに移動してください。";
    } else {
        echo "登録に失敗しました。";
    }
}
?>
<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// データベース接続
$pdo = new PDO("mysql:host=localhost;dbname=sales_oop", "root", "");

// 商品データ取得
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 10px;
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-4">
  <h2 class="mb-4">📦 商品一覧</h2>
  <a href="add_product.php" class="btn btn-success mb-3">➕ 商品を追加</a>

  <table class="table table-bordered table-striped bg-white shadow-sm">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>商品名</th>
        <th>価格</th>
        <th>在庫数</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product): ?>
        <tr>
          <td><?= $product['id'] ?></td>
          <td><?= htmlspecialchars($product['product_name']) ?></td>
          <td>₱<?= number_format($product['price'], 2) ?></td>
          <td><?= $product['quantity'] ?></td>
          <td>
            <a href="edit_product.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">編集</a>
            <a href="../actions/delete_product.php?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('本当に削除しますか？')">削除</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
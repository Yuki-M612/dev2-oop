<?php
// 実際はDBから取得（今回はテスト用に仮のデータ）
$product = [
  'id' => 1,
  'product_name' => 'Sample Product',
  'price' => 120,
  'quantity' => 5
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background: #f8f9fa;
    }
    .edit-box {
      max-width: 500px;
      margin: 80px auto;
      padding: 30px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }
    .edit-header {
      text-align: center;
      color: #ffa500;
      font-size: 1.8rem;
      margin-bottom: 20px;
    }
    .edit-header i {
      font-size: 2rem;
      margin-bottom: 10px;
    }
    .btn-warning {
      width: 100%;
    }
  </style>
</head>
<body>

<div class="edit-box">
  <div class="edit-header">
    <i class="fas fa-edit"></i><br>
    Edit Product
  </div>

  <form action="../actions/update_product.php" method="POST">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">

    <div class="mb-3">
      <label class="form-label">Product Name</label>
      <input type="text" class="form-control" name="product_name" value="<?= $product['product_name'] ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Price</label>
      <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="number" step="0.01" class="form-control" name="price" value="<?= $product['price'] ?>" required>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Quantity</label>
      <input type="number" class="form-control" name="quantity" value="<?= $product['quantity'] ?>" required>
    </div>

    <button type="submit" name="update_product" class="btn btn-warning">Update</button>
  </form>
</div>

</body>
</html>
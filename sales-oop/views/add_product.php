<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .modal-box {
      max-width: 500px;
      margin: 80px auto;
      padding: 30px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }
    .modal-header {
      text-align: center;
      font-size: 1.5rem;
      font-weight: bold;
      color: #00bfff;
    }
    .modal-header i {
      font-size: 2rem;
      margin-bottom: 10px;
    }
    .form-control::placeholder {
      color: #ccc;
    }
    .btn-custom {
      background-color: #00bfff;
      color: white;
    }
    .btn-custom:hover {
      background-color: #00aee0;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="modal-box">
  <div class="modal-header">
    <i class="fas fa-box"></i><br>
    Add Product
  </div>
  <form action="../actions/add_product.php" method="POST">
    <div class="mb-3 mt-4">
      <label for="product_name" class="form-label">Product Name</label>
      <input type="text" name="product_name" class="form-control" placeholder="Enter product name" required>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="price" class="form-label">Price</label>
        <div class="input-group">
          <span class="input-group-text">$</span>
          <input type="number" step="0.01" name="price" class="form-control" required>
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" name="quantity" class="form-control" required>
      </div>
    </div>
    <button type="submit" name="save_product" class="btn btn-custom w-100">Add</button>
  </form>
</div>

</body>
</html>
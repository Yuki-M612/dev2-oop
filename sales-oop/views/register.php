<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN（デザインをきれいにするためのCSS） -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- アイコンのCDN（Font Awesome） -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ccc;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-box {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 500px;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-register {
      background-color: #e63946;
      color: white;
      border-radius: 8px;
      font-weight: bold;
    }

    .btn-register:hover {
      background-color: #d62828;
    }

    .header-icon {
      color: #e63946;
      font-size: 2.5rem;
    }

    .close-button {
      position: absolute;
      top: 10px;
      right: 20px;
      font-size: 1.5rem;
      color: #aaa;
      cursor: pointer;
    }

    .close-button:hover {
      color: black;
    }
  </style>
</head>
<body>

  <div class="position-relative">
    <div class="register-box">
      <!-- 閉じるボタン -->
      <div class="close-button">&times;</div>

      <!-- ヘッダー -->
      <div class="text-center mb-4">
        <i class="fas fa-user-plus header-icon"></i>
        <h3 class="text-danger fw-bold mt-2">Registration</h3>
      </div>

      <!-- フォーム -->
      <form method="POST" action="../actions/register.php">
        <div class="row mb-3">
          <div class="col">
            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
          </div>
          <div class="col">
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
          </div>
        </div>
        <div class="mb-3">
          <input type="text" name="username" class="form-control bg-light" placeholder="Username" required>
        </div>
        <div class="mb-4">
          <input type="password" name="password" class="form-control bg-light" placeholder="Password" required>
        </div>
        <button type="submit" name="register" class="btn btn-register w-100">Register</button>
      </ふぉr>
    </div>
  </div>

</body>
</html>

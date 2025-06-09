<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ccc;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }
    .btn-login {
      background-color: #457b9d;
      color: white;
      border-radius: 8px;
      font-weight: bold;
    }
    .btn-login:hover {
      background-color: #1d3557;
    }
    .header-icon {
      color: #457b9d;
      font-size: 2.5rem;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <div class="text-center mb-4">
      <i class="fas fa-lock header-icon"></i>
      <h3 class="text-primary fw-bold mt-2">Login</h3>
    </div>

    <form method="POST" action="../actions/login.php">
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
      </div>
      <div class="mb-4">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" name="login" class="btn btn-login w-100">Login</button>
    </form>
  </div>

</body>
</html>
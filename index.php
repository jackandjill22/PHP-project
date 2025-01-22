<?php include 'server.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>


<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg" style="width: 24rem;">
      <h4 class="text-center mb-4">Login</h4>

      <form actions="server.php" method="post">
        <div class="mb-3">
          <label for="email"  class="form-label">Email address</label>
          <input type="text" name="username" class="form-control" id="email" placeholder="Enter your username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            
        </div>
        <button type="submit" name="login_user" class="btn btn-primary w-100">Login</button>
      </form>

    </div>
  </div>
  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
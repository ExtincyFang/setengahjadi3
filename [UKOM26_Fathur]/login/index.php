<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | Aspirasi Siswa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-info bg-gradient shadow fixed-top">
  <div class="container">
    <a href="../" class="navbar-brand fw-bold">HearMe!</a>
  </div>
</nav>

<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="col-md-4">

    <div class="card shadow">
      <div class="card-body p-4">

        <h3 class="text-center mb-3 fw-bold">Aspirasi Siswa</h3>
        <p class="text-center text-muted mb-4">
          Masuk untuk menyampaikan aspirasimu
        </p>

        <!-- FORM LOGIN -->
        <form action="login_proses.php" method="POST">

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-info text-light mt-2">
              login
            </button>
          </div>

        </form>

        <hr>

        <p class="text-center mb-0">
          Belum punya akun?
          <a href="#" class="text-decoration-none">Daftar</a>
        </p>

      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

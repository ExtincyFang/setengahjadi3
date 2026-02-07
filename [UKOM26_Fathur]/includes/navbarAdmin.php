
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= base_url ?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url ?>bootstrap-icons/bootstrap-icons.css">
</head>

<body class="d-flex flex-column min-vh-100">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-info bg-gradient shadow">
        <div class="container">
            <a href="<?= base_url."admin"; ?>" class="navbar-brand fw-bold">HearMe!</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a href="<?= base_url. "admin/kelas"; ?>" class="nav-link <? if($_SESSION['menu']=="kelas") 
                    {echo "active";}; ?>">Kelas</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Siswa</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Kategori</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Aspirasi</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Umpan Balik</a></li>
                  </ul>
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="../login/logout.php" class="btn btn-light text-primary">Keluar</a></li>
                  </ul>
            </div>
        </div>
    </nav>
  
</body>
</html>
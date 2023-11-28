<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo SPK AHP V.2023 by Harry Witriyono, M.Kom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="assets/js/web.webmanifest">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">AHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="formalternatif.php" target="frmmenu">Alternatif</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formkriteria.php" target="frmmenu">Kriteria</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Hasil Hitung</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="bobotkriteria.php" target="frmmenu">Kriteria Bobot</a></li>
            <li><a class="dropdown-item" href="hasilhitungkriteria.php" target="frmmenu">Hasil Hitung Kriteria</a></li>
            <li><a class="dropdown-item" href="#">Hitung Kriteria pada Alternatif pakai AHP</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <iframe name="frmmenu" src="" width="100%" height="500px"></iframe>  
</div>
</body>
</html>

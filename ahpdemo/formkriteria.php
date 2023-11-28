<!DOCTYPE html>
<html lang="en">
<head>
  <title>AHP Demo V.2023 - Form Kriteria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<div class="container">
<h2>Form Kriteria</h2>
<form method="post">
<div class="form-group row">
    <label for="KodeKriteria" class="col-4 col-form-label">Kode Kriteria</label> 
    <div class="col-8">
      <input id="KodeKriteria" name="KodeKriteria" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="NamaKriteria" class="col-4 col-form-label">Nama Kriteria</label> 
    <div class="col-8">
      <input id="NamaKriteria" name="NamaKriteria" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan Kriteria Baru</button>
    </div>
  </div>
</form>
<?php if (isset($_POST['submit'])) {
    $KodeKriteria=filter_var($_POST['KodeKriteria'],FILTER_SANITIZE_STRING);
    $NamaKriteria=filter_var($_POST['NamaKriteria'],FILTER_SANITIZE_STRING);
    include('koneksi.db.php');
    $sql="INSERT INTO `kriteria`(`KodeKriteria`, `NamaKriteria`) VALUES ('".$KodeKriteria."','".$NamaKriteria."')";
    $q=mysqli_query($koneksi,$sql);
    mysqli_close($koneksi);
    if ($q) {
        echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> Record sudah tersimpan !.
      </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Gagal!</strong> Rekord gagal disimpan !.
      </div>';
    }
}
?>

<h2>Daftar Kriteria</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:20%;">Kode Kriteria</th>
    <th style="width:60%;">Nama Kriteria</th>
    <th>Aksi</th>
  </tr>
  <?php
  include('koneksi.db.php');
  $sql="SELECT * FROM `kriteria`";
  $q=mysqli_query($koneksi,$sql);
  $r=mysqli_fetch_array($q);
  if (empty($r)) {
    echo '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Tabel Kosong!</strong> Rekord tabel tidak ada !.';
    exit();
  }
  do {
  ?>
  <tr>
    <td><?php echo $r['KodeKriteria'];?></td>
    <td><?php echo $r['NamaKriteria'];?></td>
    <td>
    <a class="btn btn-success" href="koreksikriteria.php?KodeKriteria=<?php echo $r['KodeKriteria'];?>" title="Koreksi">✏️</a>
    <a class="btn btn-info" href="bobotkriteria.php?KodeKriteria=<?php echo $r['KodeKriteria'];?>" title="Bobot">📈</a>
    <a class="btn btn-danger" href="hapusalkriteria.php?KodeKriteria=<?php echo $r['KodeKriteria'];?>" title="Hapus" onclick="return confirm('Apakah yakin akan dihapus ?')">🗑️</a>
    </td>
  </tr>
  <?php 
  } while($r=mysqli_fetch_array($q));
  ?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</div>
</body>
</html>
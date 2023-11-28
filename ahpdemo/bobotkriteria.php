<!DOCTYPE html>
<html lang="en">
<head>
  <title>AHP Demo V.2023 - Form Kriteria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
<h2>Bobot Kriteria</h2>
<table class="table table-striped table-bordered">
    <thead>
    <?php 
    include('koneksi.db.php');
    $sql="select * from kriteria";
    $q=mysqli_query($koneksi,$sql);
    $r=mysqli_fetch_array($q);
    ?>
      <tr>
        <th>Kriteria</th>
        <?php do { ?>
        <th><?php echo $r['NamaKriteria'];?></th>
        <?php }while($r=mysqli_fetch_array($q));?>
      </tr>
    </thead>
    <tbody>
    <?php 
      $q=mysqli_query($koneksi,$sql);
      $r=mysqli_fetch_array($q);
      do { ?>    
      <tr>
        <td><?php echo $r['NamaKriteria'];?></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <?php }while($r=mysqli_fetch_array($q));?>
    </tbody>
  </table>
</div>
</body>
</html>
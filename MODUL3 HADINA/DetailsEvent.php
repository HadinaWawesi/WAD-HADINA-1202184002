<?php

$id = $_GET["id"];
//konesi ke database
$conn = mysqli_connect("localhost","root","","wad_modul3_hadinaw");

//ambil data dari database
$result = mysqli_query($conn,"SELECT * FROM event_table WHERE id = $id");

?>

<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<title>Details Event</title>
<style>
h5{
text-align: center;font-family: courier;}
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light"style="background-color:#80daeb; font-family: courier;">
  <a class="navbar-brand" href="#"><b>EAD EVENTS</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">  
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="navbar-brand" href="Home.php">Home <span class="sr-only">(current)</span></a>
      <button type="button" class="btn btn-secondary"><a href="BuatEvent.php"></a> Buat Event</button>
    </form>
  </div>
</nav>
<br>
<h5>Detail Event!</h5>

<?php
while ($row = mysqli_fetch_assoc($result)): ?>
<div class="card" style="width: 18rem;">
  <img src="<?php echo $row["gambar"]; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $row["name"]; ?></h5>
    <b>Deskripsi</b>
    <p class="card-text"><?php echo $row["deskripsi"]; ?></p>
    <b>Informasi Event</b>
    <p class="card-text"><?php echo $row["tanggal"]; ?></p>
    <p class="card-text"><?php echo $row["tempat"]; ?></p>
    <p class="card-text"><?php echo $row["mulai"]; ?></p>
    <b class="card-text">Kategori : <?php echo $row["kategori"]; ?></b>
    <br>
    <br>
    <b class="card-text">Harga : <?php echo $row["harga"]; ?></b>
    <br>
    <br>
    <b>Benefit :</b>
    <p class="card-text"><?php echo $row["benefit"]; ?></p>
    <a href="Edit.php?id=<?=$row["id"]; ?>" class="btn btn-primary">Edit</a>
    <a href="Hapus.php?id=<?=$row["id"]; ?>" class="btn btn-danger">Delete</a>
  </div>
</div>
<?php endwhile;  ?>
</body>
</html>
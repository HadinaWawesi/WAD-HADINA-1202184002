<?php 
$id = $_GET["id"];

//konesi ke database
$conn = mysqli_connect("localhost","root","","wad_modul3_qinthar");

  $edit= query("SELECT * FROM event_table WHERE id = $id")[0];

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

if(isset($_POST["submit"])){
    
  $name = $_POST["name"];
  $deskripsi = $POST["deskripsi"];
  $gambar = $_POST["gambar"];
  $kategori = $_POST["kategori"];
  $tanggal = $_POST["tanggal"];
  $mulai = $_POST["mulai"];
  $berakhir = $_POST["berakhir"];
  $tempat = $_POST["tempat"];
  $harga = $_POST["harga"];
  $benefit = $_POST["benefit"];


  //query edit data
  $query = "UPDATE event_table SET 
  name = '$name',
  deskripsi = '$deskripsi',
  gambar ='$gambar',
  kategori = '$kategori',
  tanggal = '$tanggal',
  mulai= '$mulai',
  berakhir='$berakhir',
  tempat = '$tempat',
  harga = '$harga',
  benefit = '$benefit'
  WHERE id =$id
  ";

  mysqli_query($conn,$query);

  //cek keberhasilan data di tambah atau tidak
  if(mysqli_affected_rows($conn) > 0){
    echo "<script> alert ('data berhasil diubah!');
    document.location.href= 'Home.php';
    </script>
    
    ";
  }else {
    echo "<script> alert ('data gagal diubah!');
    document.location.href= 'Home.php';
    </script>
    
    ";
    
  }


}

?>

<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<title>Buat Event</title>
<style>
h5{
text-align: left;font-family: courier;}
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
    <input type="hidden" name="id" value="<?= $edit["id"]; ?>">

      <a class="navbar-brand" href="home.php">Home <span class="sr-only">(current)</span></a>
      <button type="button" class="btn btn-secondary">Buat Event</button>
    </form>
  </div>
</nav>
<br>
<h5>Edit Event!</h5>    
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <form action="" mehtod="POST">
      <div class="form-group">
      <label for="formGroupExampleInput"><b>Name</b></label>
      <input value="<?= $edit["name"]; ?>" name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
      </div>
      <div class="form-group">
      <label for="formGroupExampleInput2"><b>Deskripsi</b></label>
      <input value="<?= $edit["deskripsi"]; ?>" name="deskripsi" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Deskripsi">
      </div>
      <div class="form-group">
      <label for="formGroupExampleInput3"><b>Upload Gambar</b></label>
      <div class="custom-file">
      <input name="gambar" type="file" class="custom-file-input" id="customFile">
      <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
      </div>
      <div class="form-group">
      <label for="formGroupExampleInput4"><b>Kategori</b></label>
      <br>
      <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline1" name="online" class="custom-control-input">
      <label class="custom-control-label" for="customRadioInline1"><b>Online</b></label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline2" name="offline" class="custom-control-input">
      <label class="custom-control-label" for="customRadioInline2"><b>Offline</b></label>
      </div>
      </div>
    </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <div class="form-group">
      <label for="tanggal"> <b> Tanggal </b> </label> <br>
      <input value="<?= $edit["tanggal"]; ?>" name="tanggal" type="date" class="form-control" id="tanggal" placeholder="dd/mm/yyyy">
      </div>
      <div class="form-group">
      <div class="form-check form-check-inline">
      <label for="jammulai"> <b> Jam Mulai </b> </label>
      <input value="<?= $edit["mulai"]; ?>" name="mulai" type="time" class="form-control" id="jammulai" placeholder="">
      </div>
      <div class="form-check form-check-inline">
      <label for="jamberakhir"> <b> Jam Berakhir </b> </label>
      <input value="<?= $edit["berakhir"]; ?>" name="berakhir" type="time" class="form-control" id="jamberakhir" placeholder="">
      </div>
      </div>
      <div class="form-group">
      <label for="tempat"> <b> Tempat </b> </label>
      <input value="<?= $edit["tempat"]; ?>" name="tempat" type="text" class="form-control" id="tempat" placeholder="">
      </div>
      <div class="form-group">
      <label for="Harga"> <b> Harga </b> </label>
      <input value="<?= $edit["harga"]; ?>" name="harga" type="text" class="form-control" id="harga" placeholder="">
      </div>
      <div class="form-group">
      <label for="benefit"> <b> Benefit </b> </label>
      <br>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
      <label name="snacks" class="form-check-label" for="inlineCheckbox1"> Snacks </label>
      </div>
      <div class="form-check form-check-inline">
       <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
       <label name="sertifikat" class="form-check-label" for="inlineCheckbox2"> Sertifikat </label>
       </div>
       <div class="form-check form-check-inline">
       <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
       <label name="souvenir" class="form-check-label" for="inlineCheckbox2"> Souvenir </label>
       </div>
       <br>
       <div>
       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
       <button type="button" class="btn btn-danger">Cancel</button>
       </div>
    </div>
  </div>
</div>
       </form>
</body>
</html>
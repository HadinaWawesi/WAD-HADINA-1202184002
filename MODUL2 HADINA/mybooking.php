<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>MyBooking</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="container d-flex justify-content-center align-item-center">
                <div class="navbar-nav">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="BookingPage.php">Booking</a>
                </div>
                </div>
            </div>
        </nav>

    <!-- PHP booking -->
<?php
$phone = $_GET ['phone'];
$service = $_GET['service1'];
$count = count($_GET['service1']);
$name = $_GET['name'];
$checkin = $_GET['checkin'];
$duration=$_GET['inputDuration'];
$chekout= $checkin. " + ". $duration. " Days" ;
$roomtype = $_GET['roomtype'];
?>

<!-- tabel konten -->
<div class="container" style="padding-top: 50px; ">
<div class="col-md-20 col-sm-30 pr-0">
<div style="margin-top: 100;">
    <table class="table table-borderless">
    <thead>
    <tr>
      <th scope="col" class="card-header">Booking Number</th> 
      <th scope="col" class="card-header">Name</th>
      <th scope="col" class="card-header">Check-in </th>
      <th scope="col" class="card-header">Check-out</th>
      <th scope="col" class="card-header">Room Type</th>
      <th scope="col" class="card-header">Phone Number</th>
      <th scope="col" class="card-header">Service</th>
      <th scope="col" class="card-header">Total Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> <?php echo(rand(100000,9800000)); ?> </td>
      <td><?= $name ?> </td>
      <td><?= $checkin ?> </td>
      <td><?= date('Y-m-d', strtotime($chekout))?></td>
      <td><?= $roomtipe ?> </td>
      <td><?= $phone ?> </td>
      
<!-- //php service// -->
      <td>
      <?php
        if (!empty($_GET['service1'])) {
          foreach($_GET['service1'] as $value) {
            echo $value . '<br>' ;
            }
          } 
        else {
            echo "no service";
            }
      ?>
      </td>

<!-- //php hitung// -->
      <td>
      <?php           
        if($roomtype=='Standard'){
          $TotalPrice =($duration*90) + ($count*20);
            echo '$'. $TotalPrice ;}
        else if($roomtype=='Superior'){
          $TotalPrice =($duration*150) + ($count*20);
            echo '$'. $TotalPrice;}
        else if($roomtype=='Luxury'){
          $TotalPrice =($duration*200) + ($count*20);
            echo '$'. $TotalPrice;}
       ?>
      </td>

    </tr>
    </tbody>
    </table>
</div>
</div>
</div>  

</body>
</html>
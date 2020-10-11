<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Booking Page</title>
</head>
<style>
    * {
      box-sizing: border-box;
    }
    
    /* Create two equal columns that floats next to each other */
    .column {
      float: left;
      width: 50%;
      padding: 10px;
      height: 300px; /* Should be removed. Only for demonstration */
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    </style>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
           
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            
             <span class="navbar-toggler-icon"></span>]
           </button>
           <div>
           
           <!--untuk membuat navbar-->
           <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 16.00cm; ">
             <ul class="navbar-nav">
               <li class="nav-item active">
                 <a class="nav-link" href="home.php" style="color: black">Home<span class="sr-only">(current)
                   </span></a>


               <li>                                                                                                                               
               <li class="nav-item">
                 <a class="nav-link" href="BookingPage.php" style="color: black">Booking</a>
             </ul>
           </div>
        </nav>

        <div class="row">
            <div class="column" style="background-color:white; margin-top: 3cm;">
                <form action="mybooking.php" style="margin-left: 5cm;" method="get">
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" value="" style="width: 8cm;"><br><br>

                    <label for="inputCheck">Check-in </label><br>
                    <input type="date" id="checkin" name="checkin" style="width: 8cm;"><br><br>
                  
                    
                    <label for="duration">Duration</label><br>
                    <input type="text" id="duration" name="inputDuration" value="" style="width: 8cm;"><br>
                    <p style="font-size: smaller;">Day(s)</p> 

                    <label for="roomType">Room Type </label><br>
                    <div class="form-group">
          
    <?php
    if(isset($_POST['bt1'])){
      echo '<select class="form-control" id="roomtype" name="roomtype"  value="standard">
       <option>Standard</option>
      </select>';
    }
      elseif (isset($_POST['bt2'])) {
        echo '<select class="form-control" id="roomtype" name="roomtype" value="superior">
         <option>Superior</option>
          </select>';
      }
        elseif (isset($_POST['bt3'])) {
          echo ' <select class="form-control" id="roomtype" name="roomtype"  value="luxury">
           <option>Luxury</option>
            </select>';
        }
        else {
          echo ' <select class="form-control" id="roomtype" name="roomtype">';
          echo '<option>Standard </option>';
          echo '<option>Superior </option>';
          echo '<option>luxury </option>';
          echo'</select>';
          }
      ?>
  </div>

                    
            <label for="service">Add Service(s) </label>
            <small class="form-text text-muted">$ 20/service</small>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Room Service" id="room" name="service1[]">
            <label class="form-check-label" for="room">Room Service</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Breakfast" id="breakfast" name="service1[]">
            <label class="form-check-label" for="breakfast">Breakfast</label>
            </div> 
            
            <div class="form-group">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" name="phone" id="phone number">
            </div>
            
            
            
            
            <br><br>

            
                   <div class="form-group col-md-8">  
                        <button><a href= "mybooking.php" type="Book" class="btn btn-primary btn-block"> Book
        </a>
                        </button>
                        </div>

                </form>
            </div>

        <div class="column" style="background-color:white;">

       <!--untuk mengganti gambar yang ada di booking tab-->
       <div class="column" style="background-color:white; margin-top: 50px">
       <?php
                  if (array_key_exists('button1', $_POST)) {
                    echo "<img src='gambar1.jpg' class='card-img-top' alt='gambar1' 
                      style='margin-top: 3.75cm; height: 10cm; width: 10cm; margin-left: 1cm'>";
  
                  } else if (array_key_exists('button2', $_POST)) {
                    echo "<img src='gambar2' class='card-img-top' alt='gambar2' 
                      style='margin-top: 3.75cm; height: 10cm; width: 10cm; margin-left: 1cm'>";
  
                  } else if(array_key_exists('button3', $_POST)) {
                    echo "<img src='gambar3.jpg' class='card-img-top' alt='gambar3' 
                      style='margin-top: 3.75cm; height: 10cm; width: 10cm; margin-left: 1cm'>";
  
                  } else {
                    echo "<img src='gambar2.jpg' class='card-img-top' alt='gambar1' 
                      style='margin-top: 3.75cm; height: 10cm; width: 10cm; margin-left: 1cm'>";

              
                  }   
          ?>
        </div>
        </div>
</body>
</html>
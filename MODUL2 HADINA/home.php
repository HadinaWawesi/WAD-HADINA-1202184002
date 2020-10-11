<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home</title>
</head>

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

        <p style="margin-top: 2cm; ">
            <h4 style="text-align: center; color: #00FFFF;"><b> EAD HOTEL</b></h4>
            <h5 style="text-align: center; color: #00FFFF;"><b>Welcome To 5 Star Hotel</b></h5>
        </p> <br><br>


    <div class="container" style>

        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; text-align: center">
                <form action = "BookingPage.php" method= "post">
                    <img src="gambar1.jpg" class="card-img-top" alt="gambar">
                    <div class="card-body top">
                        <h6 class="card-title"> Standard </h6>
                        <p class="card-text price" style="color: #00CDE1">$ 90/Day</p>
                    </div>
                    <ul class="list-group list-group-flush lig">
                        <li class="list-group-item facilities">Facilities</li>
                        <li class="list-group-item">1 Single Bed</li>
                        <li class="list-group-item">1 Bathroom</li>
                    </ul>
                    <div class="card-body grey-color">
                    <input type = "submit" class="btn btn-primary" name ="button1" class="btn btn primary"  value ="Book Now" />
                           </form>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">

                <div class="card" style="width: 18rem; text-align: center;">
                <form action="BookingPage.php" method="post">
                <img src="gambar2.jpg" class="card-img-top" alt="gambar2">
                    <div class="card-body top">
                        <h6 class="card-title"> Superior </h6>
                        <p class="card-text price" style= "color: #00CDE1">$ 150/Day</p>
                    </div>
                    <ul class="list-group list-group-flush lig">
                        <li class="list-group-item facilities">Facilities</li>
                        <li class="list-group-item">1 Double Bed</li>
                        <li class="list-group-item">1 Television and Wi-Fi</li>
                        <li class="list-group-item">1 Bathroom and Hot Water</li>
                    </ul>
                    <div class="card-body grey-color">
                        <input type = "submit" class="btn btn-primary" name ="button1" class="btn btn primary"  value ="Book Now" />
                          </form>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="card" style="width: 18rem; text-align: center">
                <form action="BookingPage.php" method="post">
                    <img src="gambar3.jpg" class="card-img-top" alt="gambar3">
                    <div class="card-body top">
                        <h5 class="card-title">Luxury</h5>
                        <p class="card-text price" style= "color: #00CDE1">$ 200/Day</p>
                    </div>
                    <ul class="list-group list-group-flush lig">
                        <li class="list-group-item facilities">Facilities</li>
                        <li class="list-group-item">2 Double Bed</li>
                        <li class="list-group-item">2 Bathroom and hot water</li>
                        <li class="list-group-item">1 Kitchen</li>
                        <li class="list-group-item">1 Television and Wi-fi</li>
                        <li class="list-group-item">1 Workroom</li>
                    </ul>
                    <div class="card-body  grey-color">
                    <input type = "submit" class="btn btn-primary" name ="button1" class="btn btn primary"  value ="Book Now" />
                          </form>
                        
                    </div>
                </div>
            </div>
        </div>


    </div>
    <br><br><br>
</body>

</html>
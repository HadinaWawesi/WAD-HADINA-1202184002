<!DOCTYPE html>
<html>
<head>
    <title>Profile | WAD Beauty</title>
    <link rel="stylesheet" href="data/css/bootstrap.css">
    <link rel="stylesheet" href="data/css/custom.css">
    <link rel="stylesheet" href="data/css/font-awesome.css">
</head>
<body style="background-color: white;">


<nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand">WAD Beauty</a>
    <form class="form-inline">
        <a class="nav-link" style="color:black;" href="Home.php"><i class="fa fa-shopping-cart"></i></a>
        <div class="navbar-expand">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Selamat Datang
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </form>
</nav>

<section class="container mt-5">
    <div class="row justify-content-center">
        <div style="width: 700px;">
            <h4 style="text-align: center;">Profile</h4>
            <br>
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password Confirm</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Warna</label>
                    <div class="col-sm-10">
                        <select>
                            <option selected>Choose...</option>
                            <option value="1">Light</option>
                            <option value="2">Dark</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <button type="button" class="btn btn-primary btn-block">Submit</button>
                    <button type="button" class="btn btn-secondary btn-block">Cancel</button>
                </div>
                
            </form>
        </div>   
    </div> 
</section>
<blockquote class="blockquote text-center mt-5">
    <footer class="blockquote-footer">&copy; 2020 Copyright; WAD Beauty </footer>
</blockquote>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</body>
</html>

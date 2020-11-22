<!DOCTYPE html>
<html>
<head>
    <title>Register | WAD Beauty</title>
    <link rel="stylesheet" href="data/css/bootstrap.css">
    <link rel="stylesheet" href="data/css/custom.css">
    <link rel="stylesheet" href="data/css/font-awesome.css">
</head>
<body style="background-color: white;">


<nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand">WAD Beauty</a>
    <form class="form-inline">
        <a class="nav-link" style="color:black;" href="Home.php">Login</a>
        <a class="nav-link" style="color:black;" href="Home.php">Register</a>
    </form>
</nav>



<section class="container mt-4">
    <div class="row justify-content-center">
        <div class="row justify-content-center mt-3 ">
            <div class="col-sm ">
                <div class="card p-5" style="width: 25rem;">
                    <h3 class="text-center mb-3">
                        Register
                    </h3>
                    <ul class="list-group list-group-flush">
                        <form>
                            <div class="form-group mt-3">
                                <label>Name</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group mt-3">
                                <label>Handphone Number</label>
                                <input type="text" class="form-control" name="nohp">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" class="password">
                            </div>
                            <div class="form-group">
                                <label>Password Confirmation</label>
                                <input type="password" class="form-control" class="konfpassword">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary justify-content-center mb-2">Register</button>
                                <p>Do you have any account? <a href="">Login</a></p>
                            </div>
                            
                        </form>
                    </ul>
                    </div>
            </div>
        </div> 
    </div>

    
    

</section>
</body>
</html>

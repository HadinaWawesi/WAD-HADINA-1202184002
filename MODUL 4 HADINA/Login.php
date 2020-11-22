<!DOCTYPE html>
<html>
<head>
    <title>LOGIN | WAD Beauty</title>
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
                        Login
                    </h3>
                    <ul class="list-group list-group-flush">
                        <form>
                            <div class="form-group mt-3">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input type="password" class="form-control" class="password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary justify-content-center mb-2">Login</button>
                                <p>Anda belum memiliki Akun? <a href="">Registrasi</a></p>
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

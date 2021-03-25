<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
</head>

<body>
    <?php 
        require_once('backend/userConnection.php');

    
    if(isset($_POST['email']) && isset($_POST['password'])){
        $rep = connectUser($_POST['email'] && $_POST['password'] );
        if($rep){
            //connecté
        }else{
            //pas connecté
        }
    }

    ?>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><a class="navbar-brand" href="/">FunMarket</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1"><a class="btn btn-primary ml-auto" role="button" href="/register">Sign Up</a></div>
        </div>
    </nav>
    <header class="masthead text-white text-center" style="background:url('assets/img/bg-masthead.jpg')no-repeat center center;background-size:cover;">
        <div class="overlay"></div>
        <div class="container">
          <form action="login.php" method=post>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" required disabled="false">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" id="password" class="form-control" required disabled="false">
            </div>
            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary main-button">Sign In</button>
            </div>
      
          </form>
      

        </div>
    </header>
    <section class="showcase"></section>
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto h-100 text-center text-lg-left">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"></li>
                    </ul>
                </div>
                <div class="col-lg-6 my-auto h-100 text-center text-lg-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#"></a></li>
                        <li class="list-inline-item"><a href="#"></a></li>
                        <li class="list-inline-item"><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
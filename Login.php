<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="registerStycle.css">
</head>
<body>
  <div id="Menu"></div>
    <nav class="navBar">

        <div class="NavMenuContainer">
          <a class="NavMenuLogo">FunMarket</a>

             <div class="NavMenuButtons" >

               <button role="button" onclick='register.php'>Sign Up</button>
            </div>
        </div>
    </nav>

    <header>
    <form method="post" action="./userConnectionHandler.php">
        <div class="SearchContainer">
            <div class="title"><h3>Log In</h3>
            <hr></div>
                
          <div class="form-group">
            <label>Email</label><br>
            <input type="email" name="email" class="form-input">
          </div>

          <div class="form-group">
            <label>Password</label><br>
            <input type="password" name="password" class="form-input">
          </div>

          <div class="registerB">
            <button type="submit" class="forme-button">Sign In</button>
    
       </form>
    </header>

        <footer>
            <div class="container">
                <a href="#">About</a> <a href="#">Contact</a>
            </div>
        </footer>
</body>

</html>
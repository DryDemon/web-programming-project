<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="registerStycle.css">
    </head>
    <body>
        <div id="Menu"></div>
        <nav class="navBar">
            
            <div class="NavMenuContainer">
                <a class="NavMenuLogo">FunMarket</a>
                
                <div class="NavMenuButtons">
                    
                <a style="    display: inline-block;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    border-radius: .25rem;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    text-align: center;
    vertical-align: middle;
    text-decoration: none;
" href="/Login.php">Sign In</a>
                </div>
            </div>
        </nav>

        <header>
           <form method="post" action="userRegistering.php">
            <div class="SearchContainer">


            
                <div class="title"><h3>Register yourself here</h3>
                <hr></div>
                
                <div class="form-group">
                    <label>Name</label><br>
                    <div class="mailcase">
                        <input type="text" name="username" class="form-input">
                    </div>
                    
              </div>
              <div class="form-group">
                <label>Email</label><br>
                <input type="email" name="email" class="form-input">
              </div>
              <div class="form-group">
                <label>Password</label><br>
                <input type="password" name="password" class="form-input">
              </div>
              <div class="registerB">
                <button type="submit" class="forme-button">Sign Up</button>
        
           </form>
        </header>

        <footer>
            <div class="container">
                <a href="#">About</a> <a href="#">Contact</a>
            </div>
        </footer>
    </body>


</html>
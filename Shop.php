<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Shop - FunMarket</title>
    <link rel="stylesheet" href="Style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
</head>

<body>
    <div id="Menu"></div>
    <nav class="navBar">

        <div class="NavMenuContainer">
            <a class="NavMenuLogo">FunMarket</a>

            <div class="NavMenuButtons">
                <a role="button" href="Product.php">Sell</a>
                <a role="button" href="#">Cart</a>
                <?php

                require_once("userConnection.php");


                if (isUserConnected()) {
                    echo '<a role="button" href="Profile.php">Profile</a>';
                } else {
                    echo '<a role="button" href="Login.php">Sign In</a>';
                }


                ?>

            </div>
        </div>
    </nav>

    <header>
        <div class="SideBarContainer">
            <div class="SideBarMenu">
                <ul class="SideBar-nav">
                    <li><a href="#Menu">Menu</a></li>
                    <li><a href="#Auction">Auction</a></li>
                    <li><a href="#BestOffer">Best Offer</a></li>
                    <li><a href="#InstantBuy">Instant Buy</a></li>
                </ul>
            </div>
        </div>

        <div class="SearchContainer">
            <div class="SearchPara">
                <h1>Any specifics ideas ?</h1>
            </div>
            <div class="SearchBarButton">
                <form>
                    <div class="Form">
                        <input class="form-input" type="text" placeholder="iPhoneX...">
                        <button class="forme-button" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <section class="Showcase">
        <div class="Container">
            <div class="product-list">
                <div class="ProductContainer">
                    <?php

                    require_once("getSql.php");

                    $result = getAllProductInDBByDate();
                    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
                        $name=$row["Name"];
                        $description=$row["Description"];
                        $category=$row["Category"];
                        $image=$row["Image"];
                        $video=$row["Video"];
                        $price=$row["Price"];

                        include("template/shopProduct.php");
                    }

                    ?>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <a href="#">About</a> <a href="#">Contact</a>
        </div>
    </footer>
</body>

</html>
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
                
                
<?php

require_once "userConnection.php";

if (isUserConnected()) {
    echo '<a role="button" href="Product.php">Sell</a>';
    echo '<a role="button" style="margin-left:0.25rem" href="Profile.php">Profile</a>';
    echo '<a role="button" style="margin-left:0.25rem" href="userDisconnect.php">Disconnect</a>';//user disconnect itself
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
                <form method="post" action="./Shop.php">
                    <div class="Form">
                        <input class="form-input" type="text" name="search" placeholder="iPhoneX..." <?php if (isset($_POST['search'])) {echo 'value="' . $_POST["search"] . '"';}?>/>
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

require_once "getSql.php";

$result = getAllProductInDBByDate();
while ($row = $result->fetch_array(MYSQLI_BOTH)) {
    $productRows[] = $row;
}

$result = getAllTransactionsInDBByDate();
while ($row = $result->fetch_array(MYSQLI_BOTH)) {
    $transactionRows[] = $row;
}

function isInSearch($row)
{
    $name = $row[1];
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        if ($search != "") {
            return strpos(strtolower($name), strtolower($search)) !== false;
        }
    }
    return true;
}

$productRows = (array_filter($productRows, "isInSearch"));

$categories = ["Auction"
    , "Best Offer"
    , "Instant Buy"];

foreach ($categories as $currentCategory) {

    foreach ($productRows as $row) {
        foreach ($transactionRows as $transaction) {

            if ($transaction["idproduct"] == $row["id"]) {

                $name = $row["Name"];
                $description = $row["Description"];
                $category = $row["Category"];
                $image = $row["Image"];
                $video = $row["Video"];
                $price = $row["Price"];
                $creationDate = $transaction["CreationDate"];
                $endDate = $transaction["EndDate"];
                $idSeller = $transaction["idSeller"];
                $type = $transaction["Type"];

                if ($currentCategory == $type) {

                    include "template/shopProduct.php";
                }
            }
        }
    }
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
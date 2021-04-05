<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Shop - FunMarket</title>
    <link rel="stylesheet" href="Style.css">
    <script type="text/javascript" src="ShopPrompt.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
</head>

<body>
    <div id="Menu"></div>
    <nav class="navBar">

        <div class="NavMenuContainer">
            <a class="NavMenuLogo">FunMarket</a>
            <?php

                require_once "userConnection.php";
                $utilisateur = getCurrentUserData();

                if (isUserConnected() && $utilisateur[3] == "Admin@admin.com") {
                    
                        echo '<a style="color:#f30808;">ADMIN</a>';
                    }
             ?>       

            <div class="NavMenuButtons">


                <?php

                require_once "userConnection.php";
                $utilisateur = getCurrentUserData();

                if (isUserConnected()) { //if the user is the Admin
                    echo '<a role="button" href="negociation.php" style="margin-right: .25rem;">Negoctiations</a>';
                    // echo '<button role="button" type="submit" onclick="NegociationPrompt()" class="forme-button">Negociations</button>';
                    if ($utilisateur[3] == "Admin@admin.com") {

                        echo '<a role="button" onclick="AdminPrompt()">User List</a>';
                        echo '<a role="button" style="margin-left:0.25rem" href="Profile.php">Profile</a>';
                        echo '<a role="button" style="margin-left:0.25rem" href="userDisconnect.php">Disconnect</a>'; //user disconnect itself
                    } else //if the user is a simple user
                    {

                        echo '<a role="button" href="Product.php">Sell</a>';
                        echo '<a role="button" style="margin-left:0.25rem" href="Profile.php">Profile</a>';
                        echo '<a role="button" style="margin-left:0.25rem" href="userDisconnect.php">Disconnect</a>'; //user disconnect itself
                    }
                } else { //if no one is connected
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
                    <?php
                    require_once "getSql.php";

                    $cats = array();

                    $result = getAllProductInDBByDate();
                    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
                        $productRows[] = $row;
                    }

                    if ($productRows != null) {
                        foreach ($productRows as $product) {
                            if (!in_array($product["Category"], $cats)) {
                                array_push($cats, $product["Category"]);
                            }
                        }
                    }

                    foreach ($cats as $cat) {
                            $checked = "";

                        echo "<li style='color:white;'><input onchange='reloadFilter()' type='checkbox' checked='checked' id='" . $cat . "' name='" . $cat . "'/><label for='" . $cat . "'>" . $cat . "</label></li>";
                    }

                    echo "<input name='cats' id='cats' type='hidden' value='".implode(",", $cats)."'/>";
                    ?>
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
                        <input class="form-input" type="text" name="search" placeholder="iPhoneX..." <?php if (isset($_POST['search'])) {
                                                                                                            echo 'value="' . $_POST["search"] . '"';
                                                                                                        } ?> />
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
                    $negociationRows = (array_filter($productRows, "isInSearch"));

                    $categories = [
                        "Auction", "Best Offer", "Instant Buy"
                    ];

                    if ($productRows != null && $transactionRows != null) {

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
                                        $productId = $row["id"];
                                        $type = $transaction["Type"];


                                        if ($currentCategory == $type) {

                                            include "template/shopProduct.php";
                                        }
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
    <dialog id="userlist">
            <form method="POST" action="adminUserRemove.php">
                <label>Select the user you want to remove.</label><br>
                <a type="button" onClick="CloseDialog()">Close</a>
                <button type="submit">Remove</button>

                <select name="userSelected">
                    <option value="">--Select a User--</option>
                    <?php
                    require_once("mysqlConnection.php");
                    $dbConn = MyConnection();
                    $userResult = $dbConn->query('SELECT Email FROM User WHERE Email != \'Admin@admin.com\';');

                    while ($row = $userResult->fetch_row()) {
                        echo '<option value="' . $row[0] . '">' . $row[0] . '</option>';
                    }
                    $dbConn . close();
                    ?>
                </select>

            </form>
    </dialog>
    <footer>
        <div class="container">
            <a href="#">About</a> <a href="#">Contact</a>
        </div>
    </footer>
</body>

</html>
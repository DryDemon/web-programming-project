<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="profileStyle.css">
</head>

<body>
    <nav class="navBarVertical">
        <span>FunMarket</span>
    </nav>
    <div class="contain">
        <nav class="content">
            <div class="logo">
                <label class="Status">Status : Buyer/Seller</label>&nbsp;
                <button class="back" onclick="window.location.href='Shop.php'">Back</button>

            </div>
    </div>
    </nav>
    <div class="BodyContainer">
        <h3>Profile</h3>
        <div class="twoRow">
            <div class="row1">
                <div class="card">
                    <div class="photo">
                        <img class="MyPhoto" width="160" height="160" src="https://www.fabriquedestyles.com/assets/uploads/files/465621_DET01_WEB.JPG">
                        <div class="btncontainer">
                            <!-- <button class="btnPhoto" type="button">Change Photo</button> -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="historyHeader">
                        <h6>History</h6>
                        <ul>
                            <li>Iphone X <strong>SOLD xx/xx/xxxx $555.00</strong></li>
                            <li>Ipad Air <strong>BOUGHT xx/xx/xxxx $600.00</strong></li>
                            <li>Ipod Nano&nbsp;<strong>BOUGHT xx/xx/xxxx $490.00</strong><br></li>
                            <li>Iphone X&nbsp;<strong>SOLD xx/xx/xxxx $555.00</strong><br></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row2">
                <div class="card">
                    <div class="cardHead">
                        <h6>User Information</h6>
                    </div>
                    <div class="cardBody">
                            <form method="post" action="./profile_updateUserDetails.php">
                            <div class="formA">
                                <div class="row">
                                    <div class="col">
                                        <input type="hidden" name="type" value="0" />
                                        <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control" type="text" placeholder="zeubi" name="username" value="<?php require_once("userConnection.php");
                                                                                                                                                                                                            echo getJwtData()[2]; ?>"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" placeholder="zeubi@.com" name="email" value="<?php require_once("userConnection.php");
                                                                                                                                                                                                                echo getJwtData()[3]; ?>"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" placeholder="zeubi" name="first_name" value="<?php require_once("userConnection.php");
                                                                                                                                                                                                                echo getJwtData()[8]; ?>"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" placeholder="zeubi" name="last_name" value="<?php require_once("userConnection.php");
                                                                                                                                                                                                                echo getJwtData()[1]; ?>"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-btn"><button class="btnSaveSettings" type="submit">Save Settings</button></div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="cardHead">
                        <h6>Contact Settings</h6>
                    </div>
                    <div class="cardBody">
                            <form method="post" action="./profile_updateUserDetails.php">
                            <input type="hidden" name="type" value="1" />
                            <div class="formA">
                                <div class="form-group"><label for="address"><strong>Adress</strong></label><input class="form-control" type="text" placeholder="zeubiLand" name="adress" value="<?php require_once("userConnection.php");
                                                                                                                                                                                                    echo getJwtData()[6]; ?>"></div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"><label for="city"><strong>City<br></strong></label><input class="form-control" type="text" placeholder="zeubiCity" name="city" value="<?php require_once("userConnection.php");
                                                                                                                                                                                                        echo getJwtData()[4]; ?>"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="country"><strong>Country</strong></label><input class="form-control" type="text" placeholder="ZeubiState" name="country" value="<?php require_once("userConnection.php");
                                                                                                                                                                                                            echo getJwtData()[5]; ?>"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-btn"><button class="btnSaveSettings" type="submit">Save&nbsp;Settings</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="PaymentContainer">
            <div class="cardHead">
                <h6><br>Payment details</h6>
            </div>
            <div class="cardBody">
                    <form method="post" action="./profile_updateUserDetails.php">
                    <input type="hidden" name="type" value="2" />
                    <div class="formAP">
                        <div class="form-group"><label for="address"><strong>Credit card Number</strong></label><input class="form-control" name="ccn" type="text" placeholder="xxxx-xxxx-xxxx-xxxx" value="<?php require_once("userConnection.php");
                                                                                                                                                                                                echo getJwtData()[9]; ?>"></div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label for="city"><strong>Expiration date</strong></label></div><input class="form-control" name="exd" type="text" id="cardExpiry-1" required="" placeholder="MM / YY" value="<?php require_once("userConnection.php");
                                                                                                                                                                                                                            echo getJwtData()[10]; ?>">
                            </div>
                            <div class="col">
                                <div class="form-group"><label for="country"><strong>CV code</strong><input class="form-control" name="cvc" type="text" id="cardCVC-1" required="" placeholder="CVC" value="<?php require_once("userConnection.php");
                                                                                                                                                                                                echo getJwtData()[11]; ?>"></label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><button class="btnSaveSettings" type="submit">Save&nbsp;Settings</button></div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <footer>
        <span>Copyright © FunMarket 2021</span>
    </footer>
</body>

</html>
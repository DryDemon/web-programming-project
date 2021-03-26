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
                            <img class="MyPhoto" src="#" width="160" height="160">
                            <div class="btncontainer">
                                <button class="btnPhoto" type="button">Change Photo</button>
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
                            <form>
                                <div class="formA">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control" type="text" placeholder="zeubi" name="username"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" placeholder="zeubi@.com" name="email"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" placeholder="zeubi" name="first_name"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" placeholder="zeubi" name="last_name"></div>
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
                            <form>
                                <div class="formA">
                                <div class="form-group"><label for="address"><strong>Address</strong></label><input class="form-control" type="text" placeholder="zeubiLand" name="address"></div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group"><label for="city"><strong>City<br></strong></label><input class="form-control" type="text" placeholder="zeubiCity" name="city"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="country"><strong>Country</strong></label><input class="form-control" type="text" placeholder="ZeubiState" name="country"></div>
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
                    <form>
                        <div class="formAP">
                        <div class="form-group"><label for="address"><strong>Credit card Number</strong></label><input class="form-control" type="tel" placeholder="xxxx-xxxx-xxxx-xxxx"></div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label for="city"><strong>Expiration date</strong></label></div><input class="form-control" type="tel" id="cardExpiry-1" required="" placeholder="MM / YY"></div>
                                <div class="col">
                                    <div class="form-group"><label for="country"><strong>CV code</strong><input class="form-control" type="tel" id="cardCVC-1" required="" placeholder="CVC"></label></div>
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
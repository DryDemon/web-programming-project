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
                    <a role="button" href="Product.html">Sell</a>
                    <a role="button" href="#">Cart</a>
                    <a role="button" href="Profile.html">Sign In</a>
                </div>
            </div>
        </nav>

        <header>
            <div class="SideBarContainer" >
                <div class="SideBarMenu">
                    <ul class="SideBar-nav" >
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
                            <fieldset id="Auction">
                                <legend><strong>Auction</strong></legend>
                        <div class="DisplayProduct">
                            <div class="row">
                                <a class="ProductImage"><img src="iphone6.jpg"></a>
                            </div>
                            <div class="row">
                                <div class="NameProduct">
                                    <h2><label>iPhone 6s</label></h2>
                                </div>
                                <div class="TypeOfSelling">
                                    <label class="type">Auction</label> <strong> End <span style="text-decoration: underline;"></span><label class="finalDate">02/15/2021</label></span></strong>
                                </div>
                            </div>
                            <div class="row">
                                <p class="description">
                                    blabla
                                </p>
                            </div>
                            <div class="row">
                                <form>
                                    <div class="BidButton">
                                        <button class="Display-button" type="submit">Bid !</button>
                                    </div>
                                </form>
                                <div class="MinimumBid">
                                    <label class="MiniBid">Minimum $500</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="BestOffer">
                        <legend><strong>Best Offer</strong></legend>
                        <div class="DisplayProduct">
                            <div class="row">
                                <a class="ProductImage"><img src="iphone6.jpg"><img src="iphone6.jpg"></a>
                            </div>
                            <div class="row">
                                <div class="NameProduct">
                                    <h2><label>iPhone 7</label></h2>
                                </div>
                                <div class="TypeOfSelling">
                                    <label class="type">Best Offer</label> 
                                </div>
                            </div>
                            <div class="row">
                                <p class="description">
                                    blabla
                                </p>
                            </div>
                            <div class="row">
                                <form>
                                    <div class="BidButton">
                                        <button class="Display-button" type="submit">Offer !</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="InstantBuy">
                        <legend><strong>Instant Buying</strong></legend>
                        <div class="DisplayProduct">
                            <div class="row">
                                <a class="ProductImage"><img src="iphone6.jpg"><img src="iphone6.jpg"><img src="iphone6.jpg"></a>
                            </div>
                            <div class="row">
                                <div class="NameProduct">
                                    <h2><label>iPhone X</label></h2>
                                </div>
                                <div class="TypeOfSelling">
                                    <label class="type">Instant Buy</label> 
                                </div>
                            </div>
                            <div class="row">
                                <p class="description">
                                    blabla
                                </p>
                            </div>
                            <div class="row">
                                <form>
                                    <div class="BidButton">
                                        <button class="Display-button" type="submit">Buy now !</button>
                                    </div>
                                </form>
                                <div class="MinimumBid">
                                    <label class="MiniBid">$1200</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
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
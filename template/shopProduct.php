<fieldset id="Auction">
    <legend><strong>Auction</strong></legend>
    <div class="DisplayProduct">
        <div class="row">
            <?php if (isset($image)) {
                if($image != "vide")
                echo "<a class='ProductImage'><img src=" . $image . "></a>";
            }
            ?>

        </div>
        <div class="row">
            <div class="NameProduct">
                <h2><label><?php echo $name ?></label></h2>
            </div>
            <div class="TypeOfSelling">
                <label class="type">Auction</label> <strong> End <span style="text-decoration: underline;"></span><label class="finalDate">02/15/2021</label></span></strong>
            </div>
        </div>
        <div class="row">   
            <p class="description">
                <?php echo $description ?>
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
<!-- <fieldset id="BestOffer">
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
</fieldset> -->
<script type="text/javascript" src="ShopPrompt.js"></script>
    <fieldset id="<?php echo str_replace(' ', '', $type); ?>">
        <legend><strong><?php echo $type; ?></strong></legend>
        <div class="DisplayProduct">
            <div class="row">
                <?php 
                    if (isset($image)) 
                    {
                        if ($image != "vide") 
                        {
                            echo "<a class='ProductImage'><img src=" . $image . "></a>";
                        }
                    }
                ?>
            </div>
            <div class="row">
                <div class="NameProduct">
                    <h2><label><?php echo $name ?></label></h2>
                </div>
                <div class="TypeOfSelling">
                    <label class="creationDate"><?php echo $creationDate; ?></label> 
                </div>
                </br>
                <div class="TypeOfSelling">
                    <label class="type"><?php echo $type; ?></label> <?php if($type == "Auction")
                    {
                        echo '<strong> End <span style="text-decoration: underline;"></span><label class="finalDate">'.$endDate.'</label></span></strong>';
                    }
                        ?>
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
                        <a id="Open" onclick="OpenDialog('<?php echo $type; ?>')" class="DisplayA">
                            <?php
                                switch ($type) 
                                {
                                    case "Auction":
                                        echo "Bid !";
                                        break;
                                    case "Best Offer":
                                        echo "Offer !";
                                        break;
                                    case "Instant Buy":
                                        echo "Buy";
                                        break;
                                }
                            ?>
                        </a>
                        <input type="hidden" id="TypeOfSell" value="<?php echo $type; ?>" />
                    </div>
                </form>
                <div class="MinimumBid">
                    <label class="MiniBid">
                        <?php 
                            if ($type == 'Auction') 
                                {
                                    echo "Minimum $" . $price;
                                } 
                            if ($type == 'Instant Buy') 
                                {
                                    echo "$" . $price;
                                }
                            if ($type == "Best Offer") 
                                {
                                    echo "Recommended Price : $" . $price;
                                }
                        ?>
                    </label>
                </div>
            </div>
        </div>
        <dialog id="dialog">
            <form method="POST" action="profile_Check.php">
                    <label>Enter an Offer :</label><br>
                    <input type="number" name="Offer" min=0 class="form-input">
                    <button name="sendOffer" type="submit">Offer</button>
                    <input type="hidden" name="productId" value="<?php echo $productId; ?>" />
                    <input type="hidden" name="price" value="<?php echo $price; ?>" />
                    <a id="Close" onclick="CloseDialog()" name="DisplayB">Close</a>
            </form>
        </dialog>
        <dialog id="dialogConfirm">
            <form method="POST" action="createBuy.php">
                        <label>Are you sure you want to buy this product ?</label><br>
                        <input type="hidden" name="productId" value="<?php echo $productId; ?>" />
                        <input type="hidden" name="price" value="<?php echo $price; ?>" />
                        <button id="Confirm" type="submit">Yes</button>
                        <a id="Close" onclick="CloseDialog()" name="DisplayB">No</a>
            </form>
        </dialog>
    </fieldset>

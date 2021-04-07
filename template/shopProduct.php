<script type="text/javascript" src="ShopPrompt.js"></script>
<div id="<?php echo $category; ?>">
    <fieldset class="<?php echo $category; ?>" id="<?php echo str_replace(' ', '', $type); ?>">
        <legend><strong><?php echo $type; ?></strong></legend>
        <div class="DisplayProduct">
            <div class="row">
                <?php

                if (isset($image)) {
                    if ($image != "vide") {
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
                    <label class="type"><?php echo $type; ?></label> <?php if ($type == "Auction") {
                                                                            echo '<strong> End <span style="text-decoration: underline;"></span><label class="finalDate">' . $endDate . '</label></span></strong>';
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
                <?php
                require_once "userConnection.php";
                $utilisateur = getCurrentUserData();

                if (isUserConnected()) {
                    if ($utilisateur[3] == "Admin@admin.com") {
                        echo '<form method="POST" action="deleteTransaction.php">';
                        echo '<input type="hidden" name="ProductDelete" value="' . $productId . '">';
                        echo '<button name="sendOffer" type="submit" style="margin-bottom: 1rem; background-color: #f30808;">Delete</button>';
                        echo '</form>';
                    }
                }
                ?>
                <form>
                <?php 
                if($isUserConnected){

                    echo'
                    <div class="BidButton">
                    <a id="Open" onclick="OpenDialog(`'.$type.'`, '.$productId.')" class="DisplayA">';
                    
                    switch ($type) {
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
                                echo '
                                </a>
                                <input type="hidden" id="TypeOfSell" value="'.$type.'" />
                                </div>';
                            }else{
                                echo "<p>Please Sign in to buy the product</p>";
                            }
                    ?>
                </form>
                <div class="MinimumBid">
                    <label class="MiniBid">
                        <?php
                        if ($type == 'Auction') {
                            echo "Minimum $" . $price;
                        }
                        if ($type == 'Instant Buy') {
                            echo "$" . $price;
                        }
                        if ($type == "Best Offer") {
                            echo "Recommended Price : $" . $price;
                        }
                        ?>
                    </label>
                </div>
            </div>
        </div>
        <dialog id="dialog_<?php echo $productId; ?>">
            <form method="POST" action="profile_Check.php">
                <label>Enter an Offer :</label><br>
                <input type="number" name="Offer" min=0 class="form-input">
                <button name="sendOffer" type="submit">Offer</button>
                <input type="hidden" name="productId" value="<?php echo $productId; ?>" />
                <input type="hidden" name="price" value="<?php echo $price; ?>" />
                <a id="Close" onclick="CloseDialog()" name="DisplayB">Close</a>
            </form>
        </dialog>
        <dialog id="dialogConfirm_<?php echo $productId; ?>">
            <form method="POST" action="createBuy.php">
                <label>Are you sure you want to buy this product ?</label><br>
                <input type="hidden" name="productId" value="<?php echo $productId; ?>" />
                <input type="hidden" name="price" value="<?php echo $price; ?>" />
                <button id="Confirm" type="submit">Yes</button>
                <a id="Close" onclick="CloseDialog()" name="DisplayB">No</a>
            </form>
        </dialog>
        <dialog id="dialogAuction_<?php echo $productId; ?>">
            <form method="POST" action="createAuctionBuy.php">
            <label>Enter an Offer for the auction :</label><br>
                <input type="number" name="Offer" min=<?php echo $price; ?> class="form-input">
                <button name="sendOffer" type="submit">Offer</button>
                <input type="hidden" name="productId" value="<?php echo $productId; ?>" />
                <input type="hidden" name="price" value="<?php echo $price; ?>" />
                <a id="Close" onclick="CloseDialog()" name="DisplayB">Close</a>
            </form>
        </dialog>
    </fieldset>
</div>
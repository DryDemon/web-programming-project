<fieldset id="<?php echo str_replace(' ', '', $type); ?>">
    <legend><strong><?php echo $type; ?></strong></legend>
    <div class="DisplayProduct">
        <div class="row">
            <?php if (isset($image)) {
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
                <label class="type"><?php echo $type; ?></label> <?php if($type == "Auction"){
                    echo '<strong> End <span style="text-decoration: underline;"></span><label class="finalDate">'.$endDate.'</label></span></strong>';}
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
                    <button class="Display-button" type="submit">
                    <?php
switch ($type) {
    case "Auction":
        echo "Bid !";
        break;
    case "Best Offer":
        echo "Offer !";
        break;
        break;
    case "Instant Buy":
        echo "Buy";
        break;

}?>
                    </button>
                </div>
            </form>
            <div class="MinimumBid">
                <label class="MiniBid">
                <?php if ($type == "Auction" || $type == "Instant Buy") {
    if ($type == 'Auction') {
        echo "Minimum $" . $price;
    } else {
        echo "$" . $price;
    }
}
?>
                </label>
            </div>
        </div>
    </div>
</fieldset>
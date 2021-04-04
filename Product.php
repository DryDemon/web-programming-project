<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Product</title>
    <link rel="stylesheet" href="productStyle.css">
    <script type="text/javascript">
        function showDateEnd() {
            var x = document.getElementById("dateEnd");
            document.getElementById("dateEndInput").required = true;
            x.style.display = "block";
        }

        function hideDateEnd() {
            var x = document.getElementById("dateEnd");
            document.getElementById("dateEndInput").required = false;
            x.style.display = "none";
        }
        window.onload = function(e) {
            hideDateEnd();
        }

        function onTypeChoice(e) {
            switch (e.target.value) {
                case "Auction":
                    showDateEnd()
                    break;
                case "Best Offer":
                    hideDateEnd()
                    break;
                case "Instant Buy":
                    hideDateEnd()
                    break;
                default:
                    hideDateEnd()
                    break;

            }
        }
    </script>
</head>

<body>
    <div class="MainTitle">
        <h4>FUNMARKET</h4>
        <button class="back" onclick="window.location.href='Shop.php'" style="color: white;">Back</button>
    </div>

    <div class="container">
        <div class="card">
            <div class="cardBody">
                <div class="row">
                    <div class="col">
                        <div class="part">
                            <div class="Title">
                                <h4>Sell Your Items !</h4>
                            </div>
                            <form method="POST" action="./ProductRegistering.php" class="product">
                                <div class="PName">
                                    <div><input class="small" name="ProductName" type="text" placeholder="Product Name" required></div>
                                </div>
                                <div class="PCategory" style="margin-left: 2%;">
                                    <div><input class="small" name="ProductCategory" list="browsers" placeholder="Choose the category" required>
                                        <datalist id="browsers">
                                            <option value="Computer">
                                            <option value="Phone & SmartPhone">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="PType" style="margin-left: 5%;">
                                    <input onchange="onTypeChoice(event)" onload="onTypeChoice(event)" id="typeList" class="small" name="ProductType" list="test" placeholder="Choose the type of the selling" required>
                                    <datalist id="test">
                                        <option value="Auction">
                                        <option value="Best Offer">
                                        <option value="Instant Buy">
                                    </datalist>
                                </div>
                                <div class="PDescription"><input class="large" name="ProductDescription" type="textarea" placeholder="Product Description" style="height: 200px;" required></div>
                                <div class="PPrice">
                                    <div class="Price"><input class="small" name="ProductPrice" type="number" placeholder="Product Price ($)" required></div>
                                </div>
                                <div class="PEd" id="dateEnd"><a style="margin-left: 33%;">Select a DeadLine</a> <input class="small" name="ProductDeadLine" type="date" id="dateEndInput"></div>
                                <div class="PPhoto">
                                    <div class="Photo">
                                        <a style="margin-left: 33%;">Add some pictures ?</a>
                                        <input class="small" placeholder="http://google.com/image.png" name="ProductImage" type="url" required>
                                    </div>
                                </div>
                                <!-- <div class="Video" >
                                        <a style="margin-left: 33%;">Or videos ?</a>
                                        <input class="small" name="ProductVideo" type="file" ></div>
                                    </div> -->
                                <hr>
                                <div style="margin-left: 45%;">
                                    <button type="submit">Post the Product</button>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
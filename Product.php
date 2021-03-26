<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Product</title>
    <link rel="stylesheet" href="productStyle.css">
</head>

<body>
    <div class="MainTitle"><h4>FUNMARKET</h4>
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
                                    <div ><input class="small" name="ProductName" type="text" placeholder="Product Name"></div>
                                 </div>
                                 <div class="PCategory" style="margin-left: 2%;">
                                    <div ><input class="small" name="ProductCategory" list="browsers" placeholder="Choose the category">
                                        <datalist id="browsers">
                                          <option value="Computer">
                                          <option value="Phone & SmartPhone">
                                        </datalist>
                                    </div>
                                 </div>
                                 <div class="PType" style="margin-left: 5%;">
                                 <input class="small" name="ProductType" list="test" placeholder="Choose the type of the selling">
                                        <datalist id="test">
                                          <option value="Auction">
                                          <option value="Best Offer">
                                          <option value="Instant Buy">
                                        </datalist>
                                </div>
                                 <div class="PDescription"><input class="large" name="ProductDescription" type="textarea" placeholder="Product Description" style="height: 200px;"></div>
                                 <div class="PPrice">
                                     <div class="Price" ><input class="small" name="ProductPrice" type="number" placeholder="Product Price ($)"></div>
                                 </div>
                                 <div class="PEd"><a style="margin-left: 33%;">Select a *DeadLine* if needed</a> <input class="small" name="ProductDeadLine" type="date" ></div>
                                 <div class="PPhoto">
                                    <div class="Photo" >
                                        <a style="margin-left: 33%;">Add some pictures ?</a>
                                        <input class="small" name="ProductImage" type="file" ></div>
                                    </div>
                                    <div class="Video" >
                                        <a style="margin-left: 33%;">Or videos ?</a>
                                        <input class="small" name="ProductVideo" type="file" ></div>
                                    </div>
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
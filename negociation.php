<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <script type="text/javascript" src="negociationPrompt.js"></script>
    <link rel="stylesheet" href="profileStyle.css">
</head>

<body>
    <nav class="navBarVertical">
        <span>FunMarket</span>
    </nav>
    <div class="contain">
        <nav class="content">
            <div class="logo">
                <label class="Status">Status : Buyer/Seller</label>
                <button class="back" onclick="window.location.href='Shop.php'">Back</button>
            </div>
    </div>
    <div class="containerTable">
        <div class="cardHead">
            <h6>On Going negotiations</h6>
        </div>
        <div class="cardBody">
            <table id="datatable" class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Recommended Price</th>
                        <th>In Comming Offer</th>
                        <th>Decision</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("mysqlConnection.php");
                    $dbConn = MyConnection();
                    require_once "userConnection.php";
                    $utilisateur = getCurrentUserData();

                    $iduser = $utilisateur[0];
                    $userResult = $dbConn->query('SELECT inComingOffer, currentOffer, idProduct, idTransaction FROM Negotiation WHERE idSeller = ' . $iduser . ' AND Status = "On Going"');

                    while ($row = $userResult->fetch_row()) {
                        echo '<tr>';
                        echo '<td>' . $row[2] . '</td>';
                        echo '<td>' . $row[1] . '</td>';
                        echo '<td>' . $row[0] . '</td>';
                        echo '<td><a id="Close" class="BtnAccept" onclick="window.location.href=`negociationChangeStatus.php?id=' . $row[3] . '&status=Accepted`" name="DisplayB">Accept</a><a class="BtnRefuse" id="Close" onclick="window.location.href=`negociationChangeStatus.php?id=' . $row[3] . '&status=Denied`" name="DisplayB">Refuse</a></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
                <!-- <tfoot>
                            <tr>
                                <th>Product Name</th>
                                <th>Recommended Price</th>
                                <th>In Comming Offer</th>
                            </tr>
                        </tfoot> -->
            </table>

            <h1>History</h1>

            <table id="datatable" class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Recommended Price</th>
                        <th>In Comming Offer</th>
                        <th>Decision</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("mysqlConnection.php");
                    $dbConn = MyConnection();
                    require_once "userConnection.php";
                    $utilisateur = getCurrentUserData();

                    $iduser = $utilisateur[0];
                    $userResult = $dbConn->query('SELECT inComingOffer, currentOffer, idProduct, idTransaction, Status FROM Negotiation WHERE idSeller = ' . $iduser . ' AND Status != "On Going"');

                    while ($row = $userResult->fetch_row()) {
                        echo '<tr>';
                        echo '<td>' . $row[2] . '</td>';
                        echo '<td>' . $row[1] . '</td>';
                        echo '<td>' . $row[0] . '</td>';
                        echo '<td>' . $row[4] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
    </nav>
</body>

</html>
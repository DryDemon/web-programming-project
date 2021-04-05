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
                                $userResult = $dbConn->query('SELECT inComingOffer, currentOffer, idProduct FROM Negotiation WHERE idUser = ' . $iduser . ' AND Status = "On Going"');

                                while ($row = $userResult->fetch_row()) 
                                {
                                 echo '<tr>';
                                 echo '<td>'.$row[2].'</td>';  
                                 echo '<td>'.$row[1].'</td>';  
                                 echo '<td>'.$row[0].'</td>';  
                                 echo '<td><button class="BtnAccept">Accept</button><button class="BtnRefuse">Refuse</button></td>';
                                 echo '</tr>';
                                }
                                ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Product Name</th>
                                <th>Recommended Price</th>
                                <th>In Comming Offer</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </nav>
    </body>
</html>
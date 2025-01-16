<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management</title>
    <link rel="stylesheet" href="main5.css">
    <script>
function supprimer() {
    var radioBtn = document.querySelector('input[name="rad"]:checked');
    if(!radioBtn){
        window.location.href="stockerr.php";
    }
    else{
    document.getElementById("f").action = "suppstock.php";
    document.getElementById("f").submit();}
}
function modifier() {
    var radioBtn = document.querySelector('input[name="rad"]:checked');
    if(!radioBtn){
        window.location.href="stockerr.php";
    }
    else{
    document.getElementById("f").action = "uppdatestock.php";
    document.getElementById("f").submit();}
}
</script>
</head>
<body>
    <header>
        <h1>Stock Management</h1><a href="https://www.asteelflash.com/facility/asteelflash-la-soukra/"><img src="logo.png" class="ast"></a><a href="login.html"><span class="admin">ADMIN</span></a><img src="user.png" class="uu">
    </header>
    <nav>
        <ul>
            <li><a href="listeemp.php">Employees List</a></li>
            <li><a href="listeprod.php">Affectations List</a></li>
            <li><a href="stock.php">Stocks List</a></li>
            <li><a href="ajouterstock.php">ADD Stock</a></li>
            <li><a href="ajouterprod.php">ADD Affectation</a></li>
            <li><a href="apropos.html">About</a></li>
        </ul>
    </nav>
    <main>
        <div class="connn">
            <table>
               
                <th style="width:170px;">
                    SC
                </th>
                <th style="width:170px;">
                    TYPE
                </th>
                <th style="width:170px;">
                    BRAND
                </th>
                <th style="width:170px;">
                    QUANTITY
                </th>
                <th style="width:85px;">
                    <form name="f" id="f" method="post">
                    <input type="button" name="s" value="DELETE" id="supp" onclick="supprimer()">
                    
                </th >
                <th style="width:85px;">
                    <input type="button" name="m" value="MODIFY" id="modif" onclick="modifier()">
                </th>
                <?php include ("connexion.php"); 
                    $stmt = $mysqli->query("SELECT * FROM stock");
                    if (!$stmt){
                        echo "erreur".$mysqli->erreur;
                    }
                    while ($row = $stmt->fetch_assoc()){
                        echo"<tr style='background-color: rgba(227, 227, 227, 0.7); color: #333; line-height: 1; text-align: center;border: 2px solid #636363;'>";
                        echo"<td style='border: 2px solid #636363;'>".$row["code"]."</td>";
                        echo"<td style='border: 2px solid #636363;'>".$row["typee"]."</td>";
                        echo"<td style='border: 2px solid #636363;'>".$row["marquee"]."</td>";
                        echo"<td style='border: 2px solid #636363;'>".$row["quantite"]."</td>";
                        echo"<td style='border: 2px solid #636363; width:15px;' colspan='2'>
                                <label class='container' name='x'>
                                <input type='radio'name='rad'id='r'value='".$row["code"]."'>
                                <span class='checkmark'></span>
                                </label> 
                            </td>";
                        echo"</tr>";
                    }
                    
                ?>
                <tr>
                </form> 
            </table>
        </div>
    </main>
    <footer>
        <span id="cc">&copy; 2024 Mortadha Jouini</span>

    </footer>
</body>
</html>

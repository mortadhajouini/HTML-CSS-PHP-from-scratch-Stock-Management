<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management</title>
    <link rel="stylesheet" href="main5.css">
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
        <form name="f" method="post" class="product-form" action="uppstock.php">
        <?php 
            include ("connexion.php");
            $r=$_POST['rad'];
            $stmt1 = $mysqli->query("SELECT * FROM stock where code='$r' ");
            while ($row1 = $stmt1->fetch_assoc()){
            echo"
            <input type='text' id='sn' name='c' required value='".$row1["code"]. "'hidden>";

            echo"<label for='type'>Type:</label>
            <input type='text' id='t' name='t' required value='".$row1["typee"]."'>";

            echo"<label for='marque'>Brand:</label>
            <input type='text' id='m' name='m' required value='".$row1["marquee"]."'>";

            echo"<label for='Quantite'>Quantity:</label>
            <input type='text' id='d' name='d' required value='".$row1["quantite"]. "'>";
            }
?>
            <button type="submit" id="mod">MODIFY</button>
        </form>
    </main>
    <footer>
        <span id="cc">&copy; 2024 Mortadha Jouini</span>

    </footer>
</body>
</html>

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
        <form name="f" method="post" class="product-form" action="upp.php">
        <?php 
            include ("connexion.php");
            $r=$_POST['rad'];
            $stmt1 = $mysqli->query("SELECT * FROM produit where sn='$r' ");
            $stmt3 = $mysqli->query("SELECT * FROM produit where sn='$r' ");
            $stmt5 = $mysqli->query("SELECT * FROM produit where sn='$r' ");
            $stmt2 = $mysqli->query("SELECT * FROM stock ");
            $stmt4 = $mysqli->query("SELECT * FROM stock ");
            while ($row1 = $stmt1->fetch_assoc()){
            echo"
            <input type='text' id='sn' name='sn' required value='".$row1['sn']. "'hidden>";
            
            echo"<label for='type'>Type:</label>";
            echo"<select id='t' name='t' required>";
            echo"<option value='".$row1['type']."'>".$row1['type']."</option>";

            }
            $stmt1->close();
             while ($row1 = $stmt2->fetch_assoc()){
                echo"<option value='".$row1['typee']."'>".$row1['typee']."</option>";
             }
             $stmt2->close();

            echo"</select>";
            while ($row1 = $stmt5->fetch_assoc()){
                echo"<label for='Marque'>Brand:</label>";
                echo"<select id='m' name='m' required value='Select Brand'>";
                echo"<option value='".$row1['marque']."'>".$row1['marque']."</option>";
                }
                $stmt5->close();


            while ($row2 = $stmt4->fetch_assoc()){
                echo"<option value='".$row2['marquee']."'>".$row2['marquee']."</option>";
             }
             $stmt4->close();

             echo"</select>";
             while ($row2 = $stmt3->fetch_assoc()){
            echo"<label for='dateAffectation'>Affectation Date:</label>
            <input type='text' id='d' name='d' placeholder='yyyy/mm/mm' required value='".$row2["da"]. "'>";
             
            echo"<label for='affecteA'>Affected To:</label>
            <select name='a' id='a' required >";
             }
             $stmt3->close();

            $stmt = $mysqli->query("SELECT * FROM employe ");

            if (!$stmt){
                 echo "erreur".$mysqli->erreur;
                }

            while ($row = $stmt->fetch_assoc()){
                echo"<option value = '".$row['id_emp']."'>".$row['nom']." ".$row['prenom']."</option>";

            }

                $stmt->close(); 

            ?>
            </select>

            <button type="submit" id="mod">MODIFY</button>
        </form>
    </main>
    <footer>
        <span id="cc">&copy; 2024 Mortadha Jouini</span>

    </footer>
</body>
</html>

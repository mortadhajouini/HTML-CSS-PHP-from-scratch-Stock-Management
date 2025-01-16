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
        <form name="f" method="post" class="product-form" action="ajouterprodaction.php">
            <label for="sn">Serial Number (SN):</label>
            <input type="text" id="sn" name="sn" required>

            <label for="type">Type:</label>
            <select id="tt" name="tt" value="Select Type"  required>
            <option value="Select Type" selected>--Select Type--</option>
            <?php
                include ("connexion.php");
                $stmt = $mysqli->query("SELECT * FROM stock ");
    
                if (!$stmt){
                     echo "erreur".$mysqli->erreur;
                    }
    
                while ($row = $stmt->fetch_assoc()){
                    echo"<option value='".$row['typee']."'>".$row['typee']."</option>";
    
                }
                $stmt->close(); 
            ?>
            </select>
            <label for="marque">Brand:</label>
            <select id="m" name="m" value="Select Brand" required>
            <option value="Select Marque" selected>--Select Brand--</option>

            <?php
                include ("connexion.php");
                $stmt1 = $mysqli->query("SELECT * FROM stock ");
    
                if (!$stmt1){
                     echo "erreur".$mysqli->erreur;
                    }
                while ($row1 = $stmt1->fetch_assoc()){
                    echo"<option value = '".$row1['marquee']."'>".$row1["marquee"]."</option>";
                }
                $stmt1->close(); 
            ?>            
         </select>

            <label for="dateAffectation">Affectation Date:</label>
            <input type="text" id="d" name="d" placeholder="yyyy/mm/dd" required>

            <label for="affecteA">Affected To:</label>
            <select name="a" id="a" required>
            <option value="Select Employé" selected>--Select Employee--</option>

            <?php 
            include ("connexion.php");
            $stmt = $mysqli->query("SELECT * FROM employe ");

            if (!$stmt){
                 echo "erreur".$mysqli->erreur;
                }

            while ($row = $stmt->fetch_assoc()){
                echo"<option value = '".$row['id_emp']."'>".$row["nom"]." ".$row["prenom"]."</option>";

            }

                $stmt->close(); 

            ?>
            </select>
            <button type="submit">ADD Affectation</button>
        </form>
    </main>
    <footer>
        <span id="cc">&copy; 2024 Mortadha Jouini</span>

    </footer>
</body>
</html>

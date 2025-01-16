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
        <h1>Stock Management</h1><a href="https://www.asteelflash.com/facility/asteelflash-la-soukra/"> <img src="logo.png" class="ast"></a><a href="login.html"><span class="admin">USER</span></a><img src="user.png" class="uu">
    </header>
    <nav>
        <ul>
        <li><a href="listeempuser.php">Employees List</a></li>
            <li><a href="listeproduser.php">Affectations List</a></li>
            <li><a href="stockuser.php">Stocks List</a></li>
            <li><a href="aproposuser.html">About</a></li>
        </ul>
    </nav>
    <main>
        <div class="connn">
            <table>
                <th style="width:150px;">
                    SN
                </th>
                <th style="width:150px;">
                    TYPE
                </th>
                <th style="width:150px;">
                    BRAND
                </th>
                <th style="width:150px;">
                    AFFECTATION DATE
                </th>
                <th style="width:150px;">
                    AFFECTED TO
                </th>
                <?php include ("connexion.php"); 
                    $stmt = $mysqli->query("SELECT * FROM produit p, employe e where p.aff=e.id_emp");
                    if (!$stmt){
                        echo "erreur".$mysqli->erreur;
                    }
                    while ($row = $stmt->fetch_assoc()){
                        echo"<tr style='background-color: rgba(227, 227, 227, 0.5); color: #333; line-height: 3; text-align: center;border: 2px solid #636363;'>";
                        echo"<td style='border: 2px solid #636363;'>".$row["sn"]."</td>";
                        echo"<td style='border: 2px solid #636363;'>".$row["type"]."</td>";
                        echo"<td style='border: 2px solid #636363;'>".$row["marque"]."</td>";
                        echo"<td style='border: 2px solid #636363;'>".$row["da"]."</td>";
                        echo"<td style='border: 2px solid #636363;'>".$row["nom"]." ".$row["prenom"]."</td>";
                        echo"</tr>";
                    }

                ?>
            </table>
        </div>
    </main>
    <footer>
        <span id="cc">&copy; 2024 Mortadha Jouini</span>

    </footer>
</body>
</html>

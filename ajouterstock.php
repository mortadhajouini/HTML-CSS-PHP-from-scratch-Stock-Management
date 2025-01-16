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
        <form name="f" method="post" class="product-form" action="ajouterstockaction.php">

            <label for="type">Type:</label>
            <input type="text" id="t" name="t" required>

            <label for="marque">Brand:</label>
            <input type="text" id="m" name="m" required>

            <label for="dateAffectation">Quantity:</label>
            <input type="text" id="d" name="q" required>
            </select>

            <button type="submit">ADD Stock</button>
        </form>
    </main>
    <footer>
        <span id="cc">&copy; 2024 Mortadha Jouini</span>

    </footer>
</body>
</html>

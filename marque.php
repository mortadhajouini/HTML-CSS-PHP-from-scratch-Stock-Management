<?php
$x=$_POST['tt'];
                echo"<label for='marque'>Marque:</label>
                <select id='m' name='m' required>";
                $stmt1 = $mysqli->query("SELECT * FROM stock where stock.typee='$' ");
    
                if (!$stmt1){
                     echo "erreur".$mysqli->erreur;
                    }
    
                while ($row1 = $stmt1->fetch_assoc()){
                    echo"<option value = '".$row1['marquee']."'>".$row1["marquee"]."</option>";
    
                }
                echo"</select>";
                    $stmt1->close(); 
                    ?>
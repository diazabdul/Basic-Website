<!DOCTYPE html>
<html>
    <title>Basic Logic Php</title>
    <body>
        <h1>Pola Perulangan</h1>
        <?php
        for ($i=0; $i < 5; $i++) {            
            for ($j=0; $j < $i; $j++) { 
                echo $j;
            }
            echo "<br>";            
        }
        for ($i=5; $i > 0; $i--) {
            for ($j=0; $j < $i; $j++) { 
                echo $j;
            } 
            echo "<br>";
        }
        ?>
    </body>
</html>
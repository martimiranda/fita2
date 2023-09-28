<html>
    <head>
        <?php
        if(isset($_GET)){
            if($_GET["elements"]=="foc"){
                echo "<link rel=\"stylesheet\" href=\"foc.css\">";
            }
            if($_GET["elements"]=="foc"){
                echo "<link rel=\"stylesheet\" href=\"foc.css\">";
            }
            if($_GET["elements"]=="foc"){
                echo "<link rel=\"stylesheet\" href=\"foc.css\">";
            }
        }
        ?>
    </head>
    <body>
<h1>QUANTITAT</h1>
<form method="POST" action="ex22pg2.php">
    <input type="number" name="quantitat" required>
    <br>
    <input type="submit" value="enviar">
</form>
</body>
</html>
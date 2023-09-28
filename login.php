<h2>Login</h2>

<form action="login.php" method="POST">
    <input type="text" name="user">
    <br>
    <input type="password" name="pass" placeholder="password" >
    <br>
    <input type="submit">
</form>
<?php
$usuaris=[
    "paco"=>"1234","jaime"=>"password","luis"=>"hola"
];
if(isset($_POST["user"]) && isset($_POST["pass"]) ){
    echo "Usuari: ".$_POST["user"]."<br>\n";}
    $clave = array_key_exists($_POST["user"], $usuaris);
    if(!$clave){
        echo "USUARI INCORRECRTE";
    }
    else{
        if(strcmp($usuaris[$_POST["user"]],$_POST["pass"])==0){
            echo "USUARI CORRECTE";
        }
        else{
            echo "CONTRASEÑA INCORRECTA";
        }
    }
?>
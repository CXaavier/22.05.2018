<?php
header("Content-Type:Text/plain");
$var1 = isset($_GET['parametre1']) $_GET['parametre1'] : "";
$var2 = isset($_GET['parametre1']) $_GET['parametre2'] : "";

if ($var1 != "" && $var2 != ""){
    echo "Sa fonctionne !";
}else{
    echo "Sa fonctionne pas !";
}
<?php

$mail=$_POST["email"];
$pass=$_POST["password"];
if($mail!="" and $pass!=""){
    header("Location: "."index.php");
}
else{
    echo "doğru bilgiyi giriniz";
}
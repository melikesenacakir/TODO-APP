<?php
$db = new PDO("sqlite:todo.db");
$todo=$_GET['todo'];
$sil="DELETE FROM todolist WHERE todo=?";
$sonuc = $db->prepare($sil);
$sonuc->execute([$todo]);
$db=null;
echo "<script>window.location.href='index.php'</script>";
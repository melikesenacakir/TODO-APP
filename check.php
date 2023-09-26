<?php
$db = new PDO("sqlite:todo.db");
$i=$_POST['veri'];
if(isset($_POST['check']))
     $check=$_POST['check'];
else
    $check=0;
$guncelle=$db->prepare("UPDATE todolist SET checked=? WHERE todo=?");
$guncelle->execute([$check, $i]);
$db=null;
echo "<script>window.location.href='index.php'</script>";
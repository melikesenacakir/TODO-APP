<?php
$db = new PDO("sqlite:todo.db");
$t=$_POST['todo'];
$message = $_POST['deger'];
$edit = "UPDATE todolist SET todo=? WHERE todo=?";
$sonuc = $db->prepare($edit);
$sonuc->execute(array($message, $t));
$db=null;
echo "<script>window.location.href='index.php'</script>";
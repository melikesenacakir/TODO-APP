<?php
session_start();
try {
    $db = new PDO("sqlite:todo.db");

    //if (isset($_POST['buton'])) {
        $sql = "INSERT INTO todolist(kullaniciadi,todo,checked) VALUES (?, ?,?)";
        $sonuc = $db->prepare($sql);
        $kadi=strip_tags($_SESSION['kullanici']);
        $todo=strip_tags($_POST['todo']);
        if ($kadi==null || $todo==null) {
            echo "<script>alert('Bilgileri düzgün giriniz');</script>";
            echo "<script>window.location.href='index.php'</script>";
            exit();
        } else {
            $ekle = $sonuc->execute([
                $kadi,
                $todo,
                0
            ]);
        }
        header("Location: index.php");

}catch(PDOException $par){
    echo $par;
}
$db=null;
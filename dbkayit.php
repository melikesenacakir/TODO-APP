<?php

try {
    $db = new PDO("sqlite:todo.db");

    if (isset($_POST['buton'])) {
        $table="CREATE TABLE IF NOT EXISTS kullanicilar(
                  kullaniciadi VARCHAR(15) PRIMARY KEY,
                  adsoyad VARCHAR(30) NOT NULL,
                  email VARCHAR(40) UNIQUE NOT NULL,
                  sifre VARCHAR(100) NOT NULL
                )";
        $db->exec($table);
        $sql = "INSERT INTO kullanicilar(kullaniciadi,adsoyad,email,sifre) VALUES (?, ?, ?, ?)";
        $sonuc = $db->prepare($sql);
        $adsoyad = strip_tags($_POST['adsoyad']);
        $kadi=strip_tags($_POST['kullaniciadi']);
        $mail=strip_tags($_POST['email']);
        $sifre = sha1($_POST['password']);
        if ($adsoyad==null || $kadi==null || $mail==null || $sifre==null) {
            echo "<script>alert('Bilgileri düzgün giriniz');</script>";
            echo "<script>window.location.href='register.php'</script>";
            exit();
        } else {
            $ekle = $sonuc->execute([
                $kadi,
                $adsoyad,
                $mail,
                $sifre
            ]);
        }
        if ($ekle) {
            session_start();
            $_SESSION['kullanici']=$kadi;
            echo "<script>alert('kullanıcı oluşturuldu');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }
}catch(PDOException $par){
    echo "<script>alert('Bilgileri kontrol edip tekrar deneyiniz!');</script>";
    echo "<script>window.location.href='register.php'</script>";
    }
    $db=null;
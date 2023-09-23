<?php
    $db = new PDO("sqlite:todo.db");
    try {
        $kadi=strip_tags($_POST['kullaniciadi']);
        $sifre = sha1($_POST['password']);
        $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE kullaniciadi=? AND sifre=?");
        $sorgu->execute(array($kadi, $sifre));
        $login = $sorgu->fetch(PDO::FETCH_ASSOC);
        if($login){
            session_start();
            $_SESSION['kullanici']=$kadi;
            header("Location: "."index.php");
        }else{
            echo "<script>alert('hatalı kullanıcı adı veya şifre')</script>";
            echo "<script>window.location.href='login.php'</script>";

        }
    }catch(PDOException $par){
        echo $par->getMessage();
    }
    $db=null;
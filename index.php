<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Melike Sena Çakır">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
        <title>To-Do Application</title>
    </head>
    <body class="body-img">
    <a class="btn btn-outline-danger rounded-circle float-end mt-md-2 mx-md-2" href='cikis.php'>Çıkış Yap</a>
    <div class="text-center">
        <h1 class="mx-5"> TO-DO APP</h1>
        <h3 class="text-secondary">Undated Planner | To Do List</h3>
    </div>
    <div class="container-fluid mt-5">
        <div class="row mx-auto input-group mb-3 w-50 div-bg p-3 rounded-5">
            <input type="text" class="form-control bg-transparent rounded-4" placeholder="to do ara.." id="search">
        </div>
       <div class="row mx-auto input-group mt-3 w-50 div-bg p-3 rounded-5">
                <form action="todoekle.php" class="d-flex" method="post">
                <input type="text" class="form-control bg-transparent rounded-start-4 focus-ring" placeholder="to do ekle..." name="todo" aria-describedby="button-addon2">
                <button class="btn btn-secondary rounded-end-4" name="buton" id="button-addon2">Ekle</button>
                </form>
            <ol class="mt-3 align-items-center rounded-5 todo-bg" id="add_input">
                <?php
                    try {
                        $db = new PDO("sqlite:todo.db");
                        $table="CREATE TABLE IF NOT EXISTS todolist(
                               id INT AUTO_INCREMENT PRIMARY KEY,
                               kullaniciadi VARCHAR(15),
                               todo VARCHAR(30) NOT NULL
                               )";
                        $db->exec($table);
                        $session=$_SESSION['kullanici'];
                        if($session) {
                            $sql = "SELECT todo FROM todolist WHERE kullaniciadi=?";
                            $sonuc = $db->prepare($sql);
                            $sonuc->execute(array($session));
                            $data = $sonuc->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($data as $item) {
                                foreach ($item as $i) {
                                    echo "<li class='d-flex pt-2 text-wrap'>";
                                    echo "<div class='form-check mx-2 '>";
                                    echo "<input class='form-check-input bg-secondary ' type='checkbox'>";
                                    echo "</div>";
                                    echo "<p class='ps-md-5 col-sm-4 col-md-6'>";
                                    echo $i;
                                    echo "</p>";
                                    echo "<a class='ps-md-5 ps-sm-3 col-sm-2 col-md-3 text-decoration-none text-dark'>";
                                    echo "Düzenle";
                                    echo "</a>";
                                    echo "<a class='ps-md-5 ps-sm-5 col-sm-2 col-md-3 text-danger text-decoration-none text-wrap'>";
                                    echo "Sil";
                                    echo "</a>";
                                    echo "</li>";
                                }
                            }
                        }else{
                            echo "<script>alert('Oturumunuz sonlandırılmıştır. Listenize ulaşmak için giriş yapınız !');</script>";
                            echo "<script>window.location.href='login.php'</script>";
                        }
                    }catch(PDOException $par){
                         echo $par;
                    }
                    $db=null;
                ?>
            </ol>
       </div>
    </div>
    </body>
</html>
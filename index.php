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
    <div class="float-end mt-md-2 mx-md-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
        <a  class="text-decoration-none text-dark" href='cikis.php'>Çıkış Yap</a>
    </div>
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
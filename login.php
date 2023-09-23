<!doctype html>
<html lang="tr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do Application</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 back-img vh-100">
            </div>
            <div class="col-md-6 rounded align-self-center mb-5">
                <h3 class="text-sm-center pb-5">LOGIN PAGE</h3>
                <form action="loginkontrol.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="kullaniciadi" name="kullaniciadi" placeholder="Kullanıcı Adınız">
                        <label for="text">Kullanıcı Adınız</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Şifreniz">
                        <label for="Password">Şifreniz</label>
                        <p>Henüz hesabınız yok mu?<a href="register.php" class="link-underline-primary link-dark">Kayıt ol</a></p>
                        <div class="d-grid gap-3">
                            <input type="submit" class="btn btn-outline-primary" name="buton" value="giriş yap">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
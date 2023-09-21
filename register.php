<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do Application</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script href="bootstrap.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 back-img vh-100">
        </div>
        <div class="col-md-6 rounded align-self-center mb-5">
            <h3 class="text-sm-center pb-5">REGISTER PAGE</h3>
            <form action="dbkayit.php" method="post">
                <div class="row g-3">
                    <div class="form-floating col mb-3">
                        <input type="text" class="form-control" id="isim" placeholder="isim" aria-label="First name">
                        <label for="isim">İsim</label>
                    </div>
                    <div class="form-floating col mb-3">
                        <input type="text" class="form-control" id="soyisim" placeholder="Soyisim" aria-label="Last name">
                        <label for="soyisim">Soyisim</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Mail Adresiniz</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="password" aria-labelledby="help">
                    <label for="Password">Şifre oluşturun</label>
                    <div id="help" class="form-text">
                        Şifreniz 8-20 karakter uzunluğunda olmalı, sayı ve özel karakterler içermelidir.
                    </div>
                    <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" id="kadin" value="kadin" name="cinsiyet">
                        <label class="form-check-label" for="kadin">Kadın</label>
                    </div>
                    <div class="form-check form-check-inline mb-2 mt-2">
                        <input class="form-check-input" type="radio" id="erkek" value="erkek" name="cinsiyet">
                        <label class="form-check-label" for="erkek">Erkek</label>
                    </div>

                    <div class="d-grid gap-3">
                        <input type="submit" class="btn btn-outline-primary mt-2" value="kayıt ol">
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

</body>
</html>
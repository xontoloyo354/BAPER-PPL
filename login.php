<?php
session_start();
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];
  echo $email . $pass;
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- FONT AWESOME -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="Front end/style/login.css" />
  <title>Baper!</title>
</head>

<body>
  <main>
    <section class="lupa-password">

      <div class="container form-lupa-password">
        <img class="logo" src="Front end/image/logo.png" alt="logo">
        <div class="margin">
          (Balai Perpustakaan)
        </div>
        <div class="silahkan-masuk">
          Silahkan Masuk
        </div>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="margin form-group">
            <input required class="form-control" type="email" name="email" placeholder="Username/E-Mail">
          </div>
          <div class="margin form-group">
            <ul class="list-unstyled">
              <li>
                <input required class="form-control" type="password" name="password" placeholder="Password">
              </li>
            </ul>
            <div class="ganti-password">
              <button type="submit" name="login" class="btn btn-dark">Login</button>
            </div>
            <div class="row">
              <div class="col">
                <div class=" text-start ">
                  <a href="http://" style="text-decoration: none;color:black;font-size:small">Daftar</a>
                </div>
              </div>
              <div class="col">
                <div class=" text-end ">
                  <a href="#" style="text-decoration: none;color:black;font-size:small">Lupa Passwddddord</a>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/wave.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="img/Instituto_Niels_Borh.png">
    <title>Iniciar Sesion</title>
</head>
<body>
    

<div class="bg-img">
        <div class="content">
            <header><img src="img/Instituto_Niels_Borh.png" width="75px" alt=""></header>
            <form action="validation.php" method="post">
                <div class="field">
                    <span class="fa fa-user"><i class="bi bi-person-fill"></i></span>
                    <input type="text" required placeholder="Username" name="username">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" class="pass-key" required placeholder="Password" name="password">
                </div>
                <div class="pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <div id="container">
                    <button class="learn-more" type="submit">
                      <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                      </span>
                      <span class="button-text">Iniciar Sesión</span>
                    </button>
                  </div>
            </form>
        </div>
        <section>
            <div class="wave"></div>
        </section>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>


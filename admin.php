<?php

include("conn.php");
include("php/checklogin.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="shortcut icon" href="img/Instituto_Niels_Borh.png">
    <title>Administrador</title>
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="img/Instituto_Niels_Borh.png" alt="Instituto_Niels_Borh">
                    <h2>I<span class="primary">N</span>B</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="./php/constructionProcess.php" class="">
                    <span class="material-icons-sharp">groups</span>
                    <h3>Alumnos</h3>
                </a>
                <a href="./php/constructionProcess.php">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Pagos</h3>
                </a>
                <a href="./php/constructionProcess.php">
                    <span class="material-icons-sharp">person</span>
                    <h3>Maestros</h3>
                </a>
                <a href="../php/constructionProcess.php">
                    <span class="material-icons-sharp">auto_stories</span>
                    <h3>Reportes</h3>
                </a>
                <a href="./php/changePassword.php">
                    <span class="material-icons-sharp">manage_accounts</span>
                    <h3>Cambiar Contraseña</h3>
                </a>
                <a href="./php/logout.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Cerrar Sesión</h3>
                </a>
            </div>
        </aside>
        <!-- Final de aside -->

        <main>
            <h1>Dashboard</h1>
            <div class="insights">
                <a href="./php/constructionProcess.php">
                    <div class="students">
                        <span class="material-icons-sharp">groups</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Alumnos</h3>
                                <h1>Ver o agregar un nuevo alumno</h1>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="./php/constructionProcess.php">
                    <div class="payments">
                        <span class="material-icons-sharp">payments</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Pagos</h3>
                                <h1>Realizar pago correspondiente</h1>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="./php/constructionProcess.php">
                    <div class="teachers">
                        <span class="material-icons-sharp">person</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Maestros</h3>
                                <h1>Ver o agregar un nuevo maestro</h1>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="./php/constructionProcess.php">
                    <div class="reports">
                        <span class="material-icons-sharp">auto_stories</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Reportes</h3>
                                <h1>Ver ultimos pagos que se han realizados</h1>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </main>

        <!-- Menu -->

        <div class="right">
            <div class="top">
                <button>
                    <div id="menu-btn">
                        <span class="material-icons-sharp">menu</span>
                    </div>
                </button>
                <div class="theme-toggle">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?php  ?></b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/Instituto_Niels_Borh.png" width="37px" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="js/script.js"></script>
</body>

</html>
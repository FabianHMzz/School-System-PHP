<?php

    session_start();
    include("../conn.php");

    $error = '';

    if(isset($_POST['save'])){
        $oldpass = mysqli_real_escape_string($conn, $_POST['oldpass']);
        $newpass = mysqli_real_escape_string($conn, $_POST['newpass']);
        $database =  "SELECT * FROM admin WHERE idAdmin = '".$_SESSION['school_control']."' and password ='".md5($oldpass);
        $connect = $conn -> query($database);
    }

    if($connect -> num_rows > 0) {
        $database = "UPDATE admin SET idAdmin ='".md5($newpass)."' WHERE idAdmin = '".$_SESSION['school_control']."'";
        $connect2 = $conn -> query($database);

        echo '<script type="text/javascript">window.location="changePass.php?act=1";</script>';
    } else {
        ?>
        $error = '<script type="text/javacript">
        Swal.fire ({
		    icon: 'danger',
		    title: 'Contraseña antigua erronea',
		    timerProgressBar: true,
		    timer: '3000',
		    showConfirmButton: false,
		    allowOutsideClick: false,
		    allowEscapeKey: false,
	        allowEnterKey: false,
	    })   
        </script>';
    }
<?php
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Alumnos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/changePass.css">
    <link rel="shortcut icon" href="../img/Instituto_Niels_Bohr.png">

</head>
<?php

    if (isset($_REQUEST['act']) && @$_REQUEST['act'] == '1') {
        echo '<div class=""></div>'
    }

?>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../img/Instituto_Niels_Bohr.png" alt="Instituto_Niels_Borh">
                    <h2>I<span class="primary">N</span>B</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="../admin.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="students.html">
                    <span class="material-icons-sharp">groups</span>
                    <h3>Alumnos</h3>
                </a>
                <a href="payments.html">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Pagos</h3>
                </a>
                <a href="teachers.html">
                    <span class="material-icons-sharp">person</span>
                    <h3>Maestros</h3>
                </a>
                <a href="reports.html">
                    <span class="material-icons-sharp">auto_stories</span>
                    <h3>Reportes</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">manage_accounts</span>
                    <h3>Cambiar Contraseña</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Cerrar Sesión</h3>
                </a>
            </div>
        </aside>
        <!-- Final de aside -->

        <section>
            <h1>Change Password</h1>
            <div class="Fields">
                <div>
                    <div class="formContainer">
                        <form>
                            <div class="Fields">
                                <div>
                                    <label for="oldpass">Old Password</label>
                                    <input type="password" id="oldpass" name="OldPass" />

                                    <label for="newpass">New Password</label>
                                    <input type="password" id="newpass" name="NewPass" />

                                    <label for="confpass">Confirm New Password</label>
                                    <input type="password" id="confpass" name="ConfPass" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button thar-three">Change Password</a></div>
            </form>
        </section>

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
                        <p>Hey, <b>Fabian</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../img/Instituto_Niels_Bohr.png" width="37px" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="../js/script.js"></script>
    <script>src="//cdn.jsdelivr.net/npm/sweetalert2@11"</script>
</body>

</html>
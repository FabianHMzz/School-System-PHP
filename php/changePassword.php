<?php

    session_start();
    include("../conn.php");
    include ("checklogin.php");

    $error = '';

    if(isset($_POST['save'])){
        $oldpass = mysqli_real_escape_string($conn, $_POST['oldpass']);
        $newpass = mysqli_real_escape_string($conn, $_POST['newpass']);
        $database =  "SELECT * FROM admin WHERE idAdmin = '".$_SESSION['school_control']."' and password ='".md5($oldpass);
        $connect = $conn -> query($database);


    if($connect -> num_rows > 0) {
        $database = "UPDATE admin SET idAdmin ='".md5($newpass)."' WHERE idAdmin = '".$_SESSION['school_control']."'";
        $connect2 = $conn -> query($database);

        echo '<script type="text/javascript">window.location="changePass.php?act=1";</script>';
    } else {

        $error = '<script src="../js/wrongPass.js"></script>';
    }
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
    <link rel="shortcut icon" href="../img/Instituto_Niels_Borh.png">

</head>
<?php

    if (isset($_REQUEST['act']) && @$_REQUEST['act'] == '1') {
        echo '<script src="../js/sucessPass.js"></script>';
    }

    echo $error;

?>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../img/Instituto_Niels_Borh.png" alt="Instituto_Niels_Borh">
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
                <a href="./student.php">
                    <span class="material-icons-sharp">groups</span>
                    <h3>Alumnos</h3>
                </a>
                <a href="./payments.php">
                    <span class="material-icons-sharp">payments</span>
                    <h3>Pagos</h3>
                </a>
                <a href="./teachers.php">
                    <span class="material-icons-sharp">person</span>
                    <h3>Maestros</h3>
                </a>
                <a href="./reports.php">
                    <span class="material-icons-sharp">auto_stories</span>
                    <h3>Reportes</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">manage_accounts</span>
                    <h3>Cambiar Contraseña</h3>
                </a>
                <a href="./logout.php">
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
                        <form action="changePassword.php" method="POST" id="changePass">
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
            <div class="box-3">
                <button class="btn btn-changePass" type="submit" name="save">
                    <span>Change Password</span>
                </button>
            </div>
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
                        <img src="../img/Instituto_Niels_Borh.png" width="37px" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="../js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    
    $(document).ready(function (){
        $("#changePass").validate({
            rules: {
                OldPass: {
                    required: true,
                    minlength: 6
                },
                NewPass: {
                    required: true,
                    minlength: 6
                },
                ConfPass: {
                    required: true,
                    minlength: 6,
                    equalTo: "#newpass"
                }
            },
            messages: {
                OldPass: {
                    required: "Please enter your old password",
                    minlength: "Your password must be at least 6 characters long"
                },
                NewPass: {
                    required: "Please enter your new password",
                    minlength: "Your password must be at least 6 characters long"
                },
                ConfPass: {
                    required: "Please enter your new password",
                    minlength: "Your password must be at least 6 characters long",
                    equalTo: "Please enter the same password as above"
                }
            },
            errorElement: "em",
            errorPlacement: function ( error, element ){
                error.addClass ( "help-block" );
                element.parents ();
                
            }
        });
    })

    </script>
</body>

</html>
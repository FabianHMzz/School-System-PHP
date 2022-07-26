<?php
include('conn.php');
include('php/checklogin.php');

$user = $_POST['username'];
$pass = $_POST['password'];

session_start();

$_SESSION['username']=$user;
$_SESSION['password']=$pass;

$consulta="SELECT*FROM admin where username='$user' and password='$pass'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
   
  header("location: admin.php");
  
} else {
  ?>
  <?php
  include("login.php");
  
  ?>
  <script type="text/javascript">
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
  Toast.fire({
    icon: 'error',
    title: 'Signed unsuccessfully'
  })
  </script>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);
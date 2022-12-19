<?php
include '_config.php';
session_start();

if(isset($_POST["submit"])) { 
  $username = $_POST["username"]; 
  $password = $_POST["password"]; 

  $query = "SELECT * FROM user where username = '$username' AND password = '$password'"; 
  $res = $con->query($query);
  $row = mysqli_fetch_assoc($res);
  if($res->num_rows > 0){
        $_SESSION["name"] = $row["nama_user"];
        $_SESSION["id"] = $row["id_user"];
        header("Location: index.php");
        exit;
  }else {
  ?>
    <script>
    alert('Username atau Password salah, silahkan coba lagi!')
    location.href = 'login_user.html'
    </script>
  <?php
  } 
}
?>
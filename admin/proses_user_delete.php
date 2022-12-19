<?php
include '_header.php';
include '_config.php';

$id_user = $_GET['id_user'];


$result = mysqli_query($con, "DELETE FROM user WHERE id_user=$id_user");


if($id_user != $id){
  if ($result) { ?>
    <script>
        alert('Data berhasil dihapus!')
        location.href = 'page_user.php'
    </script>
  <?php
  } else { ?>
    <script>
        alert('Data Gagal dihapus!')
        location.href = 'page_user.php'
    </script>
  <?php } 
}else{
  ?>
  <script>
        alert('Anda menghapus akun yang anda pakai sekarang, silahkan login dengan akun lain!')
        location.href = 'login_user.html'
    </script>
<?php
$_SESSION = [];
session_unset();
session_destroy();
} ?>
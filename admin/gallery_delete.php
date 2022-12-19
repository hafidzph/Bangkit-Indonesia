<?php
include '_config.php';

$id = $_GET['id'];
$id_user = $_GET['id_user'];

$result = mysqli_query($con, "DELETE FROM gallery WHERE id=$id");
if ($result) { ?>
  <script>
      alert('Data berhasil dihapus!')
      location.href = 'page_gallery.php?id_user=<?= $id_user?>'
  </script>
<?php
} else { ?>
  <script>
      alert('Data Gagal dihapus!')
      location.href = 'page_gallery.php?id_user=<?= $id_user?>'
  </script>
<?php } ?>
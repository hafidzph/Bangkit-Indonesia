<?php
include '_config.php';

$ket = $_POST['keterangan'];
$gambar = isset($_POST['gambar']);
$id_user = $_POST['id_user'];

$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp_name, 'img_gallery/' . $namafile);

$query = "INSERT INTO gallery(keterangan, gambar, id_user) VALUES(
    '" . $ket . "',
    '" . $namafile . "',
    '" . $id_user . "'
    )";

$result = mysqli_query($con, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil ditambahkan!')
        location.href = 'page_gallery.php?id_user=<?= $id_user?>'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal ditambahkan!')
        location.href = 'page_gallery.php?id_user=<?= $id_user?>'
    </script>
<?php } ?>
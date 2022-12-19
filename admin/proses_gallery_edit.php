<?php
include '_config.php';
include '_header.php';

$id = $_POST['id'];
$ket = $_POST['keterangan'];
$id_user = $_POST['id_user'];

$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp_name, 'img_gallery/' . $namafile);

$query;
$result;

if($namafile != null){
    $query = "UPDATE gallery SET keterangan='$ket', gambar='$namafile' WHERE id=$id";
}else{
    $query = "UPDATE gallery SET keterangan='$ket' WHERE id=$id";
}

$result = mysqli_query($con, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil diubah!')
        location.href = 'page_gallery.php?id_user=<?=$id_user?>'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal diubah!')
        location.href = 'page_gallery.php?id_user=<?=$id_user?>'
    </script>
<?php } ?>
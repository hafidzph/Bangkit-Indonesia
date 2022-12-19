<?php include '_header.php'; 
include '_config.php';
?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Ubah Data Gallery</h5>
            <div class="card-body">
            <h5 class="card-title">Form Edit Gallery</h5>
            <?php
            $id = $_GET['id'];
            $id_user = $_GET['id_user'];
            $data = mysqli_query($con, "SELECT * FROM gallery where id = $id");
            $row = mysqli_fetch_array($data); ?>

            <form action="proses_gallery_edit.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" class="form-control" value="<?= $row['id']
                ?>">
                <input type="hidden" name="id_user" class="form-control" value="<?= $id_user
                ?>">
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <br>
                  <textarea rows="5" cols="142" name="keterangan" class="ckeditor" class="form-control" id="artikel"><?=
                  $row['keterangan'] ?></textarea>
                  <br>
                  <div class="form-group">
                      <label for="">Gambar</label><br>
                      <img src="<?= "img_gallery/" . $row['gambar'] ?>" width="70" height="70" class="mb-3">
                      <input name="gambar" type="file" id="gambar" class="form-control" />
                  </div>
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-danger " onclick="window.history.go(-1); return false;">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary ">Update</button>
                </div>
        </form>
        </div>
    </div>
</div>
<!-- ./content -->
<?php include '_footer.php'; ?>
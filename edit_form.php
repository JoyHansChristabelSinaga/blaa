<?php
    $id = $_GET['id'];
    include("connection.php");
    $query = "SELECT * FROM list";
    $data = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kegiatan</title>
</head>
<body>
    <div id = main>
        <form action="edit_db.php?nama=<?=$nama?>" method="POST" class="mx-5" enctype="multipart/form-data">
        <div class="form-group row mb-2">
                <label for="Kegiatan" class="col-sm-3 col-form-label">Kegiatan</label>
                <div class="col-sm-9">
                <input type="hidden" name="id" value="<?= $id ?>">
                    <select class="custom-select form-control" name = "kegiatan">
                        <?php foreach($data as $d){ ?>
                            <option value=<?= $d["kegiatan"] ?>><?= $d["kegiatan"] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="waktu" class="col-sm-3 col-form-label">Waktu</label>
                <div class="col-sm-9">
                    <input required type="text" class="form-control" name="waktu" id="waktu" placeholder="waktu" required autocomplete="off" autofocus>
                </div>
            </div>
            <button onclick="return confirm('Simpan Perubahan Kegiatan?')" type="submit" name = "submit" class="btn btn-success">Simpan</button>
            <a href="index.php?nama=<?=$nama?>" class="btn btn btn-outline-danger"> Kembali</a>
        </form>
    </div>
</body>
</html>
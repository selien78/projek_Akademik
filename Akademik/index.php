<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akademik</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        include 'navbar.php';
        ?>
        <div class="row mt-3">
            <?php
            
            require 'setting.php';
            $query = "SELECT * FROM tbl_mahasiswa";
            $sql = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_object($sql)) {
            ?>

                <div class="col mb-3">
                    <div class="card" style="width: 18rem;">
                    
                       
                        <div class="card-body">
                            <h5 style="text-align: center;"><?= $data->nama; ?></h5>
                            <hr>
                            <p class="card-text"><?= $data->nis; ?></p>
                            <p class="card-text"><?= $data->kelas; ?></p>
                            <p class="card-text"><?= $data->prodi; ?></p>
                            <p class="card-text"><?= $data->semester; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <?php
        include 'footer.php';
        ?>
    </div>
</body>

</html>
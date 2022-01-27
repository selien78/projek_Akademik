
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <?php
        include 'navbar.php';
        ?>

        <h2 style="text-align: center;" class="alert alert-info mt-3 ">HALAMAN DATA MAHASISWA</h2>
        <a href="tambah.php" class="btn btn-primary mb-3"> TAMBAH DATA </a>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nis</th>
                    <th>kelas</th>
                    <th>prodi</th>
                    <th>semester</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-info">
                <?php
                require 'setting.php';
                $query = "SELECT * FROM tbl_mahasiswa";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>
                    <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <?php echo $data->nama; ?> </td>
                        <td> <?php echo $data->nis; ?> </td>
                        <td> <?php echo $data->kelas; ?> </td>
                        <td> <?php echo $data->prodi; ?> </td>
                        <td> <?php echo $data->semester; ?> </td>
                        <td>
                            <a href="edit.php?url-kode=<?= $data->kode; ?>">
                                <input type="submit" value="Edit" class="btn btn-warning">
                            </a>
                            

                                <a href="hapus.php?kode=<?= $data->kode; ?>">
                                    <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
                                </a>
                            <?php
                            
                              
                            ?>

                        </td>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
       

        <?php
        include 'footer.php';
        ?>
    </div>
</body>

</html>
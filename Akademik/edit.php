<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3 class="alert alert-info"> Edit Data MAHASISWA</h3>
        <?php
        require 'setting.php';
        //menampilan data dalam table
        if (isset($_GET['url-kode'])) {
            $input_kode = $_GET['url-kode'];
            $query = "SELECT * FROM tbl_mahasiswa WHERE kode ='$input_kode'";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_object($result);
        }
        //simpan data yang telah dirubah dalam table
        if (isset($_POST['simpan'])) {
            $txtnama = $_POST['txtnama'];
            $txtnis = $_POST['txtnis'];
            $txtkelas = $_POST['txtkelas'];
            $txtprodi = $_POST['txtprodi'];
            $Semester = $_POST['semester'];
            //update syntax dalam mysql
            $sql = "UPDATE tbl_mahasiswa SET 
                         nama='$txtnama',nis='$txtnis',kelas='$txtkelas'
                         ,prodi='$txtprodi', semester='$Semester' WHERE kode= $input_kode";
            $result = mysqli_query($koneksi, $sql);
            //perulangan jika dia berhasil maka ke index dan data diperbarui
            if ($result) {
                header('location: home.php');
                //jika salah data tidak berhasil diperbarui dan menghasilkan errors
            } else {
                echo 'Query Error' . mysqli_error($koneksi);
            }
        }
        ?>

        <form action="#" method="Post">

            <div class="mb-3">
            <input type="hidden" name="txtkode" class="form-control" value="<?= $data->kode; ?>">
                <label for="">Nama</label>
                <input type="text" name="txtnama" class="form-control" value="<?= $data->nama; ?>">
            </div>

            <div class="mb-3">
                <label for="">Nis</label>
                <input type="text" name="txtnis" class="form-control" value="<?= $data->nis; ?>">
            </div>

            <div class="mb-3">
                <label for="">Kelas</label>
                <input type="text" name="txtkelas" class="form-control" value="<?= $data->kelas; ?>">
            </div>
            <div class="mb-3">
                <label for="">Prodi</label>
                <input type="text" name="txtprodi" class="form-control" value="<?= $data->prodi; ?>">
            </div>
            <div class="mb-3">
                <label for="">semester</label>
                <input type="text" name="semester" class="form-control" value="<?= $data->semester; ?>">
            </div>

            <input type="submit" name="simpan" value="Simpan Perubahan Data" class="btn btn-primary">
            <a href="home.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</body>

</html>
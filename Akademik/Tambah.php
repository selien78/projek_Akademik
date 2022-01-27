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
    
     <div class="container mb-5">
     <?php
    include 'navbar.php';
    ?>
        <h2 class="alert alert-info mb-3 mt-5"> TAMBAH DATA MAHASISWA </h2>
        <?php
                require 'setting.php';
                if (isset($_POST['simpan'])) {
                    $txtnama = $_POST['txtnama'];
                    $txtnis = $_POST['txtnis'];
                    $txtkelas = $_POST['txtkelas'];
                    $txtprodi = $_POST['txtprodi'];
                    $txtsemester = $_POST['txtsemester'];
                    $sql = "INSERT INTO tbl_mahasiswa VALUES (NULL, '$txtnama', '$txtnis', '$txtkelas', '$txtprodi','$txtsemester')";
                    $query = mysqli_query($koneksi, $sql);
                    if ($query){
                        header('location: home.php');
                    }else {
                        echo 'Query Error : ' . mysqli_error($koneksi);
                    }
                }
    
                ?>
        <form action="#" method="POST"> 
        <div class="mb-3">
            <label>nama</label>
            <input type="text" name="txtnama" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nis</label>
            <input type="text" name="txtnis" class="form-control">
        </div>

        <div class="mb-3">
            <label>kelas</label>
            <input name="txtkelas" class="form-control"></input>
        </div>

        <div class="mb-3">
            <label>prodi</label>
            <input type="text" name="txtprodi" class="form-control">
        </div>
            
        <div class="mb-3">
            <label>semester</label>
            <input type="text" name="txtsemester" class="form-control">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="home.php" class="btn btn-secondary"> HOME </a>
    </form>

    </div>
    <?php
    include 'footer.php';
    ?>

</body>

</html>
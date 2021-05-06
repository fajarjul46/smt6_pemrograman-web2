<?php
//Proses Input Ke Database

$nama = @$_GET['nama_tamu'];
$alamat = @$_GET['alamat_tamu'];

if (!is_null($nama) && !is_null($alamat)) {
    $query = "insert into data (nama_tamu,alamat_tamu) values ('$nama','$alamat')";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Success, Insert Data');
        window.location = 'index.php';</script>";
    } else {
        echo "<script>alert('Failed, Insert Data');
        window.location = 'index.php';</script>";
    }

    $koneksi->close();
} else {
    // DATA TIDAK ADA YANG DI PROSES

?>

    <div class="card card-primary" style="width: 70%;">
        <div class="card-header">
            <h3 class="card-title">Buku Tamu</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="card-body">
                <form action="input.php" method="get">

                    <div class="form-group row">
                        <label for="Nama Tamu" class="col-sm-2 col-form-label">Nama Tamu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_tamu" placeholder="Nama Tamu">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Alamat Tamu" class="col-sm-2 col-form-label">Alamat Tamu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat_tamu" placeholder="Alamat Tamu">
                        </div>
                    </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>

<?php } ?>
<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">

    <!-- CSRF TOKEN -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Data Anggota</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a href="indexAjax.php" class="navbar-brand" style="color: #fff;">
            CRUD dengan Ajax
        </a>
    </nav>
    <div class="container">
        <h2 align="center" style="margin: 30px;">Data Anggota</h2>

        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required="true">
                    </div>
                    <p class="text-danger" id="err_nama"></p>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true"> Laki-laki
                        <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
                    </div>
                    <p class="text-danger" id="err_jenis_kelamin"></p>
                </div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <p class="text-danger" id="err_alamat"></p> <!-- Added error display for 'alamat' -->
            </div>

            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                <p class="text-danger" id="err_no_telp"></p>
            </div>


            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </form>

        <div class="data"></div>
    </div>

    <div class="text-center">
        <?php echo date('Y'); ?> Copyright:
        <a href="https://google.com/">Desain Dan Pemrograman Web</a>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            // Mengirimkan token keamanan
            $.ajaxSetup({
                headers: {
                    'csrf-token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.data').load("data.php");
        })
        $("#simpan").click(function() {
            var data = $(".form-data").serialize();
            var nama = document.getElementById("nama").value;
            var alamat = document.getElementById("alamat").value;
            var no_telp = document.getElementById("no_telp").value;

            // Reset error messages
            document.getElementById("err_nama").innerHTML = "";
            document.getElementById("err_alamat").innerHTML = "";
            document.getElementById("err_jenis_kelamin").innerHTML = "";
            document.getElementById("err_no_telp").innerHTML = "";

            // Validation checks
            var valid = true;

            if (nama === "") {
                document.getElementById("err_nama").innerHTML = "Nama Harus Diisi";
                valid = false;
            }

            if (alamat === "") {
                document.getElementById("err_alamat").innerHTML = "Alamat Harus Diisi";
                valid = false;
            }

            if (!document.getElementById("jenkel1").checked && !document.getElementById("jenkel2").checked) {
                document.getElementById("err_jenis_kelamin").innerHTML = "Jenis Kelamin Harus Dipilih";
                valid = false;
            }

            if (no_telp === "") {
                document.getElementById("err_no_telp").innerHTML = "No Telepon Harus Diisi";
                valid = false;
            }

            if (valid) {
                $.ajax({
                    type: "POST",
                    url: "form_action.php",
                    data: data,
                    success: function() {
                        $('.data').load("data.php");
                        document.getElementById("id").value = "";
                        document.getElementById("form-data").reset();
                    },
                    error: function(response) {
                        console.log(response.responseText);
                    }
                });
            }
        });
    </script>
</body>

</html>
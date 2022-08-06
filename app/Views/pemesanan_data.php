<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tugas Kelompok 4</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("DataTables-1.12.1/css/jquery.dataTables.min.css"); ?>" rel="stylesheet">

    <!--[endif]-->
  </head>
  <body>
    <!-- Nav BAr -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Tugas Kelompok ke-4</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>/pemesanan">Pemesanan <span class="sr-only"></span></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>/login/logout">Logout <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<!-- Nav Bar End -->
	<!--strat-->
    
    <!--end-->
    <div class="bd-example" style="padding: 1.5rem;margin-right: 0;margin-left: 0;border-width: .2rem;">
    <div class="card" >
      <div class="card-header">
        Pemesanan Produk
      </div>
      <div class="card-body">
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                  <th style="width:10px">Id</th>
                  <th>Pemesan</th>
                  <th>Barang</th>
                  <th>Qty</th>
                  <th>Status</th>
              </tr>
          </thead>
          <tbody>
            <?php
            foreach ($data as $kk => $vPesanan) {
              echo "<tr>";
              echo "<td>".$vPesanan["id_pesanan"]."</pesanan>";
              echo "<td>".$vPesanan["nama_pemesan"]."</pesanan>";
              echo "<td>".$vPesanan["id_barang"]."</pesanan>";
              echo "<td>".$vPesanan["jumlah_pesanan"]."</pesanan>";
              echo "<td>".$vPesanan["proses"]."</pesanan>";
              echo "</tr>";
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("js/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("DataTables-1.12.1/js/jquery.dataTables.js"); ?>"></script>
    <script>
      $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
  </body>
</html>
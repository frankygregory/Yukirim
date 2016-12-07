<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('panel/common/top'); ?>

</head>

<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">yukirim</a>
    </div>
    <!-- Top Menu Items -->
    <?php $this->load->view('panel/common/top-menu');?>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php $this->load->view('panel/common/menu') ?>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Supir
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Supir
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-3">
                <input type="button" value="Tambah" class="btn btn-primary">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Supir</th>
                            <th>No. HP</th>
                            <th>Ketersediaan</th>
                            <th>Rating</th>
                            <th>Transaksi</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Joko</td>
                            <td>085234567890</td>
                            <td>Tersedia</td>
                            <td>5.0/5.0</td>
                            <td>10</td>
                            <td>On Progress</td>
                            <td><a href="#" class="btn btn-success">Aktif</a> <a href="#" class="btn btn-danger">Tidak Aktif</a></td>
                        </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php $this->load->view('panel/common/bottom'); ?>
</body>

</html>

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
            <a class="navbar-brand" href="<?= site_url() ?>">yukirim</a>
        </div>

        <!-- Top Menu Items -->
        <?php $this->load->view('panel/common/top-menu'); ?>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <?php $this->load->view('panel/common/menu'); ?>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Tagihan
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Tagihan
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
                                <th>No. Tagihan</th>
                                <th>Tanggal Tagihan</th>
                                <th>Jatuh Tempo</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Transaksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>12-12-2016</td>
                                <td>13-13-2016</td>
                                <td>Rp. 1.200.000</td>
                                <td>Belum Lunas</td>
                                <td><input type="button" value="Detail" class="btn btn-success"></td>
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

<!-- jQuery -->
<?php $this->load->view('panel/common/bottom'); ?>
</body>

</html>

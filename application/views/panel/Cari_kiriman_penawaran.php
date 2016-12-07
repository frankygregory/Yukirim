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
                        Penawaran
                        <small>Cari Kiriman</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Cari Kiriman > Penawaran
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <form role="form" action="#">
                    <div class="col-md-4">
                        <div class="form-group">
                            <!--<label>Lokasi Asal</label>-->
                            <input type="text" class="form-control" placeholder="Lokasi Asal">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <!--<label>Lokasi Tujuan</label>-->
                            <input type="text" class="form-control" placeholder="Lokasi Tujuan">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="submit" value="Cari" class="btn btn-default">
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Nama Kiriman</th>
                                <th>Harga</th>
                                <th>Asal</th>
                                <th>Tujuan</th>
                                <th>KM</th>
                                <th>Berakhir</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>panel/cari_kiriman/detail"><h4>Lemari 2 Pintu</h4></a><br>
                                    <img src="<?= base_url() ?>/assets/panel/images/gambar-01.jpg" width="110">
                                    <h5><strong>400 Kg</strong></h5>
                                </td>
                                <td>
                                    Bid : 2 (1 Active) <br>
                                    Low : 5.000.000
                                </td>
                                <td>
                                    Surabaya<br>
                                    Tgl : 10oct - 12oct 16.
                                </td>
                                <td>
                                    Bandung<br>
                                    Tgl : 10oct - 12oct 16.
                                </td>
                                <td>1000</td>
                                <td>5 Jam</td>
                            </tr>

                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>panel/cari_kiriman/detail"><h4>Lemari 2 Pintu</h4></a><br>
                                    <img src="<?= base_url() ?>/assets/panel/images/gambar-01.jpg" width="110">
                                    <h5><strong>400 Kg</strong></h5>
                                </td>
                                <td>
                                    Bid : 2 (1 Active) <br>
                                    Low : 5.000.000
                                </td>
                                <td>
                                    Surabaya<br>
                                    Tgl : 10oct - 12oct 16.
                                </td>
                                <td>
                                    Bandung<br>
                                    Tgl : 10oct - 12oct 16.
                                </td>
                                <td>1000</td>
                                <td>5 Jam</td>
                            </tr>

                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>panel/cari_kiriman/detail"><h4>Lemari 2 Pintu</h4></a><br>
                                    <img src="<?= base_url() ?>/assets/panel/images/gambar-01.jpg" width="110">
                                    <h5><strong>400 Kg</strong></h5>
                                </td>
                                <td>
                                    Bid : 2 (1 Active) <br>
                                    Low : 5.000.000
                                </td>
                                <td>
                                    Surabaya<br>
                                    Tgl : 10oct - 12oct 16.
                                </td>
                                <td>
                                    Bandung<br>
                                    Tgl : 10oct - 12oct 16.
                                </td>
                                <td>1000</td>
                                <td>5 Jam</td>
                            </tr>

                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>panel/cari_kiriman/detail"><h4>Lemari 2 Pintu</h4></a><br>
                                    <img src="<?= base_url() ?>/assets/panel/images/gambar-01.jpg" width="110">
                                    <h5><strong>400 Kg</strong></h5>
                                </td>
                                <td>
                                    Bid : 2 (1 Active) <br>
                                    Low : 5.000.000
                                </td>
                                <td>
                                    Surabaya<br>
                                    Tgl : 10oct - 12oct 16.
                                </td>
                                <td>
                                    Bandung<br>
                                    Tgl : 10oct - 12oct 16.
                                </td>
                                <td>1000</td>
                                <td>5 Jam</td>
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

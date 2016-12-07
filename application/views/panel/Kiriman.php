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
                        Kiriman
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Kiriman
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#pending" aria-controls="pending" role="tab" data-toggle="tab">Pending</a>
                        </li>
                        <li role="presentation">
                            <a href="#pesanan" aria-controls="pesanan" role="tab" data-toggle="tab">Pesanan</a>
                        </li>
                        <li role="presentation">
                            <a href="#dikirim" aria-controls="dikirim" role="tab" data-toggle="tab">Dikirim</a>
                        </li>
                        <li role="presentation">
                            <a href="#diambil" aria-controls="diambil" role="tab" data-toggle="tab">Diambil</a>
                        </li>
                        <li role="presentation">
                            <a href="#diterima" aria-controls="diterima" role="tab" data-toggle="tab">DIterima</a>
                        </li>
                        <li role="presentation">
                            <a href="#selesai" aria-controls="selesai" role="tab" data-toggle="tab">Selesai</a>
                        </li>
                    </ul>
                    <br>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="pending">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nama Kirim</th>
                                        <th>Harga</th>
                                        <th>Asal</th>
                                        <th>Tujuan</th>
                                        <th>KM</th>
                                        <th>Supir</th>
                                        <th>Kendaraan</th>
                                        <th>Lacak</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox">
                                            Judul Kiriman

                                        </td>
                                        <td>500.000</td>
                                        <td>
                                            Driyorejo Gresik <br>
                                            10 oct - 12 oct 2016
                                        </td>
                                        <td>
                                            Jakarta<br>
                                            10 oct - 12 oct 2016</td>
                                        <td>1205</td>
                                        <td>
                                            <select>
                                                <option selected></option>
                                                <option> Roland</option>
                                                <option> Dikin</option>
                                            </select>

                                        </td>
                                        <td>
                                            <select>
                                                <option selected></option>
                                                <option> Tronton</option>
                                                <option> Damtrek</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select>
                                                <option selected></option>
                                                <option> Alat</option>
                                                <option> Telepon</option>
                                            </select>
                                        </td>
                                        <td><input type="button" class="btn btn-success" value="Pesan"> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">
                                            Judul Kiriman

                                        </td>
                                        <td>500.000</td>
                                        <td>
                                            Driyorejo Gresik <br>
                                            10 oct - 12 oct 2016
                                        </td>
                                        <td>
                                            Jakarta<br>
                                            10 oct - 12 oct 2016</td>
                                        <td>1205</td>
                                        <td>
                                            <select>
                                                <option selected></option>
                                                <option> Roland</option>
                                                <option> Dikin</option>
                                            </select>

                                        </td>
                                        <td>
                                            <select>
                                                <option selected></option>
                                                <option> Tronton</option>
                                                <option> Damtrek</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select>
                                                <option selected></option>
                                                <option> Alat</option>
                                                <option> Telepon</option>
                                            </select>
                                        </td>
                                        <td><input type="button" class="btn btn-success" value="Pesan"> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">
                                            Judul Kiriman

                                        </td>
                                        <td>500.000</td>
                                        <td>
                                            Driyorejo Gresik <br>
                                            10 oct - 12 oct 2016
                                        </td>
                                        <td>
                                            Jakarta<br>
                                            10 oct - 12 oct 2016</td>
                                        <td>1205</td>
                                        <td>
                                            <select>
                                                <option selected></option>
                                                <option> Roland</option>
                                                <option> Dikin</option>
                                            </select>

                                        </td>
                                        <td>
                                            <select>
                                                <option selected></option>
                                                <option> Tronton</option>
                                                <option> Damtrek</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select>
                                                <option selected></option>
                                                <option> Alat</option>
                                                <option> Telepon</option>
                                            </select>
                                        </td>
                                        <td><input type="button" class="btn btn-success" value="Pesan"> </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="pesanan">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nama Kirim</th>
                                    <th>Harga</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>KM</th>
                                    <th>Supir</th>
                                    <th>Kendaraan</th>
                                    <th>Lacak</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        Judul Kiriman

                                    </td>
                                    <td>500.000</td>
                                    <td>
                                        Driyorejo Gresik <br>
                                        10 oct - 12 oct 2016
                                    </td>
                                    <td>
                                        Jakarta<br>
                                        10 oct - 12 oct 2016</td>
                                    <td>1205</td>
                                    <td>
                                        Roland
                                    </td>
                                    <td>
                                        Tronton
                                    </td>
                                    <td>
                                       Alat
                                    </td>
                                    <td><input type="button" class="btn btn-success" value="Dikirim"> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        Judul Kiriman

                                    </td>
                                    <td>500.000</td>
                                    <td>
                                        Driyorejo Gresik <br>
                                        10 oct - 12 oct 2016
                                    </td>
                                    <td>
                                        Jakarta<br>
                                        10 oct - 12 oct 2016</td>
                                    <td>1205</td>
                                    <td>
                                        Roland
                                    </td>
                                    <td>
                                        Tronton
                                    </td>
                                    <td>
                                        Alat
                                    </td>
                                    <td><input type="button" class="btn btn-success" value="Dikirim"> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        Judul Kiriman

                                    </td>
                                    <td>500.000</td>
                                    <td>
                                        Driyorejo Gresik <br>
                                        10 oct - 12 oct 2016
                                    </td>
                                    <td>
                                        Jakarta<br>
                                        10 oct - 12 oct 2016</td>
                                    <td>1205</td>
                                    <td>
                                        Roland
                                    </td>
                                    <td>
                                        Tronton
                                    </td>
                                    <td>
                                        Alat
                                    </td>
                                    <td><input type="button" class="btn btn-success" value="Dikirim"> </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="dikirim">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nama Kirim</th>
                                    <th>Harga</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>KM</th>
                                    <th>Supir</th>
                                    <th>Kendaraan</th>
                                    <th>Lacak</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        Judul Kiriman

                                    </td>
                                    <td>500.000</td>
                                    <td>
                                        Driyorejo Gresik <br>
                                        10 oct - 12 oct 2016
                                    </td>
                                    <td>
                                        Jakarta<br>
                                        10 oct - 12 oct 2016</td>
                                    <td>1205</td>
                                    <td>
                                        Roland
                                    </td>
                                    <td>
                                        Tronton
                                    </td>
                                    <td>
                                        Alat
                                    </td>
                                    <td><input type="button" class="btn btn-success" value="Diambil"> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        Judul Kiriman

                                    </td>
                                    <td>500.000</td>
                                    <td>
                                        Driyorejo Gresik <br>
                                        10 oct - 12 oct 2016
                                    </td>
                                    <td>
                                        Jakarta<br>
                                        10 oct - 12 oct 2016</td>
                                    <td>1205</td>
                                    <td>
                                        Roland
                                    </td>
                                    <td>
                                        Tronton
                                    </td>
                                    <td>
                                        Alat
                                    </td>
                                    <td><input type="button" class="btn btn-success" value="Diambil"> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        Judul Kiriman

                                    </td>
                                    <td>500.000</td>
                                    <td>
                                        Driyorejo Gresik <br>
                                        10 oct - 12 oct 2016
                                    </td>
                                    <td>
                                        Jakarta<br>
                                        10 oct - 12 oct 2016</td>
                                    <td>1205</td>
                                    <td>
                                        Roland
                                    </td>
                                    <td>
                                        Tronton
                                    </td>
                                    <td>
                                        Alat
                                    </td>
                                    <td><input type="button" class="btn btn-success" value="Diambil"> </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="diambil">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nama Kirim</th>
                                    <th>Harga</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>KM</th>
                                    <th>Supir</th>
                                    <th>Kendaraan</th>
                                    <th>Lacak</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        Judul Kiriman

                                    </td>
                                    <td>500.000</td>
                                    <td>
                                        Driyorejo Gresik <br>
                                        10 oct - 12 oct 2016
                                    </td>
                                    <td>
                                        Jakarta<br>
                                        10 oct - 12 oct 2016</td>
                                    <td>1205</td>
                                    <td>
                                        Roland
                                    </td>
                                    <td>
                                        Tronton
                                    </td>
                                    <td>
                                        Alat
                                    </td>
                                    <td><input type="button" class="btn btn-success" value="Diterima"> </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="diterima">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nama Kirim</th>
                                    <th>Harga</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>KM</th>
                                    <th>Supir</th>
                                    <th>Kendaraan</th>
                                    <th>Lacak</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        Judul Kiriman

                                    </td>
                                    <td>500.000</td>
                                    <td>
                                        Driyorejo Gresik <br>
                                        10 oct - 12 oct 2016
                                    </td>
                                    <td>
                                        Jakarta<br>
                                        10 oct - 12 oct 2016</td>
                                    <td>1205</td>
                                    <td>
                                        Roland
                                    </td>
                                    <td>
                                        Tronton
                                    </td>
                                    <td>
                                        Alat
                                    </td>
                                    <td><input type="button" class="btn btn-success" value="Selesai"> </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="selesai">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nama Kirim</th>
                                    <th>Harga</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>KM</th>
                                    <th>Supir</th>
                                    <th>Kendaraan</th>
                                    <th>Lacak</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        Judul Kiriman

                                    </td>
                                    <td>500.000</td>
                                    <td>
                                        Driyorejo Gresik <br>
                                        10 oct - 12 oct 2016
                                    </td>
                                    <td>
                                        Jakarta<br>
                                        10 oct - 12 oct 2016</td>
                                    <td>1205</td>
                                    <td>
                                        Roland
                                    </td>
                                    <td>
                                        Tronton
                                    </td>
                                    <td>
                                        Alat
                                    </td>
                                    <td>3 Hari 2 Jam </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
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


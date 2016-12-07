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
                        User
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> User
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-xs-1">
                    <input type="button" value="Tambah" class="btn btn-primary">
                </div>
                <div class="col-xs-1">
                    <input type="button" value="Tambah Group" class="btn btn-primary">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Group</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>user01</td>
                                <td>User 1</td>
                                <td>testing.coba@gmail.com</td>
                                <td>
                                    <select>
                                        <option></option>
                                        <option selected>Group 1</option>
                                        <option>Group 2</option>
                                        <option>Group 3</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>user02</td>
                                <td>User 2</td>
                                <td>testing.coba@gmail.com</td>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Group 1</option>
                                        <option selected>Group 2</option>
                                        <option>Group 3</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>user03</td>
                                <td>User 3</td>
                                <td>testing.coba@gmail.com</td>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Group 1</option>
                                        <option selected>Group 2</option>
                                        <option>Group 3</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>user04</td>
                                <td>User 4</td>
                                <td>testing.coba@gmail.com</td>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Group 1</option>
                                        <option>Group 2</option>
                                        <option selected>Group 3</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>user05</td>
                                <td>User 5</td>
                                <td>testing.coba@gmail.com</td>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Group 1</option>
                                        <option>Group 2</option>
                                        <option selected>Group 3</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>user06</td>
                                <td>User 6</td>
                                <td>testing.coba@gmail.com</td>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Group 1</option>
                                        <option>Group 2</option>
                                        <option selected>Group 3</option>
                                    </select>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-xs-1">
                    <input type="button" value="Tambah Group" class="btn btn-primary">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Grup</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Group 01</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Group 02</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Group 03</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php $this->load->view('panel/common/bottom'); ?>
</body>

</html>

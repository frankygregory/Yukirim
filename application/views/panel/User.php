
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
                            <?php
                            $no = 1;
                            foreach($userdata as $data){ ?>
                                <tr>
                                    <td><?=$no?></td>
                                    <td><?=$data['username']?></td>
                                    <td><?=$data['user_fullname']?></td>
                                    <td><?=$data['user_email']?></td>
                                    <td>
                                        <select>
                                            <option></option>
                                            <option selected>Group 1</option>
                                            <option>Group 2</option>
                                            <option>Group 3</option>
                                        </select>
                                    </td>
                                </tr>
                            <?php
                            $no++;
                            }
                            ?>
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

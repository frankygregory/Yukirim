

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        All Data
                        <small>Kirim</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Kirim > All
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                           <a href="<?=site_url('kirim/kirimbarang/')?>" class="btn btn-success"><i class="fa fa-send"></i> Kirim Barang</a>
                        </div>
                    </div>
                    <form action="#" method="post">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Lokasi Asal">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Lokasi Tujuan">
                            </div>
                        </div>
                        <div class="col-md-2">
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

                            <?php
                            foreach($data as $data){ ?>
                                <tr>
                                    <td>
                                        <a href="<?= site_url() ?>kirim/detail/<?=$data['shipment_id']?>"><h4><?=$data['shipment_title']?></h4></a>
<!--                                        <img src="--><?//= base_url() ?><!--/assets/panel/images/gambar-01.jpg" width="110">-->
                                        <h5>400 Kg</h5>
                                    </td>
                                    <td>
                                        Bid : 2 (1 Active) <br>
                                        Low : <?=$data['shipment_price']?>
                                    </td>
                                    <td>
                                        <?=$data['location_from_name']?><br>
                                        Tgl : <?=$data['shipment_delivery_date_to']?> - <?=$data['shipment_end_date']?>
                                    </td>
                                    <td>
                                        <?=$data['location_to_name']?><br>
                                        Tgl : <?=$data['shipment_delivery_date_to']?> - <?=$data['shipment_end_date']?>
                                    </td>
                                    <td>1000</td>
                                    <td>5 Jam</td>
                                </tr>
                            <?php }
                            ?>

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

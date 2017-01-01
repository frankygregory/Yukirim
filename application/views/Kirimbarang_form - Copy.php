
<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Kirim
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Kirim Barang
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<form role="form">
<div class="row">
    <div class="col-md-6">

        <div class="form-group">
            <label>Judul Kiriman</label>
            <input class="form-control">
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <textarea cols="3" rows="6" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Foto Barang</label>
            <input type="file" id="imageBarang" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div id="image-holder"> </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Asal Lokasi</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Detail Lokasi</label>
                    <textarea class="form-control" cols="3" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Detail Lokasi</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>History</label>
                    <select name="history_place" class="form-control">
                        <option selected></option>
                        <option>Jakarta</option>
                        <option>Bandung</option>
                        <option>Surabaya</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Tujuan Lokasi</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Detail Lokasi</label>
                    <textarea class="form-control" cols="3" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Detail Lokasi</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>History</label>
                    <select name="history_place" class="form-control">
                        <option selected></option>
                        <option>Jakarta</option>
                        <option>Bandung</option>
                        <option>Surabaya</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

<hr>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Items</h3>
            </div>
            <div class="panel-body">
                <div class="items">
                    <div class="form-group">
                        <label>Items</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" cols="3" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Panjang</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Lebar</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tinggi</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <div class="checkbox-inline">
                                    <br><br><label>
                                        <input type="checkbox" value="">Meter
                                    </label>
                                </div>
                                <div class="checkbox-inline">
                                    <br><br><label>
                                        <input type="checkbox" value="">Centimeter
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Berat</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <div class="checkbox-inline">
                                    <br><br><label>
                                        <input type="checkbox" value="">Kg
                                    </label>
                                </div>
                                <div class="checkbox-inline">
                                    <br><br><label>
                                        <input type="checkbox" value="">Ton
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Qty</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group" style="float: right">
                    <input type="button" id='additems' class="btn btn-success" value="Add">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-2">
        <div class="form-group">
            <label>Tanggal Kirim</label>
            <input type="text" class="form-control" id="tglawal" onmouseover="getTanggal(this.id)" width="50px" placeholder="Tanggal awal">
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label>&nbsp;</label>
            <input type="text" class="form-control" id ="tglakhir" onmouseover="getTanggal(this.id)" width="50px" placeholder="Tanggal akhir">
        </div>
    </div>
 </div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Cara Pemesanan</label>&nbsp;
            <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Penawaran
            </label>
            <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">Pesan secara instan
            </label>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-default">Kirim</button>
<button type="reset" class="btn btn-default">Batal</button>

</form>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

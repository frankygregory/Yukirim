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

<div id="errorResult"></div>
<form role="form" id="kirimForm" name="kirimForm" method="post" action="<?=site_url('kirim/dokirimbarang')?>" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-6">

        <div class="form-group">
            <label>Judul Kiriman</label>
            <input class="form-control" name="shipment_title" id="shipment_title">
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <textarea cols="3" rows="6" name="shipment_information" id="shipment_information" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Foto Barang</label>
            <input type="file" id="shipment_pictures" name="shipment_pictures" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div id="image-holder"></div>
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
                    <input type="text" class="form-control" id="location_from_name" name="location_from_name">
                </div>
                <div class="form-group">
                    <label>Detail Lokasi</label>
                    <textarea class="form-control" cols="3" rows="3" id="location_from_address" name="location_from_address"></textarea>
                </div>
                <div class="form-group">
                    <label>History</label>
                    <select name="history_first_place" id="history_first_place" class="form-control">
                        <option selected></option>
                        <option value="jakarta">Jakarta</option>
                        <option value="bandung">Bandung</option>
                        <option value="surabaya">Surabaya</option>
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
                    <input type="text" class="form-control" id="location_to_name" name="location_to_name">
                </div>
                <div class="form-group">
                    <label>Detail Lokasi</label>
                    <textarea class="form-control" cols="3" rows="3" id="location_to_address" name="location_to_address"></textarea>
                </div>
                <div class="form-group">
                    <label>History</label>
                    <select name="history_last_place" id="history_last_place" class="form-control">
                        <option selected></option>
                        <option value="jakarta">Jakarta</option>
                        <option value="bandung">Bandung</option>
                        <option value="surabaya">Surabaya</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

<hr>

<div class="row">
    <div class="col-md-3">&nbsp;</div>
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Items</h3>
            </div>
            <div class="panel-body">
                <div class="items">
                    <div class="form-group">
                        <label>Items</label>
                        <input type="text" id="item_name" name="item_name" class="form-control"><span id="span_item_name"></span>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" id="item_desc" name="item_desc" cols="3" rows="3"></textarea><span id="span_item_desc"></span>
                    </div>
                    <div class="form-group">
                        <label>Panjang</label>
                        <input type="number" id="item_length" name="item_length" class="form-control"><span id="span_item_length"></span>
                    </div>
                    <div class="form-group">
                        <label>Lebar</label>
                        <input type="number" id="item_width" name="item_width" class="form-control"><span id="span_item_width"></span>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tinggi</label>
                                <input type="number" id="item_height" name="item_height" class="form-control"><span id="span_item_height"></span>
                            </div>
                            <div class="col-md-6"><br><br>
                                <input type="radio" name="item_dimension_unit" value="1"> Meter &nbsp;&nbsp;
                                <input type="radio" name="item_dimension_unit" value="2"> Centimeter
                                <span id="span_item_dimension_unit"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Kubikasi</label>
                                <input type="number" id="item_cubic" name="item_cubic" class="form-control"><span id="span_item_kubikasi"></span>
                            </div>
                            <div class="col-md-6"><br><br>
                                <input type="radio" name="item_kubikasi_unit" value="1"> m3 &nbsp;&nbsp;
                                <input type="radio" name="item_kubikasi_unit" value="2"> cm3
                                <span id="span_item_kubikasi_unit"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Berat</label>
                                <input type="number" class="form-control" id="item_weight" name="item_weight"><span id="span_item_weight"></span>
                            </div>
                            <div class="col-md-6"><br><br>
                                <input type="radio" name="item_weight_unit" value="1"> Kilogram &nbsp;&nbsp;
                                <input type="radio" name="item_weight_unit" value="2"> Ton
                                <span id="span_item_weight_unit"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Qty</label>
                        <input type="number" class="form-control" id="item_qty" name="item_qty"><span id="span_item_qty"></span>
                    </div>
                </div>
                <div class="form-group" style="float: right">
                    <input type="reset" class="btn btn-danger" value="Reset"/>
                    <a class="btn btn-success" onclick="postItems()"><i class="fa fa-plus"></i> Tambahkan Item</a>
                </div>
                <input type="hidden" id="temporaryItems" name="temporaryItems">

                <script>
                    var i = 0;
                    var arrayItems = [];

                    function postItems() {
                        var item_name = $('#item_name').val();
                        var item_desc = $('#item_desc').val();
                        var item_length = $('#item_length').val();
                        var item_width = $('#item_width').val();
                        var item_height = $('#item_height').val();
                        var item_dimension_unit = $('input[name="item_dimension_unit"]:checked').val();
                        var item_kubikasi = $('#item_cubic').val();
                        var item_kubikasi_unit = $('input[name="item_kubikasi_unit"]:checked').val();
                        var item_weight = $('#item_weight').val();
                        var item_weight_unit = $('input[name="item_weight_unit"]:checked').val();
                        var item_qty = $('#item_qty').val();

                        try{
                            if(item_name == "") throw "Items field required";
                            if(item_desc == "") throw "Description field required";
                            if(item_length == "") throw "Panjang field required";
                            if(item_width == "") throw "Lebar field required";
                            if(item_height == "") throw "Tinggi field required";
                            if(item_dimension_unit == false) throw "Satuan tinggi required";
                            if(item_kubikasi == "") throw "Kubikasi required";
                            if(item_kubikasi_unit == false) throw "Satuan kubikasi required";
                            if(item_weight == "") throw "Berat field required";
                            if(item_weight_unit == false) throw "satuan berat required";
                            if(item_qty == "") throw "Quantity field required";
                        }catch(err){
                            alert(err);
                            return;
                        }

                        arrayItems.push({
                            "item_name": item_name,
                            "item_desc": item_desc,
                            "item_length": item_length,
                            "item_width": item_width,
                            "item_height": item_height,
                            "item_dimension_unit": item_dimension_unit,
                            "item_kubikasi": item_kubikasi,
                            "item_kubikasi_unit": item_kubikasi_unit,
                            "item_weight": item_weight,
                            "item_weight_unit": item_weight_unit,
                            "item_qty": item_qty
                        });

                        document.getElementById("temporaryItems").value = JSON.stringify(arrayItems);
                        console.log(arrayItems);

                        var rowCount = table.rows.length;
                        var row = table.insertRow(rowCount);

                        row.insertCell(0).innerHTML = item_name;
                        row.insertCell(1).innerHTML = item_qty;
                        row.insertCell(2).innerHTML = '<a class="btn btn-danger" onClick="javacsript:deleteRow(this,i)"><i class="fa fa-remove"> Remove</a>';

                    }

                    function deleteRow(obj, i) {
                        index = obj.parentNode.parentNode.rowIndex;
                        table = document.getElementById("table");
                        table.deleteRow(index);

                        arrayItems.splice(i - 1, 1);

                        document.getElementById("temporaryItems").value = JSON.stringify(arrayItems);
                    }

                    function clearText(){
                        document.getElementById("item_name").value = "";
                        document.getElementById("item_desc").value = "";
                        document.getElementById("item_length").value = "";
                        document.getElementById("item_width").value = "";
                        document.getElementById("item_height").value = "";
                        document.getElementById("item_dimension_unit").value = "";
                        document.getElementById("item_cubic").value = "";
                        document.getElementById("item_kubikasi_unit").value = "";
                        document.getElementById("item_weight").value = "";
                        document.getElementById("item_weight_unit").value = "";
                        document.getElementById("item_qty").value = "";
                    }

                    function setStyle(inputId, spanId, label, display, borderColor){
                        document.getElementById(spanId).innerHTML = label;
                        document.getElementById(spanId).style.display = display;
                        document.getElementById(inputId).style.borderColor = borderColor;
                    }
                </script>
            </div>
        </div>
    </div>
    <div class="col-md-3">&nbsp;</div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Items</th>
                    <th>Qty</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-2">
        <div class="form-group">
            <label>Tanggal Kirim</label>
            <input type="text" class="form-control" id="shipment_delivery_date_to" name="shipment_delivery_date_to" onmouseover="getTanggal(this.id)" width="50px"
                   placeholder="Tanggal awal">
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label>&nbsp;</label>
            <input type="text" class="form-control" id="shipment_end_date" name="shipment_end_date" onmouseover="getTanggal(this.id)" width="50px"
                   placeholder="Tanggal akhir">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control" id="shipment_price" name="shipment_price">
        </div>

        <div class="form-group">
            <label>Cara Pemesanan</label>&nbsp;

            <input type="radio" name="order_type" value="1"> Penawaran &nbsp;&nbsp;
            <input type="radio" name="order_type" value="2"> Pesan secara instan

        </div>

        <div class="form-group">
            <label>Type Penawaran</label>&nbsp;

            <input type="radio" name="shipment_type" value="1"> Public &nbsp;&nbsp;
            <input type="radio" name="shipment_type" value="2"> Private

        </div>
    </div>
</div>

<button type="button" onclick="doKirim()" id="btnSave" class="btn btn-success"><?= $btnSave ?></button>
<button type="reset" class="btn btn-danger">Batal</button>
</form>

<script>
    function doKirim() {
        var url = "<?=site_url('kirim/dokirimbarang')?>";
        var formData = new FormData($("#kirimForm")[0]);
        $("#btnSave").text('Proses...');

        $.ajax({
            url: url,
            type: "POST",
//            data: $('#kirimForm').serialize(),
            data: formData,
//            async : false,
//            cache : false,
            processData: false,
            contentType: false,
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                if (data.status)
                {
                    document.getElementById("shipment_title").value = "";
                }else{
                    $('#errorResult').append(data.error);
                }

                $('#btnSave').text('Simpan'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Penyimpanan data gagal.');
                $('#btnSave').text('Simpan'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable

            }
        });
    }

    function test(){
        kirimForm.submit();
    }
</script>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

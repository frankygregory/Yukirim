
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Kendaraan
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Kendaraan
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
                    <table id="table" name="table" class="table table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>No Kendaraan</th>
                            <th>Nama Kendaraan</th>
                            <th>Tersedia</th>
                            <th>Reff.Shipment</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 0; $n = sizeof($data);
                        while ($i<$n) {
                            echo
                                "<tr>".
                                    "<td>".$data[$i]['vehicle_id']."</td>".
                                    "<td>".$data[$i]['vehicle_nomor']."</td>".
                                    "<td>".$data[$i]['vehicle_name']."</td>".
                                    "<td>".$data[$i]['available_status']."</td>".
                                    "<td>".$data[$i]['ref_transaksi']."</td>".
                                    "<td>".$data[$i]['vehicle_information']."</td>";

                            if ($data[$i]['available_status']=='Ya') {
                                if ($data[$i]['vehicle_status']==1) {
                                    //echo "<td><a href='".base_url()."panel/kendaraan/toggleActive/".$data[$i]['vehicle_id']."/0/' class='btn btn-success'>Aktif</a></td>";
                                    echo "<td id='status".$data[$i]['vehicle_id']."'><a href='javascript:void(0)' onclick='toggleActive(".$data[$i]['vehicle_id'].",0);' class='btn btn-success'>Aktif</a></td>";
                                }
                                else {
                                    //echo "<td><a href='".base_url()."panel/kendaraan/toggleActive/".$data[$i]['vehicle_id']."/1/' class='btn btn-danger'>Tidak Aktif</a></td>";
                                    echo "<td id='status".$data[$i]['vehicle_id']."'><a href='javascript:void(0)' onclick='toggleActive(".$data[$i]['vehicle_id'].",1);' class='btn btn-danger'>Tidak Aktif</a></td>";
                                }
                            }
                            else {
                                if ($data[$i]['vehicle_status']==1) {
                                    echo "<td id='status".$data[$i]['vehicle_id']."'><a href='".base_url()."panel/kendaraan/toggleActive/".$data[$i]['vehicle_id']."/0/' class='btn btn-success disabled'>Aktif</a></td>";
                                }
                                else {
                                    echo "<td id='status".$data[$i]['vehicle_id']."'><a href='".base_url()."panel/kendaraan/toggleActive/".$data[$i]['vehicle_id']."/1/' class='btn btn-danger disabled'>Tidak Aktif</a></td>";
                                }
                            }
/*                            <td>W123 ER</td>
                            <td>Toyota 123</td>
                            <td>21234</td>
                            <td>10</td>
                            <td>Baik</td>
                            <td><a href="#" class="btn btn-success">Aktif</a> <a href="#" class="btn btn-danger">Tidak Aktif</a> </td>*/
                            echo "</tr>";
                            $i++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
<?php
//var_dump($data);
echo current_url();
?>
</div>
<!-- /#page-wrapper -->

<script type="text/javascript">
function toggleActive(id,newStatus)
{
    var url = "<?php echo site_url('panel/kendaraan/ajaxToggleActive/"+id+"/"+newStatus+"')?>";
 
     // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if (newStatus==1) {
                $('#status'+id).html("<a href='javascript:void(0)' onclick='toggleActive("+id+",0);' class='btn btn-success'>Aktif</a>");
            }
            else {
                $('#status'+id).html("<a href='javascript:void(0)' onclick='toggleActive("+id+",1);' class='btn btn-danger'>Tidak Aktif</a>");
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
        }
    });
}
</script>
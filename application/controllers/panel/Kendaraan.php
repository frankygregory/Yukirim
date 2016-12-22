<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends MY_Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $query = 'select a.*,if((isVehichleInUsed(a.vehicle_id)<>0),"Tidak","Ya") available_status,'.
                    'if((getVehicleInUsedTrx(a.vehicle_id)<0),"-",getVehicleInUsedTrx(a.vehicle_id)) ref_transaksi '.
                 'from m_vehicle a';

        $data = array(
            'title' => 'Kendaraan',
            'data' => $this->queryArray($query),
        );

        parent::template('panel/kendaraan', $data);
    }

    public function ajaxToggleActive($id,$newStatus) {
        $newStatus = $newStatus*1;
        $id = $id*1;
        //$this->updateData('m_vehicle',array('vehicle_status'=>$newStatus),array('vehicle_id'=>$id));
        $query = 'update m_vehicle a set vehicle_status='.$newStatus.' where vehicle_id='.$id.' and isVehichleInUsed(a.vehicle_id)=0';
        $this->db->query($query);

        //redirect('panel/kendaraan');
        echo json_encode(array("status" => TRUE));
    }
}
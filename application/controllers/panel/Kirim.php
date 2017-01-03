<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'All',
            'data' => $this->queryArray("select * from m_shipment")
        );

        parent::template('kirim', $data);
    }

    public function privates()
    {
        $data = array(
            'title' => 'Privates'
        );

        parent::template('kirim_private', $data);
    }

    public function publics()
    {
        $data = array(
            'title' => 'Public'
        );

        parent::template('kirim_public', $data);
    }

    public function penawaran()
    {
        $data = array(
            'title' => 'Penawaran'
        );

        parent::template('kirim_penawaran', $data);
    }

    public function kirimbarang()
    {
        $data = array(
            'title' => 'Kirim Barang',
            'type' => 'new',
            'id' => '',
            'shipment_title' => '',
            'shipment_information' => '',
            'location_from_name' => '',
            'location_from_address' => '',
            'location_to_name' => '',
            'location_to_address' => '',
            'shipment_delivery_date_to' => '',
            'shipment_end_date' => '',
            'shipment_price' => 0,
            'checked_pemesanan' => '',
            'checked_penawaran' => '',
            'btnSave' => 'Simpan',
        );

        parent::template('kirimbarang_form', $data);
    }

    function detail($id)
    {

        $data = $this->queryArray("select * from m_shipment where shipment_id = $id");
        $detail = $this->queryArray("select * from m_shipment_details where shipment_id = $id");

        $data = array(
            'title' => 'Kirim Barang',
            'type' => 'edit',
            'id' => $id,
            'shipment_title' => $data[0]['shipment_title'],
            'shipment_information' => $data[0]['shipment_information'],
            'location_from_name' => $data[0]['location_from_name'],
            'location_from_address' => $data[0]['location_from_address'],
            'location_to_name' => $data[0]['location_to_name'],
            'location_to_address' => $data[0]['location_to_address'],
            'shipment_delivery_date_to' => $data[0]['shipment_delivery_date_to'],
            'shipment_end_date' => $data[0]['shipment_end_date'],
            'shipment_price' => $data[0]['shipment_price'],
            'checked_pemesanan' => 1,
            'checked_penawaran' => 2,
            'shipment_detail' => $detail,
            'btnSave' => 'Update',
        );

        parent::template('kirimbarang_form', $data);
    }



    public function doKirimBarang()
    {
        if ($this->form_validation->run('kirim') == FALSE) {
            $errors = validation_errors();
            echo json_encode(array("error" => "<div class='alert alert-warning alert-dismissible' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					<strong>Error!</strong> Data gagal tersimpan.<br>" . $errors . " </div>"));
        } else {

            $items = JSON_DECODE($this->input->post('temporaryItems'), TRUE);

            if (count($items) <= 0) {
                echo json_encode(array("error" => "<div class='alert alert-warning alert-dismissible' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					<strong>Error!</strong> Item harus terisi.<br>" . $errors . " </div>"));
            } else {

//                if ($_FILES['shipment_pictures']['name']) {
//
//                    parent::upload_file_settings('file/images', '5000000');
//
//                    if (!$this->upload->do_upload('shipment_pictures')) {
//                        echo json_encode(array("error" => 'Cek type atau ukuran gambar. Type harus JPG/JPEG, PNG. Ukuran Maks.300kB!'));
//                    } else {
//                        $image = $this->upload->data();
//                        if ($image['file_name']) {
//                            $shipment_pictures = $image['file_name'];
//                        }

                $data = array(
                    'shipment_title' => $this->input->post('shipment_title'),
                    'shipment_information' => $this->input->post('shipment_information'),
//                            'shipment_pictures' => $shipment_pictures,
                    'location_from_name' => $this->input->post('location_from_name'),
                    'location_from_address' => $this->input->post('location_from_address'),
                    'location_to_name' => $this->input->post('location_to_name'),
                    'location_to_address' => $this->input->post('location_to_address'),
                    'shipment_delivery_date_from' => date('Y-m-d G:i:s'),
                    'shipment_delivery_date_to' => $this->input->post('shipment_delivery_date_to'),
                    'shipment_end_date' => $this->input->post('shipment_end_date'),
                    'shipment_price' => $this->input->post('shipment_price'),
                    'order_type' => $this->input->post('order_type'),
                    'shipment_type' => $this->input->post('shipment_type')
                );

                $this->insertData('m_shipment', $data);

					$lastid = $this->db->insert_id();
                    for ($i = 0; $i < count($items); $i++) {
                        $data = array(
                            'item_name' => $items[$i]['item_name'],
                            'item_desc' => $items[$i]['item_desc'],
                            'item_length' => $items[$i]['item_length'],
                            'item_width' => $items[$i]['item_width'],
                            'item_height' => $items[$i]['item_height'],
                            'item_dimension_unit' => $items[$i]['item_dimension_unit'],
                            'item_kubikasi' => $items[$i]['item_kubikasi'],
                            'item_weight' => $items[$i]['item_weight'],
                            'item_weight_unit' => $items[$i]['item_weight_unit'],
                            'item_qty' => $items[$i]['item_qty'],
                            'shipment_id' => $lastid,
                            'created_date' => date('Y-m-d G:i:s'),
                            'created_by' => $this->session->userdata('username'),
                        );

                        $this->insertData('m_shipment_details', $data);
                    }
                    echo json_encode(array("status" => TRUE, "msg" => "<div class='alert alert-success alert-dismissible' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					<strong>Success!</strong> Data telah berhasil disimpan.
					</div>"));
            }
        }
    }
//        }
//    }

	public function updatekirimBarang(){
        if ($this->form_validation->run('kirim') == FALSE) {
            $errors = validation_errors();
            echo json_encode(array("error" => "<div class='alert alert-warning alert-dismissible' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					<strong>Warning!</strong> Data gagal diubah.<br>" . $errors . " </div>"));
        } else {
		$id = $this->input->post("id");
				$data = array(
                    'shipment_title' => $this->input->post('shipment_title'),
                    'shipment_information' => $this->input->post('shipment_information'),
                    'location_from_name' => $this->input->post('location_from_name'),
                    'location_from_address' => $this->input->post('location_from_address'),
                    'location_to_name' => $this->input->post('location_to_name'),
                    'location_to_address' => $this->input->post('location_to_address'),
                    'shipment_delivery_date_from' => date('Y-m-d G:i:s'),
                    'shipment_delivery_date_to' => $this->input->post('shipment_delivery_date_to'),
                    'shipment_end_date' => $this->input->post('shipment_end_date'),
                    'shipment_price' => $this->input->post('shipment_price'),
                    'order_type' => $this->input->post('order_type'),
                    'shipment_type' => $this->input->post('shipment_type')
                );
				
				$this->db->update("m_shipment", $data, array("shipment_id" => $id));
				echo json_encode(array("status" => TRUE, "msg" => "<div class='alert alert-success alert-dismissible' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					<strong>Success!</strong> Data telah berhasil diubah.
					</div>"));
		}
}

    public function ajaxLoad($id)
    {
        $data = $this->queryData('select * from m_shipment_details where shipment_details_id =' . $id)->row();
        echo json_encode($data);
    }

    public function updateItems(){
        $data = array(
            'item_name' => $this->input->post('item_name'),
            'item_desc' => $this->input->post('item_desc'),
            'item_length' => $this->input->post('item_length'),
            'item_width' => $this->input->post('item_width'),
            'item_height' => $this->input->post('item_height'),
            'item_dimension_unit' => $this->input->post('item_dimension_unit'),
            'item_kubikasi' => $this->input->post('item_cubic'),
            'item_weight' => $this->input->post('item_weight'),
            'item_weight_unit' => $this->input->post('item_weight_unit'),
            'item_qty' => $this->input->post('item_qty'),
            'shipment_id' => $this->input->post('shipment_id'),
            'modified_date' => date('Y-m-d G:i:s'),
            'modified_by' => $this->session->userdata('username'),
        );

        $this->updateData('m_shipment_details', $data, array("shipment_details_id" => $this->input->post("shipment_details_id")));
        echo json_encode(array("status" => TRUE));
    }
}

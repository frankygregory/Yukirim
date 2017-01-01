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

    public function detail()
    {
        $data = array(
            'title' => 'Detail Kiriman'
        );

        parent::template('detail_kirim', $data);
    }

    public function kirimbarang()
    {
        $data = array(
            'title' => 'Kirim Barang',
            'btnSave' => 'Simpan',
        );

        parent::template('kirimbarang_form', $data);
    }

    public function doKirimBarang()
    {
        if ($this->form_validation->run('kirim') == FALSE) {
            $errors = validation_errors();
            echo json_encode(array("error" => $errors));
        } else {

            $items = JSON_DECODE($this->input->post('temporaryItems'), TRUE);

            if (count($items) <= 0) {
                echo json_encode(array("error" => 'Isi items dengan lengkap'));
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

                        $lastId = $this->db->query("select max(shipment_id) as max_value, shipment_id  from m_shipment")->result_array();

                        if ($lastId[0]['max_value'] > 0 && $lastId[0]['max_value'] != null) {
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
                                    'shipment_id' => $lastId[0]['shipment_id'],
                                    'created_date' => date('Y-m-d G:i:s'),
                                    'created_by' => $this->session->userdata('username'),
                                );

                                $this->insertData('m_shipment_details', $data);
                            }
                            echo json_encode(array("status" => TRUE));
                        }
                    }
                }
            }
//        }
//    }
}

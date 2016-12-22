<?php

/**
NOTE
This model is used for general used and not tied on one or more model
This model is used by application\controllers\core\MY_Controller.php
**/

class M_GenFunc extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function insertdata($tabel, $data){
		return $this->db->insert($tabel,$data);
	}
	
	function deletedata($tabel,$where){
		return $this->db->delete($tabel,$where);
	}
	
	function updatedata($tabel,$data,$where){
		return $this->db->update($tabel,$data,$where);
	}

	function selectdata($where = ''){
		return $this->db->query("select * from $where;");
	}

	function querydata($select = ''){
		return $this->db->query($select);
	}
}

?>
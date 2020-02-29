<?php

class Model_dashboard extends CI_Model {

	public function tampil_data() {
		return $this->db->get('karyawan');
	}
}
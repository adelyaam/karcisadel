<?php
class M_user extends CI_model
{
	public function GetData(){
		$data = $this->db->query('select * from user');
		return $data->result_array();
	}
	public function InsertData($tabelNama,$data){
		$res = $this->db->insert($tabelNama,$data);
		return $res;
	}
	public function UpdateData($tabelNama,$data,$where){
		$res = $this->db->update($tabelNama,$data,$where);
		return $res;
	}
	public function DeleteData($tabelNama,$data,$where){
		$res = $this->db->delete($tabelNama,$data,$where);
		return $res;
	}
}
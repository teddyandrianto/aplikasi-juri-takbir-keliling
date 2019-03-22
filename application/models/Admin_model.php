<?php 
class Admin_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function administrator() {

		$username = $this->input->POST('username', TRUE);
		$password = md5($this->input->POST('password', TRUE));
		$query = $this->db->query("SELECT * from tbl_user_admin where username= '$username' and password= '$password' LIMIT 1");
		if($query->num_rows() == 0){
			return false;
		}else{
			$data = $query->row();
			$_SESSION['sesiadmin'] = array('id'=>$data->id,'username'=>$data->username,'nama'=>$data->nama,"password"=>$data->password,"foto"=>$data->foto,);
			return true;
		}
	}

	public function read_hitung_peserta(){
		$sql="SELECT sum(tbl_nilai.kekompakan)  as total_kekompakan , SUM(tbl_nilai.dekorasi) as total_dekorasi, SUM(tbl_nilai.sound) as total_sound,SUM(tbl_nilai.gematakbir) as total_gematakbir,SUM(tbl_nilai.tema) as total_tema,  tbl_peserta.nama FROM tbl_nilai  INNER JOIN tbl_peserta ON tbl_peserta.id=tbl_nilai.id_peserta  GROUP BY tbl_nilai.id_peserta";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function read_juri(){
		$sql="SELECT * FROM tbl_user_juri  ORDER BY id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function Getjuri($where=""){
		$data_amilin= $this->db->query('select * from tbl_user_juri '.$where);
		return $data_amilin->result_array();
	}
	public function Getpeserta($where=""){
		$data_muzaki = $this->db->query('select * from tbl_peserta '.$where);
		return $data_muzaki->result_array();
	}
	public function Getnilai($where=""){
		$data_muzaki = $this->db->query('select * from tbl_nilai '.$where);
		return $data_muzaki->result_array();
	}
	public function Getsetting($where=""){
		$data_setting = $this->db->query('select * from tbl_setting '.$where);
		return $data_setting->result_array();
	}
	public function read_peserta(){
		$sql="SELECT * FROM tbl_peserta  ORDER BY no_urut";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function read_nilai(){
		$sql="SELECT * FROM tbl_nilai  ORDER BY id desc";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function read_nilai1($id){
		$sql="SELECT * FROM tbl_nilai where id_juri = '$id'  ORDER BY id_peserta";
		$query = $this->db->query($sql);
		return $query->result();
	}
		public function read_setting(){
		$sql="SELECT * FROM tbl_setting  ORDER BY id";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function zakat_muzaki(){
		$sql="SELECT * FROM muzaki where code_wilayah='".$_SESSION['sesiadmin']['id']."'  ORDER BY id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function infaq_muzaki(){
		$sql="SELECT * FROM muzaki where code_wilayah=".$_SESSION['sesiadmin']['id']." and (beras_infaq!=0 or uang_infaq!=0)  ORDER BY id_amilin";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function read_chat($username){
		$sql="SELECT  * FROM chat   where username='".$username."' OR tujuan='".$username."' AND code_wilayah='".$_SESSION['sesiadmin']['id']."'  ORDER BY id desc ";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function input($tabelName,$data){
        $res = $this->db->insert($tabelName,$data);
        return $res;
    }
	public function update($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function delete($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
}
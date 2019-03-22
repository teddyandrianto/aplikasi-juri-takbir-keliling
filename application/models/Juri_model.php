<?php 
class Juri_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}

	public function Juri() {

		$username = $this->input->POST('username', TRUE);
		$password = md5($this->input->POST('password', TRUE));
		$query = $this->db->query("SELECT * from tbl_user_juri where username= '$username' and password= '$password' LIMIT 1");
		if($query->num_rows() == 0){
			return false;
		}else{
			$data = $query->row();
			$_SESSION['sesijuri'] = array('id'=>$data->id,'username'=>$data->username,'nama'=>$data->nama,"password"=>$data->password,'foto'=>$data->foto,'perwakilan'=>$data->perwakilan);
			return true;
		}
	}
	

	public function Getjuri($where=""){
		$data_amilin= $this->db->query('select * from tbl_user_juri '.$where);
		return $data_amilin->result_array();
	}
	
	public function read_peserta(){
		$sql="SELECT * FROM tbl_peserta  ORDER BY no_urut";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function Getnilai($where=""){
		$data_setting = $this->db->query('select * from tbl_nilai '.$where);
		return $data_setting->result_array();
	}
 	
 public function read_nilai(){
		$sql="SELECT * FROM tbl_nilai where id_juri ='".$_SESSION['sesijuri']['id']."' ORDER BY id";
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
<?php class Juri extends CI_Controller {

	public function __construct()
 	{
 	 	date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
 		$this->load->helper("url");
 		$this->load->model('Juri_model');
 		$this->model = $this->Juri_model;
 		$this->load->database();

 		$this->load->helper('url');
  	}

 	public function index()
 	{
 		if(isset($_SESSION['sesijuri'])){
            $row = $this->model->read_nilai();
 			$this->load->view("juri/header");
            $this->load->view("juri/dashboard",['row'=>$row]);
 			$this->load->view("juri/footer");

 		}else{
            $this->load->view('landing/index');
 		}
 	}
 	public function login()
 	{
 		if($this->model->Juri()){
         	redirect('juri/index');
        }else{
                 $this->session->set_flashdata("pesan", "<div class=\"col-lg-4 col-lg-offset-7\"><div class=\"alert alert-danger\">
    <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Oops!</strong><br> Username/password yang Anda Masukan Salah<br><b>Atau Akun Belum Terdaftar !</b>
      </div></div>");
            redirect('/');
        }
 	}
 	public function logout()
 	{
 		session_destroy();
 		redirect('/');	
 	}
    public function profile()
    {
        if(isset($_SESSION['sesijuri'])){
            $this->load->view("juri/header");
            $this->load->view("juri/profile_juri");
            $this->load->view("juri/tentang_juri");
            $this->load->view("juri/footer");

        }else{
           redirect('/');
        }
    }
 	public function setting()
 	{
 		if(isset($_SESSION['sesijuri'])){
 		
        $this->load->view("juri/header");
 		$this->load->view('juri/profile_juri');
 		$this->load->view('juri/setting_juri');
 		$this->load->view('juri/footer');
 		}else{
	 		redirect('/');
 		}
 	}

     public function update_image(){

        if(isset($_SESSION['sesijuri'])){
              $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/photo-profile/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '500048';
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                
                $gbr = $this->upload->data();
                $updatedata = array(
                  'foto' =>$gbr['file_name']
                   );
                $where = array('id' => $_SESSION['sesijuri']['id']);
                $res = $this->db->update('tbl_user_juri',$updatedata,$where); //akses model untuk menyimpan ke database
                $_SESSION['sesijuri']['foto'] = $gbr['file_name'];
                if($res>=1){
                    redirect('juri');
                }}else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('juri'); //jika gagal maka akan ditampilkan form upload
            }
        }}else{
           redirect('/');
        }
    }

   public function update_juri(){
         if(isset($_SESSION['sesijuri'])){
            $nama = $_POST['nama'];
            $updatedata = array(
                'nama' => $nama   
            );
        $where = array('id' => $_SESSION['sesijuri']['id']);
        $res = $this->model->update('tbl_user_juri',$updatedata,$where);
         $_SESSION['sesijuri']['nama'] = $nama;
           $_SESSION['sesijuri']['password'] = $password;
        if($res>=1){
            redirect('juri/profile');
        }
         }else{
       redirect('/');
        }
    }

     public function update_password(){
         if(isset($_SESSION['sesijuri'])){
        $password_lama = (md5($_POST['password_lama']));
        $lama_password = $this->db->where('id',$_SESSION['sesijuri']['id'])->get('tbl_user_juri')->row()->password;
        if($password_lama == $lama_password){
            $password = (md5($_POST['password_baru']));
            $updatedata = array(
                'password' => $password   
            );
        $where = array('id' => $_SESSION['sesijuri']['id']);
        $res = $this->model->update('tbl_user_juri',$updatedata,$where);
         $_SESSION['sesijuri']['nama'] = $nama;
           $_SESSION['sesijuri']['password'] = $password;
        if($res>=1){
            redirect('juri/setting');
        }
        }else{
             $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">password Tidek Sesuai !!</div></div>");
            redirect('juri/setting');
        }
         }else{
       redirect('/');
        }
    }

    public function nilai($id){
        if(isset($_SESSION['sesijuri'])){
            $nilai = $this->model->Getnilai("where id = '$id'");
            $juri = $this->db->where('id',$id)->get('tbl_nilai')->row();
            if($juri->id_juri!=$_SESSION['sesijuri']['id'] or $juri->status =='Y' ){
                redirect('juri');
            }else{
            $data_nilai = array(
            "id" => $nilai[0]['id'],
            "id_juri" => $nilai[0]['id_juri'],
            "dekorasi" => $nilai[0]['dekorasi'],
            "kekompakan" => $nilai[0]['kekompakan'],
            "sound" => $nilai[0]['sound'],
            "gematakbir" => $nilai[0]['gematakbir'],
            "tema" => $nilai[0]['tema']
            );
        $this->load->view("juri/header");
        $this->load->view('juri/tambah_nilai',$data_nilai);
        $this->load->view('juri/footer');
        }}else{
        $this->load->view('landing/index');
        }
    }

    public function proses_addnilai(){
        if(isset($_SESSION['sesijuri'])){
        $id = $_POST['id'];
        $id_juri = $_SESSION['sesijuri']['id'];
        $kekompakan  = $_POST['kekompakan'];
        $dekorasi = $_POST['dekorasi'];
        $sound = $_POST['sound'];
        $gematakbir =$_POST['gematakbir'];
        $tema = $_POST['tema'];
        $inputdata = array(
            'id_juri' => $id_juri,
            'kekompakan'=>$kekompakan,
            'dekorasi'=>$dekorasi,
            'sound'=>$sound,
            'gematakbir'=>$gematakbir,
            'tema'=>$tema,
            'status'=>'Y'
            );
        $where = array('id' => $id);    
        $res = $this->model->update('tbl_nilai',$inputdata,$where);
        if($res>=1){
            $this->session->set_flashdata("pesan", "<div class=\"col-lg-12 \"><div class=\"alert alert-success\">
              <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                  <strong>Berhasail</strong><br>Nilai Telah Berhasail Disimpan
                </div></div>");
            redirect('juri');
        }else{
        $this->load->view('landing/index');
        }
    }}
    
    public function print_nilai(){
        if(isset($_SESSION['sesijuri'])){
        $row= $this->model->read_nilai();
        $this->load->view("juri/header");
        $this->load->view('juri/print',['row'=>$row]);
        $this->load->view('juri/footer');
        }else{
           redirect('/');
        }
    }

}


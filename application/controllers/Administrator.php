<?php class Administrator extends CI_Controller {
	public $model = NULL;

	public function __construct()
 	{
        date_default_timezone_set('Asia/Jakarta');
 		parent::__construct();
 		$this->load->model('admin_model');
 		$this->model = $this->admin_model;
 		$this->load->database();
 		$this->load->helper('url');
  	}

 public function index()
 	{

 		if(isset($_SESSION['sesiadmin'])){
      $prog = $this->model->read_hitung_peserta();
      $this->db->select_sum('kekompakan','kekompakan');
      $this->db->select_sum('dekorasi','dekorasi');
      $this->db->select_sum('sound','sound');
      $this->db->select_sum('gematakbir','gematakbir');
      $this->db->select_sum('tema','tema');
      $query = $this->db->get('tbl_nilai');
      $sum = $query->row();
      $juri =$this->model->read_juri();
 			$this->load->view("admin/header",['juri'=>$juri]);
 			$this->load->view("admin/dashboard",['prog'=>$prog,'sum'=>$sum]);
 			$this->load->view("admin/footer");

 		}else{
            $this->load->view('landing/index');
 		}
 	}

 	public function profile()
 	{

 		if(isset($_SESSION['sesiadmin'])){

 			$juri =$this->model->read_juri();
      $this->load->view("admin/header",['juri'=>$juri]);
 			$this->load->view("admin/profile_admin");
 			$this->load->view("admin/tentang_admin");
 			$this->load->view('admin/footer');
 		}else{
 			$this->load->view('landing/index');
 		}
 	}	
 	public function login()
 	{
 		if($this->model->administrator()){
         	redirect('administrator/index');
        }else{
                  $this->session->set_flashdata("pesan", "<div class=\"col-lg-4 col-lg-offset-7\"><div class=\"alert alert-danger\">
    <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Maaf!</strong><br> Username/password yang Anda Masukan Salah<br><b>Atau Akun Belum Terdaftar !</b>
      </div></div>");
           $this->load->view('landing/index');
        }
 	}
 	public function logout()
 	{
 		session_destroy();
 		$this->load->view('landing/index');	
 	}

 	public function setting()
 	{
 		if(isset($_SESSION['sesiadmin'])){
 		
 		$juri =$this->model->read_juri();
 			$this->load->view("admin/header",['juri'=>$juri]);
 		$this->load->view('admin/profile_admin');
 		$this->load->view('admin/setting_admin');
 		$this->load->view('admin/footer');
 		}else{
	 		$this->load->view('landing/index');
 		}
 	}

 	 public function update_image(){

        if(isset($_SESSION['sesiadmin'])){
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
                $where = array('id' => $_SESSION['sesiadmin']['id']);
                $res = $this->db->update('tbl_user_admin',$updatedata,$where); //akses model untuk menyimpan ke database
                $_SESSION['sesiadmin']['foto'] = $gbr['file_name'];
                if($res>=1){
                    redirect('Administrator');
                }}else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('administrator/profile'); //jika gagal maka akan ditampilkan form upload
            }
        }}else{
            $this->load->view('landing/index');
        }
    }

    public function update_admin(){
         if(isset($_SESSION['sesiadmin'])){
         	$username = $_POST['username'];
            $nama = $_POST['nama'];
            $password = (md5($_POST['password']));
            $updatedata = array(
            	'username' => $username,
                'nama' => $nama,
                'password' => $password   
            );
        $where = array('id' => $_SESSION['sesiadmin']['id']);
        $res = $this->model->update('tbl_user_admin',$updatedata,$where);
        $_SESSION['sesiadmin']['username'] = $username;
         $_SESSION['sesiadmin']['nama'] = $nama;
           $_SESSION['sesiadmin']['password'] = $password;
        if($res>=1){
            redirect('Administrator/profile');
        }}else{
        $this->load->view('landing/index');
        }
    }

 	public function juri(){
 		if(isset($_SESSION['sesiadmin'])){
 		$rows =$this->model->read_juri();
 		$juri =$this->model->read_juri();
 		$this->load->view("admin/header",['juri'=>$juri]);
 		$this->load->view('admin/tampil_juri',['rows'=>$rows]);
 		$this->load->view('admin/footer');
 		}else{
	 		$this->load->view('landing/index');
 		}
 	}
 	
 	public function addjuri(){

 		if(isset($_SESSION['sesiadmin'])){
 		$rows =$this->model->getjuri();
    $peserta=$this->model->read_peserta();
 		$juri =$this->model->read_juri();
 			$this->load->view("admin/header",['juri'=>$juri]);
 		$this->load->view('admin/tambah_juri',['rows'=>$rows,'peserta'=>$peserta]);
 		$this->load->view('admin/footer');
 		}else{
	 	$this->load->view('landing/index');
 		}
 	}
 	public function proses_addjuri(){
 		if(isset($_SESSION['sesiadmin'])){
		$username = $_POST['username'];
        if(preg_match("/^[a-zA-Z0-9._-]*$/",$username)){
            $sama = $this->db->where('username',$username)->get('tbl_user_juri')->row()->username;
            if ($username == $sama){
                $this->session->set_flashdata("pesan", "<div class=\"col-lg-12\"><div class=\"alert alert-danger\">
              <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                  <strong>Maaf!</strong><br>Username $username Sudah Digunakan!
                </div></div>");
             redirect('administrator/addjuri');
            }else{
		      $nama = $_POST['nama'];
          $perwakilan =$_POST['perwakilan'];
		      $password = (md5($_POST['password']));
		      $inputdata = array(
			        'username' => $username,
			        'nama' => $nama,
			        'password' => $password,
              'perwakilan' => $perwakilan
			     );
            }
		$res = $this->admin_model->input('tbl_user_juri',$inputdata);
        }else{
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\"><strong>Maaf!</strong><br>Inputan Username hanya dapat mengunakan a-zA-Z0-9._</div></div>");
            redirect('administrator/addjuri');
        }
        if($res>=1){
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\"><strong>Selamat</strong><br>Input Data Juri $nama Berhasil</div></div>");
			redirect('administrator/juri');
		}else{
             $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\"><strong>Maaf!</strong><br>Input Juri $nama Gagal</div></div>");
			redirect('administrator/juri');
		}
		}else{
	 	$this->load->view('landing/index');
 		}
	}

	public function edit_juri($id=0){
		if(isset($_SESSION['sesiadmin'])){
		          $juri = $this->admin_model->Getjuri("where id = '$id'");
		          $data_juri = array(
			         "id" => $juri[0]['id'],
			         "username" => $juri[0]['username'],
			         "nama" => $juri[0]['nama'],
			         "perwakilan" => $juri[0]['perwakilan']
			     );
 			$juri =$this->model->read_juri();
 			$this->load->view("admin/header",['juri'=>$juri]);
		    $this->load->view("admin/edit_juri",$data_juri);
		    $this->load->view('admin/footer');
		  
         }else{    
	 	$this->load->view('landing/index');
 		}
 	}
		
 	public function update_juri(){
 	if(isset($_SESSION['sesiadmin'])){
 		$id = $_POST['id'];
		$username = $_POST['username'];
		      $nama = $_POST['nama'];
		      $perwakilan = $_POST['perwakilan'];
		      $updatedata = array(
			     'username' => $username,
			     'nama' => $nama,
			     'perwakilan' => $perwakilan
			     );
            
		  $where = array('id' => $id);
		  $res = $this->admin_model->update('tbl_user_juri',$updatedata,$where);
		 if($res>=1){
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\"><strong>Selamat</strong><br>Edit Data Juri atas Nama $nama Berhasil</div></div>");
			redirect('administrator/juri');
	       }else{
             $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\"><strong>Maaf!</strong><br>Edit Juri atas Nama $nama Gagal</div></div>");
            redirect('administrator/juri');
        }}else{
        $this->load->view('landing/index');
        }
    }
    public function reset_password_juri($id){
        if(isset($_SESSION['sesiadmin'])){
        $id= $this->db->where('id',$id)->get('tbl_user_juri')->row()->id;
              $amilin = $this->admin_model->Getjuri("where id = '$id'");
                $updatedata = array(
                    'password'=> "5a588e8b3fe159b34d0cd6ab8fa6eb23"
                );
                 $where = array('id' => $id);
                 $res = $this->admin_model->update('tbl_user_juri',$updatedata,$where);
                     if($res>=1){
                          $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Reset password $nama Berhasil !!</div></div>");
                        redirect('administrator/juri');
                     }else{
                  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Reset Password Gagal</div></div>");
                  redirect('administrator/juri');
        }}else{
        $this->load->view('landing/index');
        }
    }
	public function delete_juri($id){
		if(isset($_SESSION['sesiadmin'])){
            $amilin = $this->admin_model->Getjuri("where id = '$id'");
	 	         $where = array('id' => $id);
	 	         $res = $this->admin_model->delete('tbl_user_juri',$where);
	 	             if($res>=1){
	 		            redirect('administrator/juri');
	 	             }else{
	 		    echo "gagal delete";
	 	

        }}else{
	 	$this->load->view('landing/index');
 		}
	}


	public function peserta(){
        if(isset($_SESSION['sesiadmin'])){
       
        $row= $this->model->read_peserta();
 		    $juri =$this->model->read_juri();
 			  $this->load->view("admin/header",['juri'=>$juri]);
        $this->load->view('admin/tambah_peserta');
        $this->load->view('admin/tampil_peserta',['row'=>$row]);
        $this->load->view('admin/footer');
        }else{
            $this->load->view('landing/index');
        }
    }

    public function proses_addpeserta(){
        if(isset($_SESSION['sesiadmin'])){

        $no_urut = $_POST['no_urut'];
        $nama  = $_POST['nama'];
        $inputdata = array(
            'no_urut' => $no_urut,
            'nama' => $nama
            );
        $res = $this->model->input('tbl_peserta',$inputdata);
        if($res>=1){
            $this->session->set_flashdata("pesan", "<div class=\"col-lg-12 \"><div class=\"alert alert-success\">
              <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                  <strong>Berhasail</strong><br>Data Telah Di Input
                </div></div>");
            redirect('administrator/peserta');
        }else{
        $this->load->view('landing/index');
        }
    }}

    public function edit_peserta($id){
		if(isset($_SESSION['sesiadmin'])){
		$peserta = $this->model->Getpeserta("where id = '$id'");
		$data_peserta = array(
			"id" => $peserta[0]['id'],
			"nama" => $peserta[0]['nama'],
			"no_urut" => $peserta[0]['no_urut']
			);
    $row= $this->model->read_peserta();
 		$juri =$this->model->read_juri();
 			$this->load->view("admin/header",['juri'=>$juri]);
		$this->load->view('admin/edit_peserta',$data_peserta);
		$this->load->view('admin/tampil_peserta',['row'=>$row]);
		$this->load->view('admin/footer');
		
        }else{
	 	$this->load->view('landing/index');
 		}
 	}
		
 	public function update_peserta(){
 	if(isset($_SESSION['sesiadmin'])){
 		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$no_urut = $_POST['no_urut'];
		$updatedata = array(
			'nama' => $nama,
			'no_urut' => $no_urut
			);
		$where = array('id' => $id);
		$res = $this->model->update('tbl_peserta',$updatedata,$where);
		if($res>=1){
			  $this->session->set_flashdata("pesan", "<div class=\"col-lg-12 \"><div class=\"alert alert-success\">
              <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                  <strong>Berhasail</strong><br>Data Telah Di Input
                </div></div>");
            redirect('administrator/peserta');
		}else{
             $this->session->set_flashdata("pesan", "<div class=\"col-lg-12 \"><div class=\"alert alert-danger\">
              <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                  <strong>Maaf!</strong><br>Data Gagal Update
                </div></div>");
            redirect('administrator/peserta');
        }}else{
	 	$this->load->view('landing/index');
 		}
	}

 public function delete_peserta($id){
    if(isset($_SESSION['sesiadmin'])){
            $amilin = $this->admin_model->Getpeserta("where id = '$id'");
             $where = array('id' => $id);
             $res = $this->admin_model->delete('tbl_peserta',$where);
                 if($res>=1){
                  redirect('administrator/peserta');
                 }else{
          echo "gagal delete";
    

        }}else{
    $this->load->view('landing/index');
    }
  }
 	
 
 public function nilai(){
        if(isset($_SESSION['sesiadmin'])){
        $juri =$this->model->read_juri();
        $peserta=$this->model->read_peserta();
        $row= $this->model->read_nilai();
        $juri =$this->model->read_juri();
 			$this->load->view("admin/header",['juri'=>$juri]);
        $this->load->view('admin/tambah_nilai',['juri'=>$juri,'peserta'=>$peserta]);
        $this->load->view('admin/tampil_nilai',['row'=>$row]);
        $this->load->view('admin/footer');
        }else{
            $this->load->view('landing/index');
        }
    }

   public function proses_addnilai(){
        if(isset($_SESSION['sesiadmin'])){
        $nama_peserta= $_POST['nama_peserta'];
        $nama_juri= $_POST['nama_juri'];    
        $id_juri = $this->db->where('nama',$nama_juri)->get('tbl_user_juri')->row()->id;
        $id_peserta = $this->db->where('nama',$nama_peserta)->get('tbl_peserta')->row()->id;
        $kekompakan  = $_POST['kekompakan'];
        $dekorasi = $_POST['dekorasi'];
        $sound = $_POST['sound'];
        $gematakbir =$_POST['gematakbir'];
        $tema = $_POST['tema'];
        $inputdata = array(
            'id_juri' => $id_juri,
            'id_peserta' => $id_peserta,
            'kekompakan'=>$kekompakan,
            'dekorasi'=>$dekorasi,
            'sound'=>$sound,
            'gematakbir'=>$gematakbir,
            'tema'=>$tema,
            );
        $res = $this->model->input('tbl_nilai',$inputdata);
        if($res>=1){
            $this->session->set_flashdata("pesan", "<div class=\"col-lg-12 \"><div class=\"alert alert-success\">
              <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                  <strong>Berhasail</strong><br>Data Telah Di Input
                </div></div>");
            redirect('administrator/nilai');
        }else{
        $this->load->view('landing/index');
        }
    }}

    public function edit_nilai($id){
    if(isset($_SESSION['sesiadmin'])){
    $nilai = $this->model->Getnilai("where id = '$id'");
    $data_nilai = array(
      "id" => $nilai[0]['id'],
      "id_juri" => $nilai[0]['id_juri'],
      "id_peserta" => $nilai[0]['id_peserta'],
      "dekorasi" => $nilai[0]['dekorasi'],
      "kekompakan" => $nilai[0]['kekompakan'],
      "sound" => $nilai[0]['sound'],
      "gematakbir" => $nilai[0]['gematakbir'],
      "tema" => $nilai[0]['tema']
      );
    $row= $this->model->read_nilai();
    $juri =$this->model->read_juri();
 			$this->load->view("admin/header",['juri'=>$juri]);
    $this->load->view('admin/edit_nilai',$data_nilai);
    $this->load->view('admin/tampil_nilai',['row'=>$row]);
    $this->load->view('admin/footer');
    
        }else{
    $this->load->view('landing/index');
    }
  }
    
  public function update_nilai(){
  if(isset($_SESSION['sesiadmin'])){
    $id = $_POST['id'];
    $id_juri = $_POST['id_juri'];
    $id_peserta = $_POST['id_peserta'];
    $kekompakan =$_POST['kekompakan'];
    $dekorasi =$_POST['dekorasi'];
    $sound =$_POST['sound'];
    $gematakbir =$_POST['gematakbir'];
    $tema =$_POST['tema'];
    $updatedata = array(
       'id_juri' => $id_juri,
        'id_peserta' => $id_peserta,
        'kekompakan'=>$kekompakan,
        'dekorasi'=>$dekorasi,
        'sound'=>$sound,
        'gematakbir'=>$gematakbir,
        'tema'=>$tema,
      );
    $where = array('id' => $id);
    $res = $this->model->update('tbl_nilai',$updatedata,$where);
    if($res>=1){
        $this->session->set_flashdata("pesan", "<div class=\"col-lg-12 \"><div class=\"alert alert-success\">
              <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                  <strong>Berhasail</strong><br>Data Telah Di update
                </div></div>");
            redirect('administrator/nilai');
    }else{
             $this->session->set_flashdata("pesan", "<div class=\"col-lg-12 \"><div class=\"alert alert-danger\">
              <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                  <strong>Maaf!</strong><br>Data Gagal Update
                </div></div>");
            redirect('administrator/nilai');
        }}else{
    $this->load->view('landing/index');
    }
  }

  public function reset_status($id){
  if(isset($_SESSION['sesiadmin'])){
    $status = '';
    $updatedata = array(
        'status'=>$status
      );
    $where = array('id' => $id);
    $res = $this->model->update('tbl_nilai',$updatedata,$where);
    if($res>=1){
        $this->session->set_flashdata("pesan", "<div class=\"col-lg-12 \"><div class=\"alert alert-success\">
              <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                  <strong>Berhasail</strong><br>Data Telah Di Reset
                </div></div>");
            redirect('administrator/nilai');
    }else{
             $this->session->set_flashdata("pesan", "<div class=\"col-lg-12 \"><div class=\"alert alert-danger\">
              <a  class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                  <strong>Maaf!</strong><br>Data Gagal Reset
                </div></div>");
            redirect('administrator/nilai');
        }}else{
    $this->load->view('landing/index');
    }
  }

 public function delete_nilai($id){
    if(isset($_SESSION['sesiadmin'])){
            $amilin = $this->admin_model->Getnilai("where id = '$id'");
             $where = array('id' => $id);
             $res = $this->admin_model->delete('tbl_nilai',$where);
                 if($res>=1){
                  redirect('administrator/nilai');
                 }else{
          echo "gagal delete";
    

        }}else{
    $this->load->view('landing/index');
    }
  }

   public function print_juri($id){
        if(isset($_SESSION['sesiadmin'])){
        $data_juri = $this->db->where('id',$id)->get('tbl_user_juri')->row();
        $row= $this->model->read_nilai1($id);
        $juri =$this->model->read_juri();
        $this->load->view("admin/header",['juri'=>$juri]);
        $this->load->view('admin/print_juri',['data_juri'=>$data_juri,'row'=>$row]);
        $this->load->view('admin/footer');
        }else{
           redirect('/');
        }
    }
  

  }
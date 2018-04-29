<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
			 $this->load->view('portofolio/headerporto');
			 $this->load->view('portofolio/contents');
			 $this->load->view('portofolio/footerporto');
			//$this->load->view('welcome_message');

	}

	public function profile(){

			echo "saya adalah profile";

	}

	public function simpan(){

				$data = array(

							"user_id"=>"",
							"user_name"=>"fdfdg",
							"user_email"=>"fgdfgdg",
							"user_password"=>"dfgdg",
							"user_photos"=>"dfgdg",
							"user_media"=>"rhrhrt",
							"user_status"=>1,
							"user_role"=>1
				);

				$this->Project_model->pm_insert_user($data);
				echo "Sudah masuk";

	}

	public function hapus($idgue){

			 $data = array(
					"user_id"=>$idgue
			 );
		   $this->Project_model->pm_delete_user($data);
			 echo "Berhasil dihapus";

	}





	public function konsultasi(){

		$this->load->view('portofolio/headerporto');
		$this->load->view('portofolio/view_konsultasi');
		$this->load->view('portofolio/footerporto');

	}


}

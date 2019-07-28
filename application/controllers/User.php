<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('login')!=TRUE){
			redirect('user/login','refresh');
		}
		$data['konten']="home";
		$this->load->view('bioskop',$data);		
	}
	public function profil()
	{
		$this->load->model('model');
		$data['tampil_film']=$this->model->get_data_film();
		$data['judul']="PROFIL";
		$data['konten']="film";
		$this->load->view('bioskop',$data);
	}
	public function detail_film($id_film)
	{	
		$this->load->model('model');
		$data['tampil_detail']=$this->model->detail_data($id_film);
		$data['konten']="detail";
		$this->load->view('bioskop',$data);
	}
	public function pesan()
	{
		$data['judul']="pesan";
		$data['konten']="bioskop";
		$this->load->view('a',$data);
	}
	public function kritik()
	{
		$data['judul']="kritik";
		$data['konten']="bioskop";
		$this->load->view('b',$data);
	}
	public function login()
	{
		if($this->session->userdata('login')==TRUE){
			redirect('user','refresh');
		} else{
		$data['judul']="login";
		$this->load->view('login',$data);
	
		}

		
	}
	public function daftar()
	{
		$data['judul']="daftar";
		$this->load->view('daftar',$data);

	}

	public function simpan()
	{
		if ($this->input->post('submit')){
			$this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[100]');
			$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[100]');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[100]');
			$this->form_validation->set_rules('ttl', 'Ttl', 'trim|required|min_length[1]|max_length[100]');
			$this->form_validation->set_rules('telp', 'telp', 'trim|required|min_length[1]|max_length[100]');
			$this->form_validation->set_rules('jenkel', 'jenkel', 'trim|required|min_length[1]|max_length[100]');
			$this->form_validation->set_rules('alamat', 'alamat', 'trim|required|min_length[1]|max_length[100]');

			if($this->form_validation->run() == TRUE){
					$this->load->model('model');

					$proses=$this->model->simpan_data();
					if($proses){
						$this->session->set_flashdata('pesan', 'sukses simpan');
						redirect('user/login');
					}else{
						$this->session->set_flashdata('pesan', 'gagal simpan');
						redirect('user/daftar');
					}
			}
			else{
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('user/daftar','refresh');
			}	
		}
  	}

  public function masuk()
  {
  	if($this->input->post('cek'))
  		$this->form_validation->set_rules('username', 'username', 'trim|required');
  			$this->form_validation->set_rules('password', 'password', 'trim|required');
  		if ($this->form_validation->run() == TRUE){
  			$this->load->model('model');
  			if ($this->model->cek_user()->num_rows()>0){
  				$data_user=$this->model->cek_user()->row();
  				$array = array(
  					'login'=> TRUE,
  					'id_pembeli'=>$data_user->id_pembeli,
  					'username'=>$data_user->username,
  					'password'=>$data_user->password,
  					'nama'=>$data_user->nama_pembeli,

  				);
  				
  				$this->session->set_userdata( $array );
  				redirect('user','refresh');
  			}else{
  			$this->session->set_flashdata('pesan', 'username dan password salah');
  			redirect('user/login','refresh');	
  			}
  		}else{
  			$this->session->set_flashdata('pesan', validation_errors());
  			redirect('user/login','refresh');
  		}
  }
  public function logout(){
  	$this->session->sess_destroy();
  	redirect('user/login','refresh');
  }
}
/* End of file User.php */
/* Location: ./application/controllers/User.php */
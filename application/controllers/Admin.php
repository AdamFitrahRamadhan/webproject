<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model','msg');
	}

	public function message()
	{
		$data['title']="--- Daftar Pesanan ---";
		$data['list_msg']=$this->msg->message();
		$data['konten']="pesanan";
		$this->load->view('bioskop', $data, FALSE);
	}

	public function rm_msg($id)
	{
		if($this->msg->rm_nota($id) == true){
			$this->session->set_flashdata('msg', 'Success Delete Order');
			redirect('admin/message','refresh');
		} else {
			$this->session->set_flashdata('msg', 'Failed To Delete Order');
			redirect('admin/message','refresh');
		}

	}

		public function index()
		{
			if ($this->session->userdata('logged_in') == TRUE) {
				$data['title']="---Home---";
				$data['konten']="content";
				$this->load->view('home', $data, FALSE);
			} else {
				$data['title']="--- LOGIN ---";
				$this->load->view('login', $data, FALSE);
			}
		}

		public function login()
		{
		if ($this->session->userdata('logged_in') == TRUE) {
				$data['title']="---Home---";
				$data['konten']="content";
				$this->load->view('home', $data, FALSE);
			} else {
				$data['title']="--- LOGIN ---";
				$this->load->view('login', $data, FALSE);
			}
		}

	public function logout()
	{
		$this->session->userdata('logged_in') == FALSE;
		$this->session->sess_destroy();
		$data['title']="--- LOGIN ---";
		$this->load->view('login', $data, FALSE);
	}

	public function jadwal_film()
	{
		$this->load->model('model');
		$data['title']="--- Jadwal Film ---";
		$data['data_film']=$this->model_admin->get_film();
		$data['konten']="jadwal_film";
		$this->load->view('home', $data, FALSE);
	}

	public function detail($id_film)
	{
		$this->load->model('model');
		$data['tampil_detail']=$this->model->detail_data($id_film);
		$data['konten']="detail_film";
		$this->load->view('home', $data, FALSE);
	}

	public function studio()
	{
		$this->load->model('model');
		$data['title']="--- STUDIO ---";
		$data['data_studio']=$this->model_admin->get_studio();
		$data['konten']="studio";
		$this->load->view('home', $data, FALSE);
	}

	public function detail_studio($id_kursi)
	{
		$this->load->model('model');
		$data['title']="--- KURSI ---";
		$data['detail_kursi']=$this->model_admin->detail_studio($id_kursi);
		$data['konten']="detail_kursi";
		$this->load->view('home', $data, FALSE);
	}


	public function transaksi()
	{
		$data['title']="--- Transaksi ---";
		$data['konten']="transaksi";
		$this->load->view('home', $data, FALSE);
	}

	public function kritik_saran()
	{
		$data['title']="--- Kritik & Saran ---";
		$data['konten']="kritik_saran";
		$this->load->view('home', $data, FALSE);
	}

	public function daftar()
	{
		$data['title']="--- Register ---";
		$this->load->view('daftar', $data, FALSE);
	}

	public function simpan_data()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('telp', 'telp', 'trim|required');
			$this->form_validation->set_rules('ttl', 'ttl', 'trim|required');
			$this->form_validation->set_rules('gender', 'gender', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$this->load->model('model');
				$simpan = $this->model->simpan_data();

				if ($simpan) {
					$this->session->set_flashdata('pesan', 'Sukses Daftar');
					redirect('admin/login');
				} else {
					$this->session->set_flashdata('pesan', 'Gagal Daftar');
					redirect('admin/daftar');
				}

			} else {
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('admin/daftar');
			}
		}
	}

	public function masuk()
	{
		if ($this->input->post('cek')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[1]|max_length[20]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[1]|max_length[50]');

			if ($this->form_validation->run() == TRUE) {
				$this->load->model('model');	
				if ($this->model_admin->cek()->num_rows() > 0) {
					$data = $this->model->cek()->row();
					$array = array(
						'logged_in' => TRUE,
						'id_user'=>$data->id_user,
						'username'	=> $data->username,
						'password'  => $data->password,
						'nama_user' => $data->nama_user
					);
					$this->session->set_userdata( $array );
					redirect('admin/index');
				} else {
					$this->session->set_flashdata('pesan', 'Username Atau Password Anda Salah');
						redirect('admin/login');	
				}
			} else {
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('admin/login');
			}
		}

	}



}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
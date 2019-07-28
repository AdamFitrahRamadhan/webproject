<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$data['konten'] = "msg_cart";
		$this->load->view('bioskop',$data,FALSE);
		
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_cart','pesan');
	}

	public function add_cart($id_film)
	{
		$this->load->model('model');
		$detail = $this->model->detail_data($id_film);

		$data = array(
			'id'	=> $detail->id_film,
			'qty'  	=> $this->input->post('qty'),
			'price' => 50000,
			'name'	=> $detail->judul_film,
			'options'=> array('deskripsi' => $detail->detail_film)
		);
		$this->cart->insert($data);
		redirect('user/detail_film/'.$id_film, 'refresh');

	}
	public function rm_cart($id)
	{
		$data = array(
			'rowid' => $id,
			'qty' 	=> 0,
		);
		$this->cart->update($data);
		redirect('cart','refresh');
	}
	public function save_cart()
	{
		if($this->input->post('submit') == TRUE){
			$this->load->model('model_cart');
			$id_nota=$this->model_cart->simpan_cart();
			if($id_nota > 0){
				$this->cart->destroy();
				redirect('cart/pay/'.$id_nota,'refresh');
			}else{
				redirect('cart','refresh');
			}
		}
	}
	public function pay($id)
	{
		$this->load->model('model_cart');
		$nota = $this->model_cart->get_total($id);
		$data['id_nota'] = $id;
		$data['total'] =$nota->grandtotal+$id;
		$data['title'] ="--- Pembayaran ---";
		$data['konten'] ="Pembayaran";
		$this->load->view('bioskop',$data, FALSE);
	}
	public function upload_bukti()
	{
		if($this->input->post('simpan')){
			$config['upload_path'] = './asset/bukti/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';
			$config['max_width'] = '1024';
			$config['max_height'] = '768';

			$this->load->library('upload',$config);

			if( ! $this->upload->do_upload('foto')){
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('pesan',$error);
				redirect('cart/confirm/'.$this->input->post('id_nota'),'refresh');

			}else{
				$this->load->model('model_cart','pesan');
				$proses = $this->pesan->save_db($this->input->post('id_nota'),$this->upload->data('
					file_name'));
				if ($proses){
					$this->session->set_flashdata('pesan', 'sukses mengirim bukti. Mohon tunggu konfirmasi 
						dari admin');
					redirect('cart/confirm/'.$this->input->post('id_nota'),'refresh');
				} else{
					$this->session->flashdata('pesan','gagal mengirim bukti');
					redirect('cart/confirm/'.$this->input->post('id_nota'),'refresh');
				}
			}
			
		}
	}
	public function confirm($id)
	{
		$data['id_nota']=$id;
		$data['det_msg']=$this->pesan->detail_msg($id);
		$data['title']="--- Upload Bukti Pembayaran ---";
		$data['konten']="upload";
		$this->load->view('bioskop',$data,FALSE); 
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */
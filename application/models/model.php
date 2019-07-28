<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
	public function get_data_film()
	{
		return $this->db->get('film')->result();

	}
	public function detail_data($id)
	{
		return $this->db->where('id_film',$id)
						->get('film')->row();

	}
		public function simpan_data()
	{
		$data=array(
			'nama_pembeli'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'telp'=>$this->input->post('telp'),
			'ttl'=>$this->input->post('ttl'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))

		);
		return $this->db->insert('pembeli', $data);
	}
	public function cek_user()
	{
		return $this->db->where('username',$this->input->post('username'))
						->where('password',md5($this->input->post('password')))
						->get('pembeli');
	}
	public function message()
	{
		return $this->db->where('id_user',$data->id_user)
						->get('nota')
						->result();
	}
	public function show($id_nota)
	{
		return $this->db->where('id_nota',$id_nota)
						->join('film','film.id_film = tiket.id_film')
						->get('tiket')->result();
	}
	public function rm_nota($id)
	{
		$rm_buy=$this->db->where('id_nota',$id)
						->delete('tiket');
		if($rm_buy){
			$rmv_nota=$this->db->where('id_nota',$id)
								->delete('nota');
			if($rmv_nota){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

}

/* End of file model.php */
/* Location: ./application/models/model.php */
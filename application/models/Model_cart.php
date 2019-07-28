<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cart extends CI_Model {

	public function simpan_cart()
	{
	$object=array(
		'grandtotal'=>$this->input->post('grandtotal'),
		'id_pembeli'=>$this->session->userdata('id_pembeli'),
		'tgl_beli'=>date('Y-m-d'),
		'bukti'=>''
		);

		$mk_nota = $this->db->insert('nota', $object);

		if ($mk_nota) {
			$tm_nota=$this->db->order_by('id_nota','desc')->limit(1)->get('nota')->row();
			for($i=0;$i<count($this->input->post('id_film'));$i++){
				$hasil[]=array(
					'id_nota'=>$tm_nota->id_nota,
					'id_film'=>$this->input->post('id_film')[$i],
					'jumlah'=>$this->input->post('qty')[$i]
					);

			$proses = $this->db->insert_batch('tiket', $hasil);
			return $tm_nota->id_nota;
			}
		} else {
			return 0; // 0 / FALSE
		}
		
	}

	public function get_total($id)
	{
		return $this->db->where('id_nota',$id)
						->get('nota')
						->row();
	}

	public function detail_msg($id)
	{
		return $this->db->where('id_nota',$id)->get('nota')->row();
	}	

	public function save_db($id,$nama_file)
	{
		$object=array(
			'bukti'=>$nama_file,
			);
		return $this->db->where('id_nota',$id)
					->update('nota', $object);
	}

}

/* End of file Model_cart.php */
/* Location: ./application/models/Model_cart.php */
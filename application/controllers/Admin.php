<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_Admin');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	function index()
	{
		$data['serti']= $this->Model_Admin->tampil('peserta')->result();
		$this->load->view('Admin/home', $data);
	}
	
	function hapus($id)
	{
		$where = array('id'=>$id);
		$this->Model_Admin->hapus('peserta',$where);
		$this->session->set_flashdata('hapus',
							'<div class="alert alert-success alert-dismissible fade show" role="alert">
							Berhasil Menghapus Data !!
							</div>'
							);
			redirect(base_url('admin'));
	}

	public function tambah()
	{
		$config['upload_path']          = './assets/file';
	 $config['allowed_types']        = 'img|png|jpeg|gif|jpg|pdf';
	 $config['encrypt_name']        = true;
	 $config['max_size']             = 10000000;
	 $config['max_width']            = 10240;
	 $config['max_height']           = 7680;
	 $this->load->library('upload', $config);
	 if ( ! $this->upload->do_upload('serti')){
		$this->session->set_flashdata('gagal',
		'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Gagal! Pastikan Ekstensi sertfikat berupa png/jpg/pdf, maksimal ukuran 2 mb
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>'
		);
		redirect(base_url('admin'));
	}else{
					$data = array('foto' => $this->upload->data());
					$uploadData = $this->upload->data();
					$hasil = $uploadData['file_name'];
					$data = array(
					'nim' => $this->input->post('nim'),
					'nama' => $this->input->post('nama'),
					'serti' => $hasil,
				);

				$this->db->insert('peserta',$data);
				$this->session->set_flashdata('sukses',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong> menambah data
				</div>'
				);
				redirect(base_url('admin'));
	}
	}

	public function edit()
	{
						$id = $this->input->post('id');
						$where = array('id' => $id);
								$data = array(
								'nama' => $this->input->post('nama'),
								'nim' => $this->input->post('nim')
							);

							$this->db->update('peserta',$data,$where);
							$this->session->set_flashdata('edit',
							'<div class="alert alert-success alert-dismissible fade show" role="alert">
							successfully edit product 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
							);
							redirect(base_url('admin'));
	}                     

}
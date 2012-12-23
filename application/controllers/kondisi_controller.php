<?php
    /**
     * Controller untuk kondisi daerah bencana.
     */
    class Kondisi_Controller extends CI_Controller {
        
        function __construct() {
            parent::__construct();
        }
		
		/**
		 * Menampilkan list daerah-daerah dan kondisinya.
		 */
		public function index() {
			// menampilkan list dari masalah berdasarkan mode.
			$data['listKondisi'] = $this->kondisi_model->getAll();
			
			$this->load->view('master/header');
			$this->load->view('kondisi/list', $data);
			$this->load->view('master/footer');
			
		}
		
		/**
		 * Menampilkan form untuk add daerah dan kondisi.
		 */
		public function formAdd() {
			$this->load->view('master/header');
			$this->load->view('kondisi/add');
			$this->load->view('master/footer');
		}
		
		/**
		 * Memproses hasil submission dari formAdd.
		 */
		public function processAdd() {
			
			$hariIni = date('Y-m-d');
			
			$kondisiBaru = array(
				'nama_daerah' => $this->input->post('nama_daerah'),
				'air' => $this->input->post('air'),
				'makanan' => $this->input->post('makanan'),
				'listrik' => $this->input->post('listrik'),
				'komunikasi' => $this->input->post('komunikasi'),
				'medis' => $this->input->post('medis'),
				'total_pengungsi' => $this->input->post('total_pengungsi'),
				'korban_sakit_ringan' => $this->input->post('korban_sakit_ringan'),
				'korban_sakit_berat' => $this->input->post('korban_sakit_berat'),
				'korban_tewas' => $this->input->post('korban_tewas'),
				'update_terakhir' => $hariIni
			);
			
			if ($this->kondisi_model->add($kondisiBaru)) {
				redirect('kondisi_controller');
			} else {
				redirect('kondisi_controller/formAdd');
			}
		}
		
		/**
		 * Menampilkan form edit daerah dan kondisinya.
		 */
		public function formEdit($id) {
			$data['kondisi'] = $this->kondisi_model->getDetail($id);
			
			$this->load->view('master/header');
			$this->load->view('kondisi/edit', $data);
			$this->load->view('master/footer');
		}
		
		/**
		 * Memproses hasil submission dari formEdit.
		 */
		public function processEdit() {
			$hariIni = date('Y-m-d');
			$id = $this->input->post('id');
			
			$kondisiBaru = array(
				'nama_daerah' => $this->input->post('nama_daerah'),
				'air' => $this->input->post('air'),
				'makanan' => $this->input->post('makanan'),
				'listrik' => $this->input->post('listrik'),
				'komunikasi' => $this->input->post('komunikasi'),
				'medis' => $this->input->post('medis'),
				'total_pengungsi' => $this->input->post('total_pengungsi'),
				'korban_sakit_ringan' => $this->input->post('korban_sakit_ringan'),
				'korban_sakit_berat' => $this->input->post('korban_sakit_berat'),
				'korban_tewas' => $this->input->post('korban_tewas'),
				'update_terakhir' => $hariIni
			);
			
			if ($this->kondisi_model->edit($id, $kondisiBaru)) {
				redirect('kondisi_controller');
			} else {
				redirect('kondisi_controller/formEdit');
			}
		}
		
		/**
		 * Hapus kondisi dan daerah berdasarkan ID.
		 */
		public function delete($id) {
			$this->kondisi_model->delete($id);
			
			redirect('kondisi_controller');
		}
		
		/**
		 * Ambil detail kondisi dan daerah berdasarkan ID.
		 */
		public function detail($id) {
			$data['kondisi'] = $this->kondisi_model->getDetail($id);
			
			$this->load->view('master/header');
			$this->load->view('kondisi/detail', $data);
			$this->load->view('master/footer');
		}
    }
?>
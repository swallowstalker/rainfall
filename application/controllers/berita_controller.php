<?php
    /**
     * 
     */
    class Berita_Controller extends CI_Controller {
        
        function __construct() {
            parent::__construct();
        }
		
		public function index() {
			// menampilkan list dari masalah berdasarkan mode.
			$data['listBerita'] = $this->berita_model->getAll();
			
			$this->load->view('master/header');
			$this->load->view('berita/list', $data);
			$this->load->view('master/footer');
		}
		
		/**
		 * Menampilkan form add berita.
		 */
		public function formAdd() {
			$this->load->view('master/header');
			$this->load->view('berita/add');
			$this->load->view('master/footer');
		}
		
		/**
		 * Proses hasil submit formAdd.
		 */
		public function processAdd() {
			$hariIni = date('Y-m-d');
			
			$beritaBaru = array(
				'deskripsi' => $this->input->post('deskripsi'),
				'status' => $this->input->post('status'),
				'tujuan' => $this->input->post('tujuan'),
				'tanggal' => $hariIni
			);
			
			if ($this->berita_model->add($beritaBaru)) {
				redirect('berita_controller');
			} else {
				redirect('berita_controller/formAdd');
			}
		}
		
		/**
		 * Menampilkan form edit.
		 */
		public function formEdit($id) {
			$data['berita'] = $this->berita_model->getDetail($id);
			
			$this->load->view('master/header');
			$this->load->view('berita/edit', $data);
			$this->load->view('master/footer');
		}
		
		/**
		 * Proses form hasil submit dari formEdit.
		 */
		public function processEdit() {
			$hariIni = date('Y-m-d');
			$id = $this->input->post('id');
			
			$beritaBaru = array(
				'deskripsi' => $this->input->post('deskripsi'),
				'status' => $this->input->post('status'),
				'tujuan' => $this->input->post('tujuan'),
				'tanggal' => $hariIni
			);
			
			if ($this->berita_model->edit($id, $beritaBaru)) {
				redirect('berita_controller');
			} else {
				redirect('berita_controller/formEdit');
			}
		}
		
		/**
		 * Hapus berita berdasarkan id.
		 */
		public function delete($id) {
			$this->berita_model->delete($id);
			
			redirect('berita_controller');
		}
		
		/**
		 * Melihat detail berita.
		 */
		public function detail($id) {
			$data['berita'] = $this->berita_model->getDetail($id);
			
			$this->load->view('master/header');
			$this->load->view('berita/detail', $data);
			$this->load->view('master/footer');
		}
    }
    
?>
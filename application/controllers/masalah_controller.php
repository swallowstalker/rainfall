<?php
    /**
     * 
     */
    class Masalah_Controller extends CI_Controller {
        
        function __construct() {
            parent::__construct();
        }
		
		/**
		 * Menampilkan daftar masalah yang terjadi.
		 */
		public function index() {
			// menampilkan list dari masalah berdasarkan mode.
			$data['listMasalah'] = $this->masalah_model->getAll(ALL_LIST);
			
			if ($data['listMasalah']) {
				$this->load->view('masalah/list', $data);
			} else {
				echo "Tidak ada masalah :)";
			}
		}
		
		/**
		 * Menampilkan form tambah masalah.
		 */
		public function formAdd() {
			$this->load->view('masalah/add');
		}
		
		/**
		 * Memproses form tambah masalah yang telah disubmit.
		 */
		public function processAdd() {
			$masalahBaru = array(
				'deskripsi' => $this->input->post('deskripsi'),
				'deadline' => $this->input->post('deadline')
			);
			
			if ($this->masalah_model->add($masalahBaru)) {
				redirect('masalah_controller');
			} else {
				redirect('masalah_controller/formAdd');
			}
		}
		
		/**
		 * Menampilkan form edit.
		 */
		public function formEdit($id) {
			$data['masalah'] = $this->masalah_model->getDetail($id);
			
			$this->load->view('masalah/edit', $data);
		}
		
		/**
		 * Melakukan proses dari form edit yang telah disubmit.
		 */
		public function processEdit() {
			$id = $this->input->post('id');
			$masalahEdited = array(
				'deskripsi' => $this->input->post('deskripsi'),
				'deadline' => $this->input->post('deadline')
			);
			
			if($this->masalah_model->edit($id, $masalahEdited)) {
				redirect('masalah_controller');
			} else {
				redirect('masalah_controller/formEdit/' . $masalahEdited['id']);
			}
		}
		
		/**
		 * Menghapus masalah yang sudah ada.
		 */
		public function delete($id) {
			$this->masalah_model->delete($id);
			
			redirect('masalah_controller');
		}
		
		/**
		 * Menandai masalah dengan id [$id] sudah selesai.
		 */
		public function mark($id) {
			$tanda = array('resolved' => TRUE);
			$this->masalah_model->edit($id, $tanda);
			
			redirect('masalah_controller');
		}
		
		public function detail($id) {
			$data['masalah'] = $this->masalah_model->getDetail($id);
			
			$this->load->view('masalah/detail', $data);
			
		}
    }
    
?>
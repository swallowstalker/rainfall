<?php
    /**
     * 
     */
    class Kondisi_Model extends CI_Model {
        
        function __construct() {
            parent::__construct();
            $this->load->database(); // load database.
        }
		
		/**
		 * Menambah detail kondisi suatu daerah ke database.
		 */
		public function add($kondisi=array()) {
			
			// kondisi daerah udah ada yang sama persis -> ga boleh.
			$this->db->from('kondisi');
			$this->db->where($kondisi);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				return FALSE;
			} else {
				// tambah data.
				$this->db->insert('kondisi', $kondisi);
				return TRUE;
			}
		}
		
		/**
		 * Mengubah detail kondisi suatu daerah.
		 */
		public function edit($id, $kondisi=array()) {
			
			// kondisi dengan id yang sama ditemukan -> ubah.
			$this->db->from('kondisi');
			$this->db->where('id', $id);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				// update data
				$this->db->where('id', $id);
				$this->db->update('kondisi', $kondisi);
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Menghapus kondisi suatu daerah berdasarkan ID.
		 */
		public function delete($id) {
			
			// kondisi dengan id yang sama ditemukan -> delete.
			$this->db->from('kondisi');
			$this->db->where('id', $id);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				// delete data
				$this->db->where('id', $id);
				$this->db->delete('kondisi');
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Mengambil seluruh kondisi daerah.
		 */
		public function getAll() {
			
			$count = $this->db->count_all_results('kondisi');
			
			if($count > 0) {
				$query = $this->db->get('kondisi');
				return $query->result_array();
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Mengambil detail kondisi daerah berdasarkan ID.
		 */
		public function getDetail($id) {
			// kondisi dengan id yang sama ditemukan -> ambil.
			$this->db->from('kondisi');
			$this->db->where('id', $id);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				// ambil kondisi berdasarkan id.
				$this->db->from('kondisi');
				$this->db->where('id', $id);
				$query = $this->db->get();
				return $query->row_array();
			} else {
				return FALSE;
			}
		}
    }
    
?>
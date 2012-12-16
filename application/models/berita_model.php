<?php
    /**
     * Controller untuk berita pada daerah bencana.
     */
    class Berita_Model extends CI_Model {
        
        function __construct() {
            parent::__construct();
            $this->load->database(); // load database.
        }
		
		/**
		 * Menambah berita pada daerah bencana.
		 */
		public function add($berita=array()) {
			// berita udah ada yang sama persis -> ga boleh.
			$this->db->from('berita');
			$this->db->where($berita);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				return FALSE;
			} else {
				// tambah data.
				$this->db->insert('berita', $berita);
				return TRUE;
			}
		}
		
		/**
		 * Ubah detail berita.
		 */
		public function edit($id, $berita=array()) {
			
			// berita dengan id yang sama ditemukan -> ubah.
			$this->db->from('berita');
			$this->db->where('id', $id);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				// update data
				$this->db->where('id', $id);
				$this->db->update('berita', $berita);
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Hapus berita berdasarkan ID.
		 */
		public function delete($id) {
			
			// berita dengan id yang sama ditemukan -> delete.
			$this->db->from('berita');
			$this->db->where('id', $id);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				// delete data
				$this->db->where('id', $id);
				$this->db->delete('berita');
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function getAll() {
			
			$count = $this->db->count_all_results('berita');
			
			if($count > 0) {
				$query = $this->db->get('berita');
				return $query->result_array();
			} else {
				return FALSE;
			}
		}
		
		public function getDetail($id) {
			// berita dengan id yang sama ditemukan -> ambil.
			$this->db->from('berita');
			$this->db->where('id', $id);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				// ambil berita berdasarkan id.
				$this->db->from('berita');
				$this->db->where('id', $id);
				$query = $this->db->get();
				return $query->row_array();
			} else {
				return FALSE;
			}
		}
    }
    
?>
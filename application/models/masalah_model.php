<?php
    /**
     * 
     */
    class Masalah_Model extends CI_Model {
        
		/**
		 * Constructor untuk model masalah.
		 */
        function __construct() {
        	parent::__construct();
            $this->load->database(); // load database.
        }
		
		/**
		 * Menambah data masalah yang terjadi.
		 * $data akan berisi elemen masalah, terdiri dari: 
		 * deskripsi, deadline, status resolved. (tanpa id)
		 */
		public function add($masalah=array()) {
			
			// masalah udah ada yang sama persis -> ga boleh.
			$this->db->from('masalah');
			$this->db->where($masalah);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				return FALSE;
			} else {
				// tambah data.
				$this->db->insert('masalah', $masalah);
				return TRUE;
			}
		}
		
		/**
		 * Update data masalah yang terjadi.
		 * $data akan berisi elemen masalah, terdiri dari: 
		 * deskripsi, deadline, status resolved. (tanpa id)
		 * $id berisi id masalah.
		 */
		public function edit($id, $masalah=array()) {
			
			// masalah dengan id yang sama ditemukan -> ubah.
			$this->db->from('masalah');
			$this->db->where('id', $id);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				// update data
				$this->db->where('id', $id);
				$this->db->update('masalah', $masalah);
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Delete data masalah.
		 * $id berisi id masalah.
		 */
		public function delete($id) {
			// masalah dengan id yang sama ditemukan -> delete.
			$this->db->from('masalah');
			$this->db->where('id', $id);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				// delete data
				$this->db->where('id', $id);
				$this->db->delete('masalah');
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Mengambil semua masalah yang terjadi.
		 * $mode mode masalah, UNRESOLVED, RESOLVED, atau ALL_LIST.
		 */
		public function getAll($mode) {
			
			// periksa apakah ada masalah yang belum diresolved.
			if ($mode == UNRESOLVED) {
				$this->db->where('resolved', FALSE);
			} elseif ($mode == RESOLVED) {
				$this->db->where('resolved', TRUE);
			}
			$count = $this->db->count_all_results('masalah');
			
			if($count > 0) {
				if ($mode == UNRESOLVED) {
					$this->db->where('resolved', FALSE);
				} elseif ($mode == RESOLVED) {
					$this->db->where('resolved', TRUE);
				}
				$query = $this->db->get('masalah');
				return $query->result_array();
			} else {
				return FALSE;
			}
		}
		
		/**
		 * Detail dari suatu masalah.
		 * $id id dari masalah.
		 */
		public function getDetail($id) {
			// masalah dengan id yang sama ditemukan -> ambil.
			$this->db->from('masalah');
			$this->db->where('id', $id);
			$count = $this->db->count_all_results();
			
			if ($count != 0) {
				// ambil masalah berdasarkan id.
				$this->db->from('masalah');
				$this->db->where('id', $id);
				$query = $this->db->get();
				return $query->row_array();
			} else {
				return FALSE;
			}
		}
    }
    
?>
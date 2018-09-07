<?php

class Home_m extends CI_Model {
	function view($table, $where = array(), $limit = null, $offset = null) {
		foreach ($where as $key => $value) {
			if ($key == 'like') {
				foreach ($value as $a => $b) {
					$this->db->like(array($a => $b));
				}
			} else if ($key == 'not') {
				foreach ($value as $a => $b) {
					$this->db->where_not_in($a, $b);	
				}	
			} else if ($key == 'in') {
				foreach ($value as $a => $b) {
					$this->db->where_in($a, $b);
				}
			} else if ($key == 'join') {
				foreach ($value as $a => $b) {
					$this->db->join($a, $b);
				} 
			} else if ($key == 'join_left') {
				foreach ($value as $a => $b) {
					$this->db->join($a, $b, 'left');
				} 
			} else if ($key == 'group_by') {
				foreach ($value as $a => $b) {
					$this->db->group_by($b);
				}
			} else if ($key == 'having') {
				foreach ($value as $a => $b) {
					$this->db->having($a, $b);
				}
			} else if ($key == 'select') {
				foreach ($value as $a => $b) {
					$this->db->select($b);
				}
			} else if ($key == 'order_by') {
				foreach ($value as $a => $b) {
					$this->db->order_by($table . "." . $a, $b);
				}
			} else {
				$this->db->where(array($key => $value));
			}
		}

		$result = $this->db->get($table, $limit, $offset);
		return $result->result();
	}

	function count($table, $where = array()) {
		foreach ($where as $key => $value) {
			if ($key == 'like') {
				foreach ($value as $a => $b) {
					$this->db->like(array($a => $b));
				}
			} else if ($key == 'not') {
				foreach ($value as $a => $b) {
					$this->db->where_not_in($a, $b);	
				}	
			} else if ($key == 'in') {
				foreach ($value as $a => $b) {
					$this->db->where_in($a, $b);
				}
			} else if ($key == 'join') {
				foreach ($value as $a => $b) {
					$this->db->join($a, $b);
				} 
			} else if ($key == 'join_left') {
				foreach ($value as $a => $b) {
					$this->db->join($a, $b, 'left');
				} 
			} else if ($key == 'group_by') {
				foreach ($value as $a => $b) {
					$this->db->group_by($b);
				}
			} else if ($key == 'having') {
				foreach ($value as $a => $b) {
					$this->db->having($a, $b);
				}
			} else if ($key == 'select') {
				foreach ($value as $a => $b) {
					$this->db->select($b);
				}
			} else if ($key == 'order_by') {
				foreach ($value as $a => $b) {
					$this->db->order_by($table . "." . $a, $b);
				}
			} else {
				$this->db->where(array($key => $value));
			}
		}
		
		return $this->db->count_all_results($table);
	}

	function create($table, $query = array()) {
		unset($query['idx']);
		if(!$this->db->insert($table, $query)) {
			return 0;
		} else {
			return $this->db->insert_id();
		};
	}

	function update($table, $query = array(), $escape = NULL) {
		if(isset($query['idx'])) {
			foreach ($query as $key => $value) {
				if($key != 'idx') {
					$this->db->set($key, $value, $escape);
				}
			}
			
			$this->db->where('idx', $query['idx']);
			$this->db->set('updated_at', date("Y-m-d H:i:s"));
			$this->db->update($table);
			return ($this->db->affected_rows() > 0) ? $query['idx'] : false;
		} else {
			return false;
		}
	}

	function delete($table, $query) {
		$this->db->delete($table, $query);
		return $this->db->affected_rows();
	}
}
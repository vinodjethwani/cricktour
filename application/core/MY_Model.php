<?php 

class MY_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
		
	public function get_all($table, $where = '', $select = '', $order = array(), $join = array(), $joinOn = array(), $limit = 0, $offset = 0, $groupBy = '') {
			
			if ($select) {
				$this->db->select($select,false);
			}

			if ($where) {
				$this->db->where($where);
			}

			if (is_array($order)) {

				if(count($order) == 1) {
					$this->db->order_by($order[0]);
				}

				if(count($order) == 2) {
					$this->db->order_by($order[0], $order[1]);
				}
			}

			if (!empty($join) && !empty($joinOn)) {
				foreach ($join as $key => $value) {
					$this->db->join($value, $joinOn[$key], 'left');
				}
			}

			if ($limit) {
				$this->db->limit($limit, $offset);
			}

			if ($groupBy) {
				$this->db->group_by($groupBy);
			}

			return $this->db->get($table)->result();
	}
}
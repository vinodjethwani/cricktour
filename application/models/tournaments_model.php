<?php

class Tournaments_model extends MY_Model {

	protected $_table = 'tournaments';
	protected $primary_key = 'tournaments_id';

	public function tournaments_info()
    {
         /*$this->db->join('tb_city', 'tb_city.city_id = tournaments.city_id');
         $this->db->join('tb_ground', 'tb_ground.ground_id = tournaments.ground_id');*/

        $this->db->select('*');

        return $this;
    }
}
?>
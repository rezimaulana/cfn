<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_country extends CI_Model{
    function fetchTCO(){
        $query = $this->db->get('t_country');
        return $query->result();
    }
}
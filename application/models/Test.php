<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Model {
    function __construct(){
        parent::__construct();

    }
    function index(){
        
    }
    function search($s){
        $this->db->select('*');
        $this->db->from('t_job');
        $this->db->where('j_subject_id', $s);
        $query = $this->db->get();
        return $query->result();
    }
}
?>
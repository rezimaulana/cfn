<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_user_d extends CI_Model{
    function getUinformation($id_user){
        $this->db->where('id_user', $id_user);  
        $query = $this->db->get('t_user_d');
        return $query->result();
    }
    function cUserd($u_name, $u_gender, $u_bloodtp, $u_birthplace, $u_birthdate, $u_nation, $u_marital, $u_1_addr, $u_2_subdis, $u_3_dist, $u_4_addr, $u_postcode, $c_id, $u_phone, $u_last_edu, $u_le_place, $u_le_year_entry, $u_le_year_gradu){
        $id_user = $this->session->userdata("id_user");
        $this->db->where('id_user', $id_user);
        $data = array (
            'u_name' => $u_name,
            'u_gender' => $u_gender, 
            'u_bloodtp' => $u_bloodtp, 
            'u_birthplace' => $u_birthplace, 
            'u_birthdate' => $u_birthdate, 
            'u_nation' => $u_nation, 
            'u_marital' => $u_marital, 
            'u_1_addr' => $u_1_addr, 
            'u_2_subdis' => $u_2_subdis,
            'u_3_dist' => $u_3_dist, 
            'u_4_addr' => $u_4_addr, 
            'u_postcode' => $u_postcode,
            'c_id' => $c_id, 
            'u_phone' => $u_phone, 
            'u_last_edu' => $u_last_edu, 
            'u_le_place' => $u_le_place, 
            'u_le_year_entry' => $u_le_year_entry, 
            'u_le_year_gradu' => $u_le_year_gradu
        );
        $this->db->update('t_user_d', $data);
        return true;
    }
}
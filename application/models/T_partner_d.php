<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_partner_d extends CI_Model{
    function getDatapd($id_user){
        $this->db->where('id_user', $id_user);  
        $query = $this->db->get('t_partner_d');
        return $query->result();
    }
    function cPartnerd($u_name, $u_1_addr, $u_2_subdis, $u_3_dist, $u_4_addr, $u_postcode, $u_phone, $p_desc, $p_cp, $c_id){
        $id_user = $this->session->userdata("id_user");
        $this->db->where('id_user', $id_user);
        $data = array (
            'u_name' => $u_name,
            'u_1_addr' => $u_1_addr, 
            'u_2_subdis' => $u_2_subdis,
            'u_3_dist' => $u_3_dist, 
            'u_4_addr' => $u_4_addr, 
            'u_postcode' => $u_postcode,
            'u_phone' => $u_phone,
            'p_desc' => $p_desc,
            'p_cp' => $p_cp,
            'c_id' => $c_id
        );
        $this->db->update('t_partner_d', $data);
        return true;
    }
    function p4_uploadName($u_pic){
        $id_user = $this->session->userdata("id_user");
        $this->db->where('id_user', $id_user);
        $data = array (
            'u_pic' => $u_pic,
        );
        $this->db->update('t_partner_d', $data);
        return true;
    }
    function regpa_valid($u_email, $u_pass, $u_name, $u_1_addr, $u_2_subdis, $u_3_dist, $u_4_addr, $u_postcode, $c_id, $u_phone){
        $this->db->where('u_email', $u_email);
        $query = $this->db->get(t_user);
        if($query->num_rows() == 0){
            $this->db->where('u_email', $u_email);
            $query = $this->db->get(t_partner_d);
            if($query->num_rows() == 0){  
                $nid = 'ID-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
                for($i=0;$i<20;$i++){
                    $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
                }
                $id_user = $nid.$nunix.$nsplit.$serial;
                $r_lvl = '4';
                $data1 = array(
                    'id_user' => $id_user,
                    'u_pass' => $u_pass,
                    'u_email' => $u_email,
                    'r_lvl' => $r_lvl,
                );
                $data2 = array(
                    'id_user' => $id_user,
                    'u_email' => $u_email,
                    'u_name' => $u_name,
                    'u_1_addr' => $u_1_addr,
                    'u_2_subdis' => $u_2_subdis,
                    'u_3_dist' => $u_3_dist,
                    'u_4_addr' => $u_4_addr,
                    'u_postcode' => $u_postcode,
                    'c_id' => $c_id,
                    'u_phone' => $u_phone,
                );
                $path="uploads/partner_file/";mkdir($path.$id_user,0755,TRUE);
                $this->db->insert('t_user',$data1);
                $this->db->insert('t_partner_d',$data2);
                return true;
            }
            else{
                return false;
            }  
        }
        else{
            return false;
        }
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_track extends CI_Model{
    function in_session(){
        $nid = 'LOG-';
        $nunix = now();
        $nsplit = '-';
        $chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $serial = '';
        $max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_log = $nid.$nunix.$nsplit.$serial;
        $t_log_in = "login";
        $data = array(
            'id_user' => $this->session->userdata('id_user'),
            'id_log' => $id_log,
            't_log' => $t_log_in,
            't_ip' => $this->input->ip_address(),
            't_agent' => $this->agent->agent_string(),
        );
        $this->db->insert('t_track',$data);
    } 
    function out_session(){
        $nid = 'LOG-';
        $nunix = now();
        $nsplit = '-';
        $chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $serial = '';
        $max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_log = $nid.$nunix.$nsplit.$serial;
        $t_log_out = "logout";
        $data = array(
            'id_user' => $this->session->userdata('id_user'),
            'id_log' => $id_log,
            't_log' => $t_log_out,
            't_ip' => $this->input->ip_address(),
            't_agent' => $this->agent->agent_string(),
        );
        $this->db->insert('t_track',$data);
    }
    function getDatat($id_user){
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('t_track');
        return $query->result();
    }
    function getSuser()
    {
        $query = $this->db->get('ci_session');
        return $query->result();
    }
    function getAuser()
    {
        $query = $this->db->get('t_track');
        return $query->result();
    }
}
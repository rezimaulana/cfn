<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_cc extends CI_Model{
    private $blogs = 't_partner_t'; 
    private $vacancy = 't_job';  
    function __construct(){
        parent::__construct();
    }
    /* function get_ran($id_pt){
        $this->db->join('t_partner_t', 't_job.id_user_p = t_partner_t.id_user', 'left');
        $this->db->join('t_partner_t', 't_job.id_user_p = t_partner_t.id_user', 'right');
        $this->db->where('id_pt',$id_pt);
        $query = $this->db->get('t_job');
        return $query->result();
    } */
    /* function get_rva($id_pt){
        $lfid='10';
        $this->db->join('t_partner_t', 't_partner_t.id_user = t_job.id_user_p', 'inner');
        $this->db->where('id_pt',$id_pt);
        $this->db->order_by("timestamp_b", "desc"); 
        $query = $this->db->get('t_job',$lfid);
        return $query->result();
    }
 */

    function get_rva($idd){
        $lfid='10';
        $this->db->where('id_user_p',$idd);
        $this->db->order_by("timestamp", "desc"); 
        $query = $this->db->get('t_job',$lfid);
        return $query->result();
    }
    function get_ran($idd){
        $lfid='10';
        $this->db->where('id_user',$idd);
        $this->db->order_by("timestamp_b", "desc"); 
        $query = $this->db->get('t_partner_t',$lfid);
        return $query->result();
    }
    function get_rva4($idd){
        $lfid='4';
        $this->db->where('id_user_p',$idd);
        $this->db->order_by("timestamp", "desc"); 
        $query = $this->db->get('t_job',$lfid);
        return $query->result();
    }
    function get_ran4($idd){
        $lfid='4';
        $this->db->join('t_job', 't_job.id_job = t_partner_t.id_job', 'left');
        $this->db->where('id_user',$idd);
        $this->db->order_by("timestamp_b", "desc"); 
        $query = $this->db->get('t_partner_t',$lfid);
        return $query->result();
    }



    function get_apply_acc($id_pt){
        $state1Y='Y';$state2Y='Y';$state1Q='Q';$state2Q='Q';$state1S='S';$state2S='S';
        $this->db->join('t_partner_t', 't_partner_t.id_job = t_apply.id_job', 'left');
        $this->db->where('id_pt',$id_pt);$this->db->where('state_1',$state1Y);$this->db->where('state_2',$state2Y);
        $this->db->or_where('id_pt',$id_pt);$this->db->where('state_1',$state1Q);$this->db->where('state_2',$state2S);
        $this->db->or_where('id_pt',$id_pt);$this->db->where('state_1',$state1S);$this->db->where('state_2',$state2Q);
        $this->db->order_by("timestamp_a", "desc"); 
        $query = $this->db->get('t_apply');
        return $query->result();
    }
    function get_apply_sel($id_pt){
        $state1Y='Y';$state2Y='Y'; $state1Q='Q';$state2Q='Q';$state1S='S';$state2S='S';$state2N='N';
        $this->db->join('t_partner_t', 't_partner_t.id_job = t_apply.id_job', 'left');
        $this->db->where('id_pt',$id_pt);$this->db->where('state_1',$state1Y);$this->db->where('state_2',$state2N);
        $this->db->or_where('id_pt',$id_pt);$this->db->where('state_1',$state1S);$this->db->where('state_2',$state2Q);
        $this->db->or_where('id_pt',$id_pt);$this->db->where('state_1',$state1Q);$this->db->where('state_2',$state2S);
        $this->db->or_where('id_pt',$id_pt);$this->db->where('state_1',$state1Y);$this->db->where('state_2',$state2Y);
        $this->db->order_by("timestamp_a", "desc"); 
        $query = $this->db->get('t_apply');
        return $query->result();
    }
    function get_apply_vacc($id_job){
        $state1Y='Y';$state2Y='Y';$state1Q='Q';$state2Q='Q';$state1S='S';$state2S='S';
        $this->db->join('t_user_d', 't_user_d.id_user = t_apply.id_file', 'left');
        /* Penerimaan */$this->db->where('id_job',$id_job);$this->db->where('state_1',$state1Y);$this->db->where('state_2',$state2Y);
        /* Karyawan */$this->db->or_where('id_job',$id_job);$this->db->where('state_1',$state1Q);$this->db->where('state_2',$state2S);
        /* Bukan Karyawan */$this->db->or_where('id_job',$id_job);$this->db->where('state_1',$state1S);$this->db->where('state_2',$state2Q);
        $this->db->order_by("timestamp_a", "desc"); 
        $query = $this->db->get('t_apply');
        return $query->result();
    }
    function get_apply_vsel($id_job){
        $state1Y='Y';$state2Y='Y'; $state1Q='Q';$state2Q='Q';$state1S='S';$state2S='S';$state2N='N';
        $this->db->join('t_user_d', 't_user_d.id_user = t_apply.id_file', 'left');
        /* Seleksi */$this->db->where('id_job',$id_job);$this->db->where('state_1',$state1Y);$this->db->where('state_2',$state2N);
        /* Bukan Karyawan */$this->db->or_where('id_job',$id_job);$this->db->where('state_1',$state1S);$this->db->where('state_2',$state2Q);
        /* Karyawan */$this->db->or_where('id_job',$id_job);$this->db->where('state_1',$state1Q);$this->db->where('state_2',$state2S);
        /* Penerimaan */$this->db->or_where('id_job',$id_job);$this->db->where('state_1',$state1Y);$this->db->where('state_2',$state2Y);
        $this->db->order_by("timestamp_a", "desc"); 
        $query = $this->db->get('t_apply');
        return $query->result();
    }
    function get_blogs($limit, $offset) {
        if ($offset > 0) {
            $offset = ($offset - 1) * $limit;
        }
        $u_block = 'N';
        $this->db->join('t_job', 't_job.id_job = t_partner_t.id_job', 'left');
        $this->db->join('t_partner_d', 't_partner_d.id_user = t_partner_t.id_user', 'left');
        $this->db->join('t_user', 't_user.id_user = t_partner_t.id_user', 'left');
        $this->db->where('u_block',$u_block);
        $this->db->order_by("timestamp_b", "desc"); 
        $result['rows'] = $this->db->get($this->blogs, $limit, $offset);
        $result['num_rows'] = $this->db->count_all_results($this->blogs);
        return $result;
    }
    function get_blogs_by($id_pt){
        $u_block = 'N';
        $this->db->join('t_job', 't_job.id_job = t_partner_t.id_job', 'left');
        $this->db->join('t_partner_d', 't_partner_d.id_user = t_partner_t.id_user', 'left');
        $this->db->join('t_user', 't_user.id_user = t_partner_t.id_user', 'left');
        $this->db->where('u_block',$u_block);
        $this->db->where('id_pt',$id_pt);
        $query = $this->db->get('t_partner_t');
        return $query->result();
    }
    function get_vacancy($limit, $offset) {
        if ($offset > 0) {
            $offset = ($offset - 1) * $limit;
        }
        $u_block = 'N';
        $this->db->join('t_partner_d', 't_partner_d.id_user = t_job.id_user_p', 'left');
        $this->db->join('t_user', 't_user.id_user = t_job.id_user_p', 'left');
        $this->db->where('u_block',$u_block);
        $this->db->order_by("timestamp", "desc"); 
        $result['rows'] = $this->db->get($this->vacancy, $limit, $offset);
        $result['num_rows'] = $this->db->count_all_results($this->vacancy);
        return $result;
    }
    function get_vacancy_by($id_job){
        $u_block = 'N';
        $this->db->join('t_partner_d', 't_partner_d.id_user = t_job.id_user_p', 'left');
        $this->db->join('t_user', 't_user.id_user = t_job.id_user_p', 'left');
        $this->db->where('u_block',$u_block);
        $this->db->order_by("timestamp", "desc"); 
        $this->db->where('id_job',$id_job);
        $query = $this->db->get('t_job');
        return $query->result();
    }
    function allow_to_av($id_job,$id_file,$r_lvl){
        $this->db->where('id_job', $id_job);
        $this->db->where('id_file', $id_file);
        $this->db->where('r_lvl', $r_lvl);
        $query = $this->db->get('t_apply');
            if($query->num_rows() == 0){  
                $nid = 'APPLY-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
                for($i=0;$i<20;$i++){
                    $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
                }
                $id_apply = $nid.$nunix.$nsplit.$serial;
                $data = array(
                    'id_apply' => $id_apply,
                    'id_job' => $id_job,
                    'id_file' => $id_file,
                    'r_lvl' => $r_lvl,
                );
                $this->db->insert('t_apply',$data);
                return true;
            }
            else{
                return false;
            }  
    }
    function get_vac() {
        $u_block = 'N';
        $this->db->join('t_partner_d', 't_partner_d.id_user = t_job.id_user_p', 'left');
        $this->db->join('t_user', 't_user.id_user = t_job.id_user_p', 'left');
        $this->db->where('u_block',$u_block);
        $this->db->order_by("timestamp", "desc"); 
        $this->db->limit("8"); 
        $query = $this->db->get('t_job');
        return $query->result();
    }
    function get_ann() {
        $u_block = 'N';
        $this->db->join('t_job', 't_job.id_job = t_partner_t.id_job', 'left');
        $this->db->join('t_partner_d', 't_partner_d.id_user = t_partner_t.id_user', 'left');
        $this->db->join('t_user', 't_user.id_user = t_partner_t.id_user', 'left');
        $this->db->where('u_block',$u_block);
        $this->db->order_by("timestamp", "desc"); 
        $this->db->limit("8"); 
        $query = $this->db->get('t_partner_t');
        return $query->result();
    }
    function get_link($id_job){
        $this->db->where('id_job',$id_job);
        $this->db->order_by("timestamp_b", "asc"); 
        $query = $this->db->get('t_partner_t');
        return $query->result();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_user_file extends CI_Model{
    function getUfile($id_user){
        $this->db->where('id_user', $id_user);  
        $query = $this->db->get('t_user_file');
        return $query->result();
    }
    function uploadRes($u_resume){
        $id_user = $this->session->userdata("id_user");
        $this->db->where('id_user', $id_user);
        $data = array (
            'u_resume' => $u_resume,
        );
        $this->db->update('t_user_file', $data);
        return true;
    }
    function uploadCur($u_cv){
        $id_user = $this->session->userdata("id_user");
        $this->db->where('id_user', $id_user);
        $data = array (
            'u_cv' => $u_cv,
        );
        $this->db->update('t_user_file', $data);
        return true;
    }
    function uploadCer($u_certificate){
        $id_user = $this->session->userdata("id_user");
        $this->db->where('id_user', $id_user);
        $data = array (
            'u_certificate' => $u_certificate,
        );
        $this->db->update('t_user_file', $data);
        return true;
    }
    function uploadQua($u_qualification){
        $id_user = $this->session->userdata("id_user");
        $this->db->where('id_user', $id_user);
        $data = array (
            'u_qualification' => $u_qualification,
        );
        $this->db->update('t_user_file', $data);
        return true;
    }
    function uploadPic($u_pic){
        $id_user = $this->session->userdata("id_user");
        $this->db->where('id_user', $id_user);
        $data = array (
            'u_pic' => $u_pic,
        );
        $this->db->update('t_user_file', $data);
        return true;
    }
    function uploadAdd($u_add){
        $id_user = $this->session->userdata("id_user");
        $this->db->where('id_user', $id_user);
        $data = array (
            'u_add' => $u_add,
        );
        $this->db->update('t_user_file', $data);
        return true;
    }
    function ufile()
    {
        $state_f = 'Y';
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from('t_apply');
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->where('id_user_p', $id_user);
        $this->db->where('state_f', $state_f);
        $this->db->order_by("timestamp_a", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }
    function udata()
    {
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from('t_apply');
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->join('t_user_d', 't_user_file.id_user = t_user_d.id_user', 'left');
        $this->db->where('id_user_p', $id_user);
        $this->db->order_by("timestamp_a", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }
    function ufileth()
    {
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from('t_apply');
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->where('id_user', $id_user);
        $this->db->order_by("timestamp_a", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }
    function c_ufile($id_apply,$state_fi)
    {
        $this->db->where('id_apply', $id_apply);
        $data = array (
            'state_f' => $state_fi
        );
        $this->db->update('t_apply',$data);
        return true;
    }
    function udatath()
    {
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from('t_apply');
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->where('id_file', $id_user);
        $this->db->order_by("timestamp_a", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }



    function ufile1()
    {
        $this->db->select('*');
        $this->db->from('t_user_file');
        $this->db->join('t_user', 't_user_file.id_file = t_user.id_user', 'left');
        $query = $this->db->get();
        return $query->result();
    }
    function udata1()
    {
        $this->db->select('*');
        $this->db->from('t_apply');
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->join('t_user_d', 't_user_file.id_user = t_user_d.id_user', 'left');
        $this->db->order_by("timestamp_a", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }

    function getDownload($id_file)
    {
        $this->db->where('id_file',$id_file);
        $query = $this->db->get('t_user_file');
        return $query->result();
    }







}
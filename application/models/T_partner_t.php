<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_partner_t extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getPT(){
        $pt_categories='ANNS';
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('t_partner_t');
        $this->db->where('id_user', $id_user);
        $this->db->where('pt_categories',$pt_categories);
        $query = $this->db->get();
        return $query->result();
    }
    function getPT2(){
        $pt_categories='ANNA';
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('t_partner_t');
        $this->db->where('id_user', $id_user);
        $this->db->where('pt_categories',$pt_categories);
        $query = $this->db->get();
        return $query->result();
    }
    function getPTby($id_pt){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('t_partner_t');
        $this->db->where('id_pt', $id_pt);
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query->result();
    }
    function danselect($id_pt){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('t_partner_t');
        $this->db->where('id_pt', $id_pt);
        $this->db->where('id_user', $id_user);
        $this->db->delete();
        return true;
    }
    function nanselect($id_pt,$pt_pic){
        $id_user = $this->session->userdata('id_user');
        $pt_categories = 'ANNS';
        $data = array(
        'id_pt' => $id_pt, 'id_job' => $this->input->post('id_job'), 'id_user' => $id_user, 'pt_subject_en' => $this->input->post('pt_subject_en'),
        'pt_subject_id' => $this->input->post('pt_subject_id'), 'pt_categories' => $pt_categories, 'pt_content_en' => $this->input->post('pt_content_en'),
        'pt_content_id' => $this->input->post('pt_content_id'), 'pt_pic' => $pt_pic
        );
        $this->db->insert('t_partner_t', $data);
        return true;
    }
    function nanselectid($id_pt,$pt_pic){
        $id_user = $this->session->userdata('id_user');
        $pt_categories = 'ANNS';
        $data = array(
        'id_pt' => $id_pt, 'id_job' => $this->input->post('id_job'), 'id_user' => $id_user, 'pt_subject_en' => $this->input->post('pt_subject_id'),
        'pt_subject_id' => $this->input->post('pt_subject_id'), 'pt_categories' => $pt_categories, 'pt_content_en' => $this->input->post('pt_content_id'),
        'pt_content_id' => $this->input->post('pt_content_id'), 'pt_pic' => $pt_pic
        );
        $this->db->insert('t_partner_t', $data);
        return true;
    }
    function nanselecten($id_pt,$pt_pic){
        $id_user = $this->session->userdata('id_user');
        $pt_categories = 'ANNS';
        $data = array(
        'id_pt' => $id_pt, 'id_job' => $this->input->post('id_job'), 'id_user' => $id_user, 'pt_subject_en' => $this->input->post('pt_subject_en'),
        'pt_subject_id' => $this->input->post('pt_subject_en'), 'pt_categories' => $pt_categories, 'pt_content_en' => $this->input->post('pt_content_en'),
        'pt_content_id' => $this->input->post('pt_content_en'), 'pt_pic' => $pt_pic
        );
        $this->db->insert('t_partner_t', $data);
        return true;
    }
    function eanselect1($id_pt,$pt_pic){
        $id_user = $this->session->userdata('id_user');
        $data = array(
        'pt_subject_en' => $this->input->post('pt_subject_en'),'pt_subject_id' => $this->input->post('pt_subject_id'), 
        'pt_content_en' => $this->input->post('pt_content_en'),'pt_content_id' => $this->input->post('pt_content_id'), 'pt_pic' => $pt_pic
        );
        $this->db->where('id_user',$id_user);
        $this->db->where('id_pt',$id_pt);
        $this->db->update('t_partner_t', $data);
        return true;
    }
    function eanselect2($id_pt){
        $id_user = $this->session->userdata('id_user');
        $data = array(
        'pt_subject_en' => $this->input->post('pt_subject_en'),'pt_subject_id' => $this->input->post('pt_subject_id'), 
        'pt_content_en' => $this->input->post('pt_content_en'),'pt_content_id' => $this->input->post('pt_content_id')
        );
        $this->db->where('id_user',$id_user);
        $this->db->where('id_pt',$id_pt);
        $this->db->update('t_partner_t', $data);
        return true;
    }


    function nanaccept($id_pt,$pt_pic){
        $id_user = $this->session->userdata('id_user');
        $pt_categories = 'ANNA';
        $data = array(
        'id_pt' => $id_pt, 'id_job' => $this->input->post('id_job'), 'id_user' => $id_user, 'pt_subject_en' => $this->input->post('pt_subject_en'),
        'pt_subject_id' => $this->input->post('pt_subject_id'), 'pt_categories' => $pt_categories, 'pt_content_en' => $this->input->post('pt_content_en'),
        'pt_content_id' => $this->input->post('pt_content_id'), 'pt_pic' => $pt_pic
        );
        $this->db->insert('t_partner_t', $data);
        return true;
    }
    function nanacceptid($id_pt,$pt_pic){
        $id_user = $this->session->userdata('id_user');
        $pt_categories = 'ANNA';
        $data = array(
        'id_pt' => $id_pt, 'id_job' => $this->input->post('id_job'), 'id_user' => $id_user, 'pt_subject_en' => $this->input->post('pt_subject_id'),
        'pt_subject_id' => $this->input->post('pt_subject_id'), 'pt_categories' => $pt_categories, 'pt_content_en' => $this->input->post('pt_content_id'),
        'pt_content_id' => $this->input->post('pt_content_id'), 'pt_pic' => $pt_pic
        );
        $this->db->insert('t_partner_t', $data);
        return true;
    }
    function nanaccepten($id_pt,$pt_pic){
        $id_user = $this->session->userdata('id_user');
        $pt_categories = 'ANNA';
        $data = array(
        'id_pt' => $id_pt, 'id_job' => $this->input->post('id_job'), 'id_user' => $id_user, 'pt_subject_en' => $this->input->post('pt_subject_en'),
        'pt_subject_id' => $this->input->post('pt_subject_en'), 'pt_categories' => $pt_categories, 'pt_content_en' => $this->input->post('pt_content_en'),
        'pt_content_id' => $this->input->post('pt_content_en'), 'pt_pic' => $pt_pic
        );
        $this->db->insert('t_partner_t', $data);
        return true;
    }

}
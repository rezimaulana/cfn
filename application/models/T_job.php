<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_job extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->tblName = 't_job';
    }
    function getanvacancy() {
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('t_job');
        $this->db->where('id_user_p', $id_user);
        $query = $this->db->get();
        return $query->result();
    }
    function geteanvacancy($id_job) {
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('t_job');
        $this->db->where('id_job', $id_job);
        $this->db->where('id_user_p', $id_user);
        $query = $this->db->get();
        return $query->result();
    }
    function nanvacancy($id_job,$j_pc){
        $data = array(
        'j_subject_en' => $this->input->post('j_subject_en'),'j_type_en' => $this->input->post('j_type_en'),'j_industry_en' => $this->input->post('j_industry_en'),
        'j_function_en' => $this->input->post('j_function_en'),'j_experience_en' => $this->input->post('j_experience_en'),'j_education_en' => $this->input->post('j_education_en'),
        'j_desc_en' => $this->input->post('j_desc_en'),'j_requirement_en' => $this->input->post('j_requirement_en'),'j_subject_id' => $this->input->post('j_subject_id'),
        'j_type_id' => $this->input->post('j_type_id'),'j_industry_id' => $this->input->post('j_industry_id'),'j_function_id' => $this->input->post('j_function_id'),
        'j_experience_id' => $this->input->post('j_experience_id'),'j_education_id' => $this->input->post('j_education_id'),'j_desc_id' => $this->input->post('j_desc_id'),
        'j_requirement_id' => $this->input->post('j_requirement_id'),'j_salary' => $this->input->post('j_salary'),'j_available' => $this->input->post('j_available'),
        'jf1' => $this->input->post('jf1'),'jf2' => $this->input->post('jf2'),'jf3' => $this->input->post('jf3'),'jf4' => $this->input->post('jf4'),'jf5' => $this->input->post('jf5'),'jf6' => $this->input->post('jf6'),
        'jfen' => $this->input->post('jfen'), 'jfid' => $this->input->post('jfid'),
        'j_valid' => $this->input->post('j_valid'), 'id_job' => $id_job, 'j_pc' => $j_pc, 'id_user_p' => $this->session->userdata('id_user')  
        );
        $this->db->insert('t_job', $data);
        return true;
    }
    function nanvacancyid($id_job,$j_pc){
        $data = array(
        'j_subject_en' => $this->input->post('j_subject_id'),'j_type_en' => $this->input->post('j_type_id'),'j_industry_en' => $this->input->post('j_industry_id'),
        'j_function_en' => $this->input->post('j_function_id'),'j_experience_en' => $this->input->post('j_experience_id'),'j_education_en' => $this->input->post('j_education_id'),
        'j_desc_en' => $this->input->post('j_desc_id'),'j_requirement_en' => $this->input->post('j_requirement_id'),
        'j_subject_id' => $this->input->post('j_subject_id'),
        'j_type_id' => $this->input->post('j_type_id'),'j_industry_id' => $this->input->post('j_industry_id'),'j_function_id' => $this->input->post('j_function_id'),
        'j_experience_id' => $this->input->post('j_experience_id'),'j_education_id' => $this->input->post('j_education_id'),'j_desc_id' => $this->input->post('j_desc_id'),
        'j_requirement_id' => $this->input->post('j_requirement_id'),
        'j_salary' => $this->input->post('j_salary'),'j_available' => $this->input->post('j_available'),
        'jf1' => $this->input->post('jf1'),'jf2' => $this->input->post('jf2'),'jf3' => $this->input->post('jf3'),'jf4' => $this->input->post('jf4'),'jf5' => $this->input->post('jf5'),'jf6' => $this->input->post('jf6'),
        'jfen' => $this->input->post('jfid'), 'jfid' => $this->input->post('jfid'),
        'j_valid' => $this->input->post('j_valid'), 'id_job' => $id_job, 'j_pc' => $j_pc, 'id_user_p' => $this->session->userdata('id_user')
        );
        $this->db->insert('t_job', $data);
        return true;
    }
    function nanvacancyen($id_job,$j_pc){
        $data = array(
        'j_subject_en' => $this->input->post('j_subject_en'),'j_type_en' => $this->input->post('j_type_en'),'j_industry_en' => $this->input->post('j_industry_en'),
        'j_function_en' => $this->input->post('j_function_en'),'j_experience_en' => $this->input->post('j_experience_en'),'j_education_en' => $this->input->post('j_education_en'),
        'j_desc_en' => $this->input->post('j_desc_en'),'j_requirement_en' => $this->input->post('j_requirement_en'),
        'j_subject_id' => $this->input->post('j_subject_en'),
        'j_type_id' => $this->input->post('j_type_en'),'j_industry_id' => $this->input->post('j_industry_en'),'j_function_id' => $this->input->post('j_function_en'),
        'j_experience_id' => $this->input->post('j_experience_en'),'j_education_id' => $this->input->post('j_education_en'),'j_desc_id' => $this->input->post('j_desc_en'),
        'j_requirement_id' => $this->input->post('j_requirement_en'),
        'j_salary' => $this->input->post('j_salary'),'j_available' => $this->input->post('j_available'),
        'jf1' => $this->input->post('jf1'),'jf2' => $this->input->post('jf2'),'jf3' => $this->input->post('jf3'),'jf4' => $this->input->post('jf4'),'jf5' => $this->input->post('jf5'),'jf6' => $this->input->post('jf6'),
        'jfen' => $this->input->post('jfen'), 'jfid' => $this->input->post('jfen'),
        'j_valid' => $this->input->post('j_valid'), 'id_job' => $id_job, 'j_pc' => $j_pc, 'id_user_p' => $this->session->userdata('id_user')
        );
        $this->db->insert('t_job', $data);
        return true;
    }
    function eanvacancy1($id_job,$j_pc){
        $data = array (
        'j_subject_en' => $this->input->post('j_subject_en'),'j_type_en' => $this->input->post('j_type_en'),'j_industry_en' => $this->input->post('j_industry_en'),
        'j_function_en' => $this->input->post('j_function_en'),'j_experience_en' => $this->input->post('j_experience_en'),'j_education_en' => $this->input->post('j_education_en'),
        'j_desc_en' => $this->input->post('j_desc_en'),'j_requirement_en' => $this->input->post('j_requirement_en'),'j_subject_id' => $this->input->post('j_subject_id'),
        'j_type_id' => $this->input->post('j_type_id'),'j_industry_id' => $this->input->post('j_industry_id'),'j_function_id' => $this->input->post('j_function_id'),
        'j_experience_id' => $this->input->post('j_experience_id'),'j_education_id' => $this->input->post('j_education_id'),'j_desc_id' => $this->input->post('j_desc_id'),
        'j_requirement_id' => $this->input->post('j_requirement_id'),'j_salary' => $this->input->post('j_salary'),'j_available' => $this->input->post('j_available'),
        'jfen' => $this->input->post('jfen'), 'jfid' => $this->input->post('jfid'),
        'j_valid' => $this->input->post('j_valid'),'j_pc' => $j_pc
        );
        $this->db->where('id_job', $id_job);
        $this->db->update('t_job', $data);
        return true;
    }
    function eanvacancy2($id_job){
        $data = array (
        'j_subject_en' => $this->input->post('j_subject_en'),'j_type_en' => $this->input->post('j_type_en'),'j_industry_en' => $this->input->post('j_industry_en'),
        'j_function_en' => $this->input->post('j_function_en'),'j_experience_en' => $this->input->post('j_experience_en'),'j_education_en' => $this->input->post('j_education_en'),
        'j_desc_en' => $this->input->post('j_desc_en'),'j_requirement_en' => $this->input->post('j_requirement_en'),'j_subject_id' => $this->input->post('j_subject_id'),
        'j_type_id' => $this->input->post('j_type_id'),'j_industry_id' => $this->input->post('j_industry_id'),'j_function_id' => $this->input->post('j_function_id'),
        'j_experience_id' => $this->input->post('j_experience_id'),'j_education_id' => $this->input->post('j_education_id'),'j_desc_id' => $this->input->post('j_desc_id'),
        'j_requirement_id' => $this->input->post('j_requirement_id'),'j_salary' => $this->input->post('j_salary'),'j_available' => $this->input->post('j_available'),
        'jfen' => $this->input->post('jfen'), 'jfid' => $this->input->post('jfid'),
        'j_valid' => $this->input->post('j_valid')
        );
        $this->db->where('id_job', $id_job);
        $this->db->update('t_job', $data);
        return true;
    }
    function get_itemsa($id_apply){
        $this->db->select('*');
        $this->db->from('t_apply');
        $this->db->where('id_apply', $id_apply);
        $query = $this->db->get();
        return $query->result();
    }
    function get_itemsb($id_job){
        $this->db->select('*');
        $this->db->from('t_job');
        $this->db->where('id_job', $id_job);
        $query = $this->db->get();
        return $query->result();
    }
    function get_itemsc($id_user){
        $this->db->select('*');
        $this->db->from('t_partner_d');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query->result();
    }
    function get_itemsd($id_file){
        $this->db->select('*');
        $this->db->from('t_user_d');
        $this->db->where('id_user', $id_file);
        $query = $this->db->get();
        return $query->result();
    }
    function get_itemse($id_job){
        $this->db->select('*');
        $this->db->from('t_apply');
        $this->db->where('id_job', $id_job);
        $query = $this->db->get();
        return $query->result();
    }
    function get_itemsf($id_user){
        $this->db->select('*');
        $this->db->from('t_partner_d');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query->result();
    }
}
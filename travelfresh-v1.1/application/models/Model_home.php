<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model 
{
    public function all_slider()
    {
        $query = $this->db->query("SELECT * FROM tbl_slider ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_service()
    {
        $query = $this->db->query("SELECT * FROM tbl_service ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_destination()
    {
        $query = $this->db->query("SELECT * FROM tbl_destination ORDER BY d_id ASC");
        return $query->result_array();
    }
    public function all_team_member()
    {
        $query = $this->db->query("SELECT * FROM tbl_team_member ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_testimonial()
    {
        $query = $this->db->query("SELECT * FROM tbl_testimonial ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_client()
    {
        $query = $this->db->query("SELECT * FROM tbl_client ORDER BY id ASC");
        return $query->result_array();
    }
}
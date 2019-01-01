<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin_model extends CI_MODEL {

    public function get_user_detail($user_email) {
        
        $user_detail = $this->db->select('*')
                            ->from ('tbl_user')
                            ->where ('user_email', $user_email)
                            ->get()
                            ->row();

        return $user_detail;
    }

    public function select_all_published_category() {

        $result = $this->db->select('*')
                        ->from('tbl_category')
                        ->where ('category_status', 1)
                        ->get()
                        ->result();

        return $result;
    }
}
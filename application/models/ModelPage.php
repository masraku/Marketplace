<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPage extends CI_Model {

    public function __construct()
    {
        parent ::__construct();
        $this->load->database();
    }
    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function get_all_users() {
        return $this->db->get('users')->result();
    }


    public function check_user($username, $password) {
        $this->db->where('username', $username);
        //$this->db->where('password', $password);
        $query = $this->db->get('users')->row();

        return $query; // Login gagal
    }

    public function check_password($user_id, $current_password) {
        $this->db->where('id', $user_id);
        $user = $this->db->get('users')->row();

        if ($user && password_verify($current_password, $user->password)) {
            return true;
        }
        return false;
    }

    public function update_password($user_id, $new_password) {
        $this->db->where('id', $user_id);
        $this->db->update('users', ['password' => $new_password]);
    }

    public function update_role($user_id, $role) {
        $this->db->where('id', $user_id);
        $this->db->update('users', ['role' => $role]);
    }
    
}

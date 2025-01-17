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
    public function get_user($user_id) {
        return $this->db->get_where('users', ['id' => $user_id])->row();
    }

    public function get_user_by_id($id) {
        $this->db->select('id, username, email, role');
        $this->db->from('users');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    

    public function update_user($user_id, $data) {
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }

    public function delete_user($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
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
    
    public function get_all_checkouts() {
        $this->db->select('checkouts.id, users.username, checkouts.total_amount, checkouts.created_at');
        $this->db->from('checkouts');
        $this->db->join('users', 'users.id = checkouts.user_id');
        $this->db->order_by('checkouts.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
}

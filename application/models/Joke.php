<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Joke extends CI_Model {

    public function get_all_jokelists() {
        return $this->db->query("SELECT * FROM jokes.joke_list")->result_array();
    }

    public function get_all_jokelists_by_count() {
        return $this->db->query("SELECT COUNT(*) FROM jokes.joke_list")->result_array();
    }

    public function get_jokelists_by_id($joke_id) {
        return $this->db->query("SELECT * FROM jokes.joke_list 
                                    WHERE id = ?", array($joke_id))->row_array();
    }

    public function delete_joke_by_id($joke_id) {
        $this->db->query("DELETE FROM jokes.joke_list
                                    WHERE id = ?", array($joke_id));
        return $this->db->affected_rows() > 0;
    }

    public function add_jokelists() {
        $query = "INSERT INTO jokes.joke_list(title, content, created_at, updated_at) VALUES (?,?,?,?)";
        $values = array([$this->input->post('joke_title')], [$this->input->post('joke_content')], date("Y-m-d h:i:s"), date("Y-m-d h:i:s"));
        return $this->db->query($query, $values);
    }

    public function validate() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("joke_title", "title" , "trim|required");
        $this->form_validation->set_rules("joke_content", "content", "trim|required");

        if($this->form_validation->run()) {
            return "valid";
        } else {
            return array(validation_errors());
        }
    }
}
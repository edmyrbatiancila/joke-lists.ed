<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jokes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Joke');
    }

    public function index() {
        $this->load->library('session');
        $jokes = $this->Joke->get_all_jokelists();
        $this->session->set_userdata('data', $jokes);

        //below is to render the count of Jokes that are currently active on the lists.
        $count = $this->Joke->get_all_jokelists_by_count();
        $this->session->set_userdata('count', $count);

        $this->load->view('jokes/jokes');
    }

    public function add() {
        if ($this->input->post('action') && $this->input->post('action') == 'add_joke') {
            $this->load->model('Joke');
            $jokes_title = array('jokes_title' => $this->input->post('joke_title'));
            $jokes_content = array('jokes_content' => $this->input->post('joke_content'));

            // Add above data to database "jokes.jokelist"
            $add_jokes = $this->Joke->add_jokelists($jokes_title, $jokes_content);
            $this->session->set_userdata('jokeslists', $add_jokes);

            if($this->session->userdata('jokeslists') === TRUE) {
                $this->session->set_flashdata('messages', "<p class='emphasis'>Jokes succcessfully added</p>");
                $this->session->set_userdata('return', "<a href='http://vhedmyr/jokes/'>Return</a>");
            }
        }
    }
    public function new() {
        $result = $this->Joke->validate();

        if($result === "valid") {
            $this->add();
        }
        else {
            $errors = array(validation_errors());
            $string = implode('</p>', $errors);
            $this->session->set_flashdata('errors', $string);
        }
        $this->load->view('jokes/new');
    }

    // Below is for rendering all jokes in the jokes.php
    public function joke($id) {
        $joke_id = $id;
        $joke_display = $this->Joke->get_jokelists_by_id($joke_id);

        if ($joke_display) {
            $display_joke = array(
                'id' => $joke_display['id'],
                'title' => $joke_display['title'],
                'content' => $joke_display['content']
            );
            $this->session->set_userdata('joke_id', $display_joke['id']);
        }

        $this->load->view('jokes/display', $display_joke);
    }

    public function delete($id) {
        // fetching the data first.
        $joke_id = $id;
        $joke_fetched = $this->Joke->get_jokelists_by_id($joke_id);

        if($id = $joke_fetched['id']) {
            $joke_fetched = array(
                'joke_id' => $joke_fetched['id']
            );
        }

        // If user pressed yes, below is what going to happen:
        if($this->input->post('yes') === 'yes') {
            // remove the fetched data.
            $joke_fetched = $this->Joke->delete_joke_by_id($joke_id);
            $this->session->set_flashdata('deleted_joke', "<p class='jokes_deleted'>Joke Successfully deleted</p>");
            redirect('/');
        } 
        if ($this->input->post('no')) {
            redirect('/');
        }
        
        $this->load->view('jokes/confirmation', $joke_fetched);
    }
}
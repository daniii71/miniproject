<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $data['students'] = $this->db->get('guru')->result_array();
        $this->load->view('guru', $data);
    }
}
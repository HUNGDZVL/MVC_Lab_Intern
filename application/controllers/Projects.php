<?php
class Projects extends CI_Controller {
    public function project1() {
        $this->load->view('project1_view');
    }

    public function project2() {
        $this->load->view('project2_view');
    }

    public function project3() {
        $this->load->view('project3_view');
    }
}
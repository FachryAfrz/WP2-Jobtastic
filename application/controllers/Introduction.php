<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Introduction extends CI_Controller
{

  public function index()
  {
    $this->load->view('templates/user/header');
    $this->load->view('introduction/index');
    $this->load->view('templates/user/footer');
  }
}

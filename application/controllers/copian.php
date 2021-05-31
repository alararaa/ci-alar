<?php

class Copian extends CI_Controller {
   public function index(){
      $data['judul'] ='Halaman Copian';
      $this->load->view('templates/header',$data);
      $this->load->view('keanggotaan/copian');
      $this->load->view('templates/footer');
   }
}
<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Get_barang extend CI ControLLer {
      public function __construct(){
      parent::__construct();
      $this->load->model('get_barang_model','gt_brng');
    }

      public function index()
        {
      $dt_barang-$this->gt_brng->get_barang();
      echo json_encode($dt_barang);
        }

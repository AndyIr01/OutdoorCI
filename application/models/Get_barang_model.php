<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_barang_model extends CI_Model {

  public function get_barang()
    {
    return $this->db->get('barang')->result();
    }
  }

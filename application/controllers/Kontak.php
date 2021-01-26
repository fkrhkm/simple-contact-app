<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'https://randomuser.me/api?results=5&exc=login%2Cregistered%2Cid%2Cnat&nat=us&noinfo';
use Restserver\Libraries\REST_Controller;

class Kontak extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $kontak = $this->db->get('name.first')->result();
        $this->response($kontak, 200);
    }


    //Masukan function selanjutnya disini
}
?>
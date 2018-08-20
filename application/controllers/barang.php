<?php
class Barang extends CI_Controller{
    
    
    function index()
    {
        $this->load->view('barang/lihat_data');
    }
}
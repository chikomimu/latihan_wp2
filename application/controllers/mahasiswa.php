<?php
class mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }

    function index()
    {
        $data['mahasiswa'] = $this->m_mahasiswa->tampilData()->result();
        //print_r($data['mahasiswa']);
        //exit();
        $this->load->view('mahasiswa', $data);
    }
}

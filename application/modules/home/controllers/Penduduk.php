<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_home();
  }


  public function index()
  {

    $this->load->model('home/Home_model', 'HM');

    $tombol  = [
      'add'     => 'home/penduduk/add',
      'edit'    => 'home/penduduk/edit/',
      'delete'  => 'home/penduduk/delete/'
    ];

    $klasifikasi = $this->Crud_model->listing('tbl_klasifikasi');

    $this->load->library('pagination');

    $config['base_url']     = base_url('home/penduduk/index/');
    $config['total_rows']   = count($this->Crud_model->listing('tbl_penduduk'));
    $config['per_page']     = 15;

    $from = $this->uri->segment(4);
    $this->pagination->initialize($config);
    $penduduk = $this->HM->listPenduduk($config['per_page'], $from);

    $data = [
      'penduduk'           => $penduduk,
      'klasifikasi' => $klasifikasi,
      'tombol'   => $tombol,
      'pagination'        => $this->pagination->create_links(),
      'content' => 'home/penduduk/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {

    $layanan = $this->Crud_model->listing('tbl_layanan');
    $data = [

      'layanan' => $layanan,
      'add'     => 'admin/layanan/add',
      'edit'    => 'admin/layanan/edit/',
      'delete'  => 'admin/layanan/delete/',
      'content' => 'admin/layanan/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }


  public function detail($id_layanan)
  {

    $layanan = $this->Crud_model->listingOne('tbl_layanan', 'id_layanan', $id_layanan);
    $data = [

      'layanan' => $layanan,
      'content' => 'admin/layanan/detail'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }


  function cetak($id_layanan)
  {
    $data['layanan'] = $this->Crud_model->listingOne('tbl_layanan', 'id_layanan', $id_layanan);
    $data['konfigurasi'] = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    $this->load->view('admin/layanan/cetak', $data, FALSE);
  }
}

<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Posyandu extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }


  public function index()
  {
    $berita = $this->Crud_model->listing('tbl_berita', '8');
    $kategori = $this->Crud_model->listing('tbl_kategori');
    $posyandu = $this->Crud_model->listing('tbl_posyandu');
    $data = [
      'posyandu'    => $posyandu,
      'berita'    => $berita,
      'kategori'    => $kategori,
      'content'   => 'home/posyandu/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function detail($id_posyandu)
  {

    // $date = date('Y-m-d');
    $posyandu = $this->Crud_model->listingOne('tbl_posyandu', 'id_posyandu', $id_posyandu);

    // if ($date > $posyandu->jadwal) {
    // } else {
    // }

    $kategori = $this->Crud_model->listing('tbl_kategori');
    $berita = $this->Crud_model->listing('tbl_berita', '8');
    $data = [
      'posyandu'    => $posyandu,
      'berita'    => $berita,
      'kategori'    => $kategori,
      'content'   => 'home/posyandu/detail'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {
    $tombol  = [
      'add'     => 'admin/penduduk/add',
      'edit'    => 'admin/penduduk/edit/',
      'delete'  => 'admin/penduduk/delete/'
    ];

    $penduduk = $this->Crud_model->listing('tbl_penduduk');
    $klasifikasi = $this->Crud_model->listing('tbl_klasifikasi');
    $data = [

      'penduduk' => $penduduk,
      'klasifikasi' => $klasifikasi,
      'tombol'   => $tombol,
      'content' => 'admin/penduduk/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');
    $i = $this->input;

    $lk = $i->post('lk');
    $pr = $i->post('pr');

    $data = [
      'id_penduduk'       => random_string(),
      'nama_klasifikasi'    => $i->post('nama_klasifikasi'),
      'lk'                => $lk,
      'pr'                => $pr,
      'total'             => $lk + $pr
    ];
    $this->Crud_model->add('tbl_penduduk', $data);
    $this->session->set_flashdata('msg', 'penduduk berhasil ditambah');
    redirect('admin/penduduk');
  }
  function edit($id_penduduk)
  {
    $i = $this->input;

    $lk = $i->post('lk');
    $pr = $i->post('pr');

    $i = $this->input;
    $data = [
      'nama_klasifikasi'    => $i->post('nama_klasifikasi'),
      'lk'                => $lk,
      'pr'                => $pr,
      'total'             => $lk + $pr
    ];
    $this->Crud_model->edit('tbl_penduduk', 'id_penduduk', $id_penduduk, $data);
    $this->session->set_flashdata('msg', 'penduduk berhasil diedit');
    redirect('admin/penduduk');
  }

  function delete($id_penduduk)
  {
    $this->Crud_model->delete('tbl_penduduk', 'id_penduduk', $id_penduduk);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/penduduk');
  }
}

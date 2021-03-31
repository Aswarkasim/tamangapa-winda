<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Posyandu extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {
    $tombol  = [
      'add'     => 'admin/posyandu/add',
      'edit'    => 'admin/posyandu/edit/',
      'delete'  => 'admin/posyandu/delete/'
    ];

    $posyandu = $this->Crud_model->listing('tbl_posyandu');
    $data = [

      'posyandu' => $posyandu,
      'tombol'   => $tombol,
      'content' => 'admin/posyandu/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');


    $i = $this->input;
    $data = [
      'id_posyandu' => random_string(),
      'jadwal'   => $i->post('jadwal'),
      'pelaksana'   => $i->post('pelaksana'),
      'pj'   => $i->post('pj'),
      'lokasi'   => $i->post('lokasi')
    ];
    $this->Crud_model->add('tbl_posyandu', $data);
    $this->session->set_flashdata('msg', 'posyandu berhasil ditambah');
    redirect('admin/posyandu');
  }
  function edit($id_posyandu)
  {

    $i = $this->input;
    $data = [
      'id_posyandu' => $id_posyandu,
      'jadwal'   => $i->post('jadwal'),
      'pelaksana'   => $i->post('pelaksana'),
      'pj'   => $i->post('pj'),
      'lokasi'   => $i->post('lokasi')
    ];
    $this->Crud_model->edit('tbl_posyandu', 'id_posyandu', $id_posyandu, $data);
    $this->session->set_flashdata('msg', 'posyandu berhasil diedit');
    redirect('admin/posyandu');
  }

  function delete($id_posyandu)
  {
    $this->Crud_model->delete('tbl_posyandu', 'id_posyandu', $id_posyandu);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/posyandu');
  }
}

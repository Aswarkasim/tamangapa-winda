<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Datapenduduk extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'AM');
  }


  public function index()
  {
    $datapenduduk = $this->Crud_model->listing('tbl_datapenduduk');
    $data = [
      'title'    => 'List Data Penduduk',
      'add'    => 'admin/datapenduduk/add',
      'edit'    => 'admin/datapenduduk/edit/',
      'datapenduduk'   => $datapenduduk,
      'content'  => 'admin/datapenduduk/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function detail($id_datapenduduk)
  {

    $datapenduduk = $this->Crud_model->listingOne('tbl_datapenduduk', 'id_datapenduduk', $id_datapenduduk);
    $data =
      [
        'data'   =>  $datapenduduk,
        'content'  => 'admin/datapenduduk/detail'
      ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function add()
  {

    $this->load->helper('string');


    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('namalengkap', 'Nama Lengkap', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['foto']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
          $data = [
            'title'    => 'Tambah Datapenduduk',
            'add'    => 'admin/datapenduduk/add',
            'back'    => 'admin/datapenduduk',
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/datapenduduk/add'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $data = [
            'id_datapenduduk'       => random_string(),
            'namalengkap'    => $i->post('namalengkap'),
            'no_kk'             => $i->post('no_kk'),
            'no_ktp'             => $i->post('no_ktp'),
            'tempat_lahir'             => $i->post('tempat_lahir'),
            'tanggal_lahir'             => $i->post('tanggal_lahir'),
            'alamat'             => $i->post('alamat'),
            'penghasilan'             => $i->post('penghasilan'),
            'foto'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->add('tbl_datapenduduk', $data);
          $this->session->set_flashdata('msg', 'Datapenduduk ditambahkan');
          redirect('admin/datapenduduk/detail/' . $data['id_datapenduduk']);
        }
      }
    }
    $data = [
      'title'    => 'Tambah Datapenduduk',
      'add'    => 'admin/datapenduduk/add',
      'back'    => 'admin/datapenduduk',
      'content'  => 'admin/datapenduduk/add'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function edit($id_datapenduduk)
  {

    $this->load->helper('string');

    $datapenduduk = $this->Crud_model->listingOne('tbl_datapenduduk', 'id_datapenduduk', $id_datapenduduk);
    $i = $this->input;
    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('namalengkap', 'Nama Lengkap', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['foto']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
          $data = [
            'title'    => 'Tambah Data Penduduk',
            'edit'    => 'admin/datapenduduk/edit/' . $id_datapenduduk,
            'back'    => 'admin/datapenduduk',
            'data'    => $datapenduduk,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/datapenduduk/add'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = ['uploads' => $this->upload->data()];

          if ($datapenduduk->foto != "") {
            unlink($datapenduduk->foto);
          }

          $data = [
            'id_datapenduduk'       => random_string(),
            'namalengkap'    => $i->post('namalengkap'),
            'no_kk'             => $i->post('no_kk'),
            'no_ktp'             => $i->post('no_ktp'),
            'tempat_lahir'             => $i->post('tempat_lahir'),
            'tanggal_lahir'             => $i->post('tanggal_lahir'),
            'alamat'             => $i->post('alamat'),
            'penghasilan'             => $i->post('penghasilan'),
            'foto'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->edit('tbl_datapenduduk', 'id_datapenduduk', $id_datapenduduk, $data);
          $this->session->set_flashdata('msg', 'Data penduduk diubah');
          redirect('admin/datapenduduk/detail/' . $data['slug']);
        }
      } else {
        $data = [
          'id_datapenduduk'       => $id_datapenduduk,
          'namalengkap'    => $i->post('namalengkap'),
          'no_kk'             => $i->post('no_kk'),
          'no_ktp'             => $i->post('no_ktp'),
          'tempat_lahir'             => $i->post('tempat_lahir'),
          'tanggal_lahir'             => $i->post('tanggal_lahir'),
          'alamat'             => $i->post('alamat'),
          'penghasilan'             => $i->post('penghasilan')
        ];
        $this->Crud_model->edit('tbl_datapenduduk', 'id_datapenduduk', $id_datapenduduk, $data);
        $this->session->set_flashdata('msg', 'Datapenduduk diubah');
        redirect('admin/datapenduduk/detail/' . $id_datapenduduk);
      }
    }
    $data = [
      'title'    => 'Edit Data Penduduk',
      'edit'    => 'admin/datapenduduk/edit/' . $id_datapenduduk,
      'back'    => 'admin/datapenduduk',
      'data'    => $datapenduduk,
      'content'  => 'admin/datapenduduk/add'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }



  function delete($id_datapenduduk)
  {
    $datapenduduk = $this->Crud_model->listingOne('tbl_datapenduduk', 'id_datapenduduk', $id_datapenduduk);
    if ($datapenduduk->foto != "") {
      unlink($datapenduduk->foto);
    }
    $this->Crud_model->delete('tbl_datapenduduk', 'id_datapenduduk', $id_datapenduduk);
    $this->session->set_flashdata('msg', 'Datapenduduk dihapus');
    redirect('admin/datapenduduk', 'refresh');
  }
}

<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();

    $this->load->model('admin/Admin_model', 'AM');

    $this->load->helper('string');
  }


  public function index($type)
  {

    $layanan = $this->AM->listLayanan($type);

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
    is_read('tbl_layanan', 'id_layanan', $id_layanan);

    $layanan = $this->Crud_model->listingOne('tbl_layanan', 'id_layanan', $id_layanan);

    $edit = '';
    switch ($layanan->type) {
      case "AK":
        $edit = 'admin/layanan/ak';
        break;
      case "KTP":
        $edit = 'admin/layanan/ktp';
        break;
      case "KK":
        $edit = 'admin/layanan/kk';
        break;
      case "SKTM":
        $edit = 'admin/layanan/sktm';
        break;
    }


    $data = [

      'layanan' => $layanan,
      'edit'    => $edit,
      'delete'  => 'admin/layanan/delete/',
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

  function ktp($id_layanan = null)
  {

    $id = '';
    if ($id_layanan == null) {
      $id = random_string();
    } else {
      $id = $id_layanan;
    }

    // print_r($id_layanan);
    // die;

    $i = $this->input;
    $data = [
      'id_layanan'        => $id,
      'no_surat'          => $i->post('no_surat'),
      'namalengkap'       => $i->post('namalengkap'),
      'tempat_lahir'      => $i->post('tempat_lahir'),
      'tanggal_lahir'     => $i->post('tanggal_lahir'),
      'pekerjaan'         => $i->post('pekerjaan'),
      'jenis_kelamin'     => $i->post('jenis_kelamin'),
      'agama'             => $i->post('agama'),
      'status_perkawinan' => $i->post('status_perkawinan'),
      'kewarganegaraan'   => $i->post('kewarganegaraan'),
      'alamat'            => $i->post('alamat'),
      'type'              => 'KTP',
      'is_read'         => 1,
    ];


    if ($id_layanan == null) {
      $this->Crud_model->add('tbl_layanan', $data);
    } else {
      $this->Crud_model->edit('tbl_layanan', 'id_layanan', $id_layanan, $data);
    }

    $this->session->set_flashdata('msg', 'Data berhasil dikirim. Silakan ke kantor desa untuk mengambil surat');
    redirect('admin/layanan/detail/' . $data['id_layanan']);
  }

  function kk($id_layanan = null)
  {

    $id = '';
    if ($id_layanan == null) {
      $id = random_string();
    } else {
      $id = $id_layanan;
    }


    $i = $this->input;
    $data = [
      'id_layanan'          => $id,
      'no_surat'            => $i->post('no_surat'),
      'namalengkap'         => $i->post('namalengkap'),
      'tempat_lahir'        => $i->post('tempat_lahir'),
      'tanggal_lahir'       => $i->post('tanggal_lahir'),
      'pekerjaan'           => $i->post('pekerjaan'),
      'jenis_kelamin'       => $i->post('jenis_kelamin'),
      'agama'               => $i->post('agama'),
      'status_perkawinan'   => $i->post('status_perkawinan'),
      'kewarganegaraan'     => $i->post('kewarganegaraan'),
      'alamat'              => $i->post('alamat'),
      'type'                => 'KK',
      'is_read'         => 1,
    ];
    if ($id_layanan == null) {
      $this->Crud_model->add('tbl_layanan', $data);
    } else {
      $this->Crud_model->edit('tbl_layanan', 'id_layanan', $id_layanan, $data);
    }
    $this->session->set_flashdata('msg', 'Data berhasil dikirim. Silakan ke kantor desa untuk mengambil surat');
    redirect('admin/layanan/detail/' . $data['id_layanan']);
  }


  function ak($id_layanan = null)
  {
    $id = '';
    if ($id_layanan == null) {
      $id = random_string();
    } else {
      $id = $id_layanan;
    }


    $i = $this->input;
    $data = [
      'id_layanan'      => $id,
      'no_surat'        => $i->post('no_surat'),
      'namalengkap'     => $i->post('namalengkap'),
      'tempat_lahir'    => $i->post('tempat_lahir'),
      'tanggal_lahir'   => $i->post('tanggal_lahir'),
      'pekerjaan'       => $i->post('pekerjaan'),
      'jenis_kelamin'   => $i->post('jenis_kelamin'),
      'anak_ke'         => $i->post('anak_ke'),
      'nama_ayah'       => $i->post('nama_ayah'),
      'nama_ibu'        => $i->post('nama_ibu'),
      'alamat'          => $i->post('alamat'),
      'type'            => 'AK',
      'is_read'         => 1,
    ];
    if ($id_layanan == null) {
      $this->Crud_model->add('tbl_layanan', $data);
    } else {
      $this->Crud_model->edit('tbl_layanan', 'id_layanan', $id_layanan, $data);
    }

    $this->session->set_flashdata('msg', 'Data berhasil dikirim. Silakan ke kantor desa untuk mengambil surat');
    redirect('admin/layanan/detail/' . $data['id_layanan']);
  }

  function sktm($id_layanan = null)
  {

    $id = '';
    if ($id_layanan == null) {
      $id = random_string();
    } else {
      $id = $id_layanan;
    }


    $i = $this->input;
    $data = [
      'id_layanan'      => $id,
      'no_surat'        => $i->post('no_surat'),
      'namalengkap'     => $i->post('namalengkap'),
      'tempat_lahir'    => $i->post('tempat_lahir'),
      'tanggal_lahir'   => $i->post('tanggal_lahir'),
      'pekerjaan'       => $i->post('pekerjaan'),
      'jenis_kelamin'   => $i->post('jenis_kelamin'),
      'alamat'          => $i->post('alamat'),

      'nama_ayah'       => $i->post('nama_ayah'),
      'umur_ayah'       => $i->post('umur_ayah'),
      'pekerjaan_ayah'  => $i->post('pekerjaan_ayah'),
      'alamat_ayah'     => $i->post('alamat_ayah'),

      'nama_ibu'        => $i->post('nama_ibu'),
      'umur_ibu'        => $i->post('umur_ibu'),
      'pekerjaan_ibu'   => $i->post('pekerjaan_ibu'),
      'alamat_ibu'      => $i->post('alamat_ibu'),

      'type'            => 'SKTM',
      'is_read'         => 1,
    ];

    if ($id_layanan == null) {
      $this->Crud_model->add('tbl_layanan', $data);
    } else {
      $this->Crud_model->edit('tbl_layanan', 'id_layanan', $id_layanan, $data);
    }
    $this->session->set_flashdata('msg', 'Data berhasil dikirim. Silakan ke kantor desa untuk mengambil surat');
    redirect('admin/layanan/detail/' . $data['id_layanan']);
  }

  function add()
  {


    $type = $this->input->post('surat');

    $add = '';
    switch ($type) {
      case "AK":
        $add = 'admin/layanan/ak';
        break;
      case "KTP":
        $add = 'admin/layanan/ktp';
        break;
      case "KK":
        $add = 'admin/layanan/kk';
        break;
      case "SKTM":
        $add = 'admin/layanan/sktm';
        break;
    }

    $data = [
      'title'     => 'Tambah Admin',
      'type'      => $type,
      'add'       => $add,
      'back'      => 'admin/admin',
      'content'   => 'admin/layanan/add/add'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function delete($id_layanan)
  {
    $this->Crud_model->delete('tbl_layanan', 'id_layanan', $id_layanan);
    $this->session->set_flashdata('msg', 'Saran dihapus');
    redirect('admin/layanan', 'refresh');
  }

  function download($id_layanan)
  {
    $layanan = $this->Crud_model->listingOne('tbl_layanan', 'id_layanan', $id_layanan);
    $this->load->helper('download');
    force_download($layanan->lampiran, null);
  }
}

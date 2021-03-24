<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

  public function index()
  {
    $kategori = $this->Crud_model->listing('tbl_kategori', '5');
    $data = [
      'kategori'  => $kategori,
      'content'  => 'home/layanan/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function ktp()
  {

    $this->load->helper('string');

    $required = '%s Tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('namalengkap', 'Nama Lengkap', 'required', ['required' => $required]);
    $valid->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required' => $required]);
    $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => $required]);
    $valid->set_rules('pekerjaan', 'Pekerjaan', 'required', ['required' => $required]);
    $valid->set_rules('agama', 'Agama', 'required', ['required' => $required]);
    $valid->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required', ['required' => $required]);
    $valid->set_rules('alamat', 'Alamat', 'required', ['required' => $required]);


    if ($valid->run() === FALSE) {
      $data = [
        'content'  => 'home/layanan/ktp'
      ];
      $this->load->view('home/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_layanan'    => random_string(),
        'namalengkap'   => $i->post('namalengkap'),
        'tempat_lahir'   => $i->post('tempat_lahir'),
        'tanggal_lahir'   => $i->post('tanggal_lahir'),
        'pekerjaan'   => $i->post('pekerjaan'),
        'jenis_kelamin'   => $i->post('jenis_kelamin'),
        'agama'   => $i->post('agama'),
        'status_perkawinan'   => $i->post('status_perkawinan'),
        'kewarganegaraan'   => $i->post('kewarganegaraan'),
        'alamat'   => $i->post('alamat'),
        'type'    => 'KTP'
      ];
      $this->Crud_model->add('tbl_layanan', $data);
      $this->session->set_flashdata('msg', 'Data berhasil dikirim. Silakan ke kantor desa untuk mengambil surat');
      redirect('home/layanan/ktp');
    }

    $data = [
      'content'  => 'home/layanan/ktp'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function kk()
  {

    $this->load->helper('string');

    $required = '%s Tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('namalengkap', 'Nama Lengkap', 'required', ['required' => $required]);
    $valid->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required' => $required]);
    $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => $required]);
    $valid->set_rules('pekerjaan', 'Pekerjaan', 'required', ['required' => $required]);
    $valid->set_rules('agama', 'Agama', 'required', ['required' => $required]);
    $valid->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required', ['required' => $required]);
    $valid->set_rules('alamat', 'Alamat', 'required', ['required' => $required]);


    if ($valid->run() === FALSE) {
      $data = [
        'content'  => 'home/layanan/kk'
      ];
      $this->load->view('home/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_layanan'    => random_string(),
        'namalengkap'   => $i->post('namalengkap'),
        'tempat_lahir'   => $i->post('tempat_lahir'),
        'tanggal_lahir'   => $i->post('tanggal_lahir'),
        'pekerjaan'   => $i->post('pekerjaan'),
        'jenis_kelamin'   => $i->post('jenis_kelamin'),
        'agama'   => $i->post('agama'),
        'status_perkawinan'   => $i->post('status_perkawinan'),
        'kewarganegaraan'   => $i->post('kewarganegaraan'),
        'alamat'   => $i->post('alamat'),
        'type'    => 'KK'
      ];
      $this->Crud_model->add('tbl_layanan', $data);
      $this->session->set_flashdata('msg', 'Data berhasil dikirim. Silakan ke kantor desa untuk mengambil surat');
      redirect('home/layanan/kk');
    }

    $data = [
      'content'  => 'home/layanan/kk'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }


  function ak()
  {

    $this->load->helper('string');

    $required = '%s Tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('namalengkap', 'Nama Lengkap', 'required', ['required' => $required]);
    $valid->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required' => $required]);
    $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => $required]);
    $valid->set_rules('pekerjaan', 'Pekerjaan', 'required', ['required' => $required]);
    $valid->set_rules('nama_ayah', 'Nama Ayah', 'required', ['required' => $required]);
    $valid->set_rules('nama_ibu', 'Nama Ibu', 'required', ['required' => $required]);
    $valid->set_rules('alamat', 'Alamat', 'required', ['required' => $required]);


    if ($valid->run() === FALSE) {
      $data = [
        'content'  => 'home/layanan/ak'
      ];
      $this->load->view('home/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_layanan'    => random_string(),
        'namalengkap'   => $i->post('namalengkap'),
        'tempat_lahir'   => $i->post('tempat_lahir'),
        'tanggal_lahir'   => $i->post('tanggal_lahir'),
        'pekerjaan'   => $i->post('pekerjaan'),
        'jenis_kelamin'   => $i->post('jenis_kelamin'),
        'anak_ke'   => $i->post('anak_ke'),
        'nama_ayah'   => $i->post('nama_ayah'),
        'nama_ibu'   => $i->post('nama_ibu'),
        'alamat'   => $i->post('alamat'),
        'type'    => 'AK'
      ];
      $this->Crud_model->add('tbl_layanan', $data);
      $this->session->set_flashdata('msg', 'Data berhasil dikirim. Silakan ke kantor desa untuk mengambil surat');
      redirect('home/layanan/ak');
    }

    $data = [
      'content'  => 'home/layanan/ak'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function sktm()
  {

    $this->load->helper('string');

    $required = '%s Tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('namalengkap', 'Nama Lengkap', 'required', ['required' => $required]);
    $valid->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required' => $required]);
    $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => $required]);
    $valid->set_rules('pekerjaan', 'Pekerjaan', 'required', ['required' => $required]);
    $valid->set_rules('nama_ayah', 'Nama Ayah', 'required', ['required' => $required]);
    $valid->set_rules('nama_ibu', 'Nama Ibu', 'required', ['required' => $required]);
    $valid->set_rules('alamat', 'Alamat', 'required', ['required' => $required]);


    if ($valid->run() === FALSE) {
      $data = [
        'content'  => 'home/layanan/sktm'
      ];
      $this->load->view('home/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_layanan'    => random_string(),
        'namalengkap'   => $i->post('namalengkap'),
        'tempat_lahir'   => $i->post('tempat_lahir'),
        'tanggal_lahir'   => $i->post('tanggal_lahir'),
        'pekerjaan'   => $i->post('pekerjaan'),
        'jenis_kelamin'   => $i->post('jenis_kelamin'),
        'alamat'   => $i->post('alamat'),

        'nama_ayah'   => $i->post('nama_ayah'),
        'umur_ayah'   => $i->post('umur_ayah'),
        'pekerjaan_ayah'   => $i->post('pekerjaan_ayah'),
        'alamat_ayah'   => $i->post('alamat_ayah'),

        'nama_ibu'   => $i->post('nama_ibu'),
        'umur_ibu'   => $i->post('umur_ibu'),
        'pekerjaan_ibu'   => $i->post('pekerjaan_ibu'),
        'alamat_ibu'   => $i->post('alamat_ibu'),

        'type'    => 'SKTM'
      ];
      $this->Crud_model->add('tbl_layanan', $data);
      $this->session->set_flashdata('msg', 'Data berhasil dikirim. Silakan ke kantor desa untuk mengambil surat');
      redirect('home/layanan/sktm');
    }

    $data = [
      'content'  => 'home/layanan/sktm'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */
<?php
class Siswa extends CI_Controller

{
 public function index()
 {
 $this->load->view('form');
 }
 
 public function cetak()
 {
 $data = [
 'kode' => $this->input->post('kode'),
 'nis' => $this->input->post('nis'),
 'kelas' => $this->input->post('kelas'),
 'tempat_lahir' => $this->input->post('tempat_lahir'),
 'tanggal_lahir' => $this->input->post('tanggal_lahir')
 'alamat' => $this->input->post('alamat')
 'jenis_kelamin' => $this->input->post('jenis_kelamin')
 'agama' => $this->input->post('agama')
 ];
 $this->load->view('view-data-matakuliah', $data);
 }
        }
    
<?php
class Matakuliah extends CI_Controller

{
 public function index()
 {
 $this->load->view('view-form-matakuliah');
 }
 
 public function cetak()
 {
 $data = [
 'nama' => $this->input->post('nama'),
 'nama' => $this->input->post('nama'),
 'tgl' => $this->input->post('tgl'),
 'gender' => $this->input->post('gender'),
 'sks' => $this->input->post('sks')
 ];
 $this->load->view('view-data-matakuliah', $data);
 }
}

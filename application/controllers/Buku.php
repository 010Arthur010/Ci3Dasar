<?php
class Buku extends CI_Controller
{
       public function __construct()
       {
              parent::__construct();
              $this->load->model('M_buku');
       }

       public function index()
       {
              $this->select();
       }
       public function select()
       {
              $data['buku'] = "Data Buku Perpustakaan";
              $data['judul'] = $this->M_buku->Tampil();
              $this->load->view('template/header', $data);
              $this->load->view('buku/view_data', $data);
              $this->load->view('template/footer');
       }

       public function tambah()
       {
              $data['buku'] = " Tambah Data Buku";
              $this->load->view('template/header', $data);
              $this->load->view('buku/form_tambah');
              $this->load->view('template/footer');
       }
       public function insert()
       {
              $judul = $this->input->post('judul');
              $penerbit = $this->input->post('penerbit');
              $pengarang = $this->input->post('pengarang');
              // echo $anggota.$alamat;
              $this->M_buku->save($judul, $penerbit, $pengarang);
              redirect('buku');
       }
       public function get_edit()
       {
              $id = $this->uri->segment(3);
              //echo $id;
              $hasil = $this->M_buku->pilih_anggota($id);
              $i = $hasil->row_array();
              $data = array(
                     'judul' => $i['judul'],
                     'penerbit' => $i['penerbit'],
                     'pengarang' => $i['pengarang'],
                     'id' => $i['id']
              );

              $data['buku'] = " Ubah Data Buku ";
              $this->load->view('template/header', $data);
              $this->load->view('buku/form_ubah', $data);
              $this->load->view('template/footer');
       }

       public function update()
       {
              $id = $this->input->post('id');
              $judul = $this->input->post('judul');
              $penerbit = $this->input->post('penerbit');
              $pengarang = $this->input->post('pengarang');
              //echo "$id . $alamat . $anggota";

              $this->M_buku->edit($id, $judul, $penerbit, $pengarang);
              redirect('buku');
       }

       public function hapus()
       {
              $id = $this->uri->segment(3);
              //echo "hapus" . $id;
              $this->M_buku->delete($id);
              redirect('buku');
       }
       
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tamu extends CI_Controller
{

    public function welcome()
    {
        $tipe = $this->db->get('tipe_room')->result();
        $data = [];
        foreach ($tipe as $key => $kamar) {
            $this->db->where('id_tiperoom', $kamar->id);
            $fasilitas = $this->db->get('fasilitas_kamar')->result();
            $data[$key] = array('info_kamar' => $kamar, 'fasilitas_kamar' => $fasilitas);
        }
        $this->load->view('Tamu/welcome', ['data' => $data]);
    }

    public function kamar()
    {
        $tipe = $this->db->get('tipe_room')->result();
        $data = [];
        foreach ($tipe as $key => $kamar) {
            $this->db->where('id_tiperoom', $kamar->id);
            $fasilitas = $this->db->get('fasilitas_kamar')->result();
            $data[$key] = array('info_kamar' => $kamar, 'fasilitas_kamar' => $fasilitas);
        }
        $this->load->view('Tamu/kamar', ['data' => $data]);
    }

    public function detailkamar()
    {
        $this->db->where('id', $_GET['id']);
        $tipe = $this->db->get('tipe_room')->result();
        $data = [];
        foreach ($tipe as $key => $kamar) {
            $this->db->where('id_tiperoom', $kamar->id);
            $fasilitas = $this->db->get('fasilitas_kamar')->result();
            $data[$key] = array('info_kamar' => $kamar, 'fasilitas_kamar' => $fasilitas);
        }
        $this->load->view('Tamu/detail', ['data' => $data]);
    }

    public function fasilitas()
    {
        $this->load->view('Tamu/fasilitas');
    }

    public function pesan()
    {
        $data['user'] = $_SESSION['user'];

        $this->db->where('id', $_GET['id']);
        $tipe = $this->db->get('tipe_room')->result();
        $datakamar = [];
        foreach ($tipe as $key => $kamar) {
            $this->db->where('id_tiperoom', $kamar->id);
            $fasilitas = $this->db->get('fasilitas_kamar')->result();
            $datakamar[$key] = array('info_kamar' => $kamar, 'fasilitas_kamar' => $fasilitas);
        }
        $data['kamar'] = $datakamar;
        $this->load->view('Tamu/pesan', ['data' => $data]);
    }
    
    public function prosespesan()
    {
        $data = array(
            'nama_pemesan' => $_POST['nama_pemesan'],
            'email' => $_POST['email'],
            'no_hp' => $_POST['no_hp'],
            'nama_tamu' => $_POST['nama_tamu'],
            'id_room' =>  $_POST['id_room'],
            'tgl_checkin' =>  $_POST['tgl_checkin'],
            'tgl_checkout' =>  $_POST['tgl_checkout'],
            'jml_kamar' =>  $_POST['jml_kamar'],
            'harga' =>  300 * $_POST['jml_kamar'],
            'metode' =>  $_POST['metode'],
            'payend' =>  0,
            'nomor_kamar' =>  0,
            'refpb' =>  date('mdy') . $_POST['metode'] . date('His'),
        );
        $this->db->insert('pemesanan', $data);
    }
}
?>
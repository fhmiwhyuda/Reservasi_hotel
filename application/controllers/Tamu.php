<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {

    public function Fasilitas_Hotel()
    {
        $tipe = $this->db->get('tipe_room')->result();
        $data=[];
        foreach ($tipe as $key => $kamar) {
            $this->db->where('id_tiperoom', $kamar->id);
            $fasilitas = $this->db->get('f_kamar')->result();
            $data[$key]=array('info_kamar' => $kamar, 'f_kamar' => $fasilitas );
        }
        $this->load->view('Tamu/fasilitaskamar',['data' => $data]);
    }
}

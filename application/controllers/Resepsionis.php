<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resepsionis extends CI_Controller
{
    public function welcome()
    {
        $this->load->view('Resepsionis/welcome');
    }

    public function logout()
    {
        session_destroy();
        $this->load->view('Auth/login');
    }

    public function update()
    {
        $data = array(
            'status' => $_POST['update'],
        );
        
        $this->db->where('id', $_GET['id']);
        $this->db->update('pemesanan', $data);

        redirect('Resepsionis/welcome');
    }
}

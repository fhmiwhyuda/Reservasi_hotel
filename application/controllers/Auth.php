<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->check();
    }
    public function check()
    {
        if (!empty($_SESSION['user'])) {
            $this->leveling();
        } else {
        }
    }
    public function register()
    {
        $this->load->view('Auth/register');
    }
    public function addusers()
    {
        $data = $_POST;
        $data += array('level' => 'tamu');
        $this->db->insert('users', $data);

        redirect('Auth/login');
    }
    public function login()
    {
        $this->load->view('Auth/Login');
    }
    public function checkusers()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $login = $this->db->get('users')->result();
        if (empty($login)) {
            redirect('Tamu/Login');
        }
        $_SESSION['user'] = $login[0];
        $this->leveling();
    }
    public function leveling()
    {
        if ($_SESSION['user']->level == "tamu") {
            redirect('Tamu/welcome');
        }
        if ($_SESSION['user']->level == "resepsionis") {
            redirect('Resepsionis/welcome');
        }
        if ($_SESSION['user']->level == "admin") {
            redirect('Admin/welcome');
        }
    }
}

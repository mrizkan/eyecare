<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('index');
    }

    public function about_us()
    {
        $this->load->view('about_us');
    }

    public function product()
    {
        $this->load->view('product');
    }

    public function detail()
    {
        $this->load->view('detail');
    }

    public function detail1()
    {
        $this->load->view('detail1');
    }

    public function detail2()
    {
        $this->load->view('detail2');
    }

    public function services()
    {
        $this->load->view('services');
    }

    public function contact_us()
    {
        $this->load->view('contact_us');
    }

    public function events()
    {
        $this->load->view('events');
    }

    public function gellery()
    {
        $this->load->view('gellery');
    }


}

<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('m_data');
  }
  public function index()
  {
    $data['judul']='Halaman';
    $this->load->view('view_header',$data);
    $this->load->view('view_index',$data);
    $this->load->view('footer',$data);
  }
  public function blog()
  {
    $data['judul']='blog';
    $this->load->view('view_header',$data);
    $this->load->view('view_blog',$data);
    $this->load->view('footer',$data);
  }
  public function home()
  {
    $data['judul']='home';
    $this->load->view('view_header',$data);
    $this->load->view('view_home',$data);
    $this->load->view('footer',$data);
  }
  public function user()
  {
    //$data['user']=$this->m_data->ambil_data()->result();
    $data=array(
      'user'=>$this->m_data->ambil_data()->result(),
      'judul'=>'daftar user'
    );
    
    $this->load->view('view_header',$data);
    $this->load->view('view_user',$data);
    $this->load->view('footer',$data);
  }
}
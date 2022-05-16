<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = "Home";
        $data['nama'] = $this->model('User_model')->getUser(); //memnanggi kelas model dan melakukan instansiasi
        $this->view('templates/header',$data);
        $this->view('home/index', $data); //menampilkan data dari model bkn url
        $this->view('templates/footer');
         
    }
}
<?php

class Home extends {
    public function index(){
        echo 'home/index';
    }

    public function index() {
        $data['judul'] = "Home";
        $this->view('home/index');
}
?>
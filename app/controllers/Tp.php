<?php

class Tp extends Controller
{
    public function index()
    {
        $data['judul'] = "Teknik Pengelasan";

        $this->view('templates/header', $data);
        $this->view('Tp/index', $data);
        $this->view('templates/footer');
    }
}

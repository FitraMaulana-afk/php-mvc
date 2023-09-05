<?php

class Rpl extends Controller
{
    public function index()
    {
        $data['judul'] = "Rekayasa Perangkat Lunak";

        $this->view('templates/header', $data);
        $this->view('Rpl/index', $data);
        $this->view('templates/footer');
    }
}

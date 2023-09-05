<?php

class Akutansi extends Controller
{
    public function index()
    {
        $data['judul'] = "Akutansi";

        $this->view('templates/header', $data);
        $this->view('Akutansi/index', $data);
        $this->view('templates/footer');
    }
}

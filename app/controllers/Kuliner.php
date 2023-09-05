<?php

class Kuliner extends Controller
{
    public function index()
    {
        $data['judul'] = "Kuliner";

        $this->view('templates/header', $data);
        $this->view('Kuliner/index', $data);
        $this->view('templates/footer');
    }
}

<?php

class Tkp extends Controller
{
    public function index()
    {
        $data['judul'] = "Teknik Konstruksi dan Perumahan";

        $this->view('templates/header', $data);
        $this->view('Tkp/index', $data);
        $this->view('templates/footer');
    }
}

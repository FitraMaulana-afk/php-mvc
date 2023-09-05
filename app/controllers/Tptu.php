<?php

class Tptu extends Controller
{
    public function index()
    {
        $data['judul'] = "Teknik Pemanasan, Tata Udara dan Pendingin";

        $this->view('templates/header', $data);
        $this->view('Tptu/index', $data);
        $this->view('templates/footer');
    }
}

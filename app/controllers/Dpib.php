<?php

class Dpib extends Controller
{
    public function index()
    {
        $data['judul'] = "Design Permodelan dan
        Iformasi Bangunan";

        $this->view('templates/header', $data);
        $this->view('Dpib/index', $data);
        $this->view('templates/footer');
    }
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
    <script src="<?= BASE_URL; ?>/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
    <style>

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <div class="py-1 text-white" style="background-color: #00dfa2;">
        <div class="container d-flex justify-content-between align-items-center">
            <div>

            </div>
            <div class="d-flex align-items-center " style="font-size: small;">

                Jl. Ronggowarsito Gg sidomukti No. 1 , Trenggalek, Jawa Timur, Indonesia

            </div>
        </div>
    </div>
    <div class="container py-2" style="width: 100%;">
        <div class="d-flex justify-content-between align-items-center " style="width: 100%; ">
            <div class="d-flex ms-3 align-items-center">
                <img src="<?= BASE_URL; ?>/img/icon.png" alt="" style="height: 70px;" srcset="">
                <div class="ms-3 mt-3">
                    <h3 class="fw-bold" style="margin-bottom: -2px;">SMK Negeri 2 Trenggalek </h3>
                    <p class="" style="font-size: medium; color: gray;">Sekolah Menengah Kejuruan Negeri</p>
                </div>
            </div>
            <div>
                <div class="d-flex mt-2" style="margin-bottom: -12px;">
                    <i class="fa-solid fa-phone" style="margin-top: 5px;"></i>
                    <p class="mx-2">0355 796436</p>
                </div>
                <div class="d-flex">
                    <i class="fa-solid fa-envelope " style="margin-top: 6px;"></i>
                    <p class="mx-2">smkduatrenggalek@yahoo.co.id</p>
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container px-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="<?= BASE_URL; ?>/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL; ?>/datasiswa">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL; ?>/dataguru">Data Guru</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kompetisi Keahlian
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/kuliner">Kuliner</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/dpib">Design Permodelan dan
                                    Iformasi Bangunan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/rpl">Rekayasa Perangkat Lunak</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/tptu">Teknik Pemanasan ,Tata Udara
                                    Dan Pendingin</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/akutansi">Akutansi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/tkp">Teknik Konstruksi dan
                                    Perumahan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/tp">Teknik Pengelasan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL; ?>/user/profile">About Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
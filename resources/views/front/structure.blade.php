@extends('front.layouts.app') @section('title')
    IOGU
@endsection
@section('section')
    <header id="header">
        <div class="overlay">
            <h1>Uniwersitetiň gurluşy</h1>
        </div>
    </header>

    <section style="height: 100%; position: relative;">
        <div>
            <img src="./images/uniwer_gurlusy_image.jpeg" alt="" width="100%" height="100%" style="overflow: hidden;">
        </div>
    </section>

    <section>
        <center>
            <h1>Bolumler</h1>
        </center>
        <div class="d-flex justify-content-center align-items-center" style="flex-direction: row; flex-wrap: wrap;;">
            <div class="container flex-container">
                <img src="./images/bolum1.png" alt="" class="img-fluid">
                <div class="text-button">
                    <label class="text">Dolandyrys hojalyk mudirligi</label>
                    <a href="" class="btn btn-primary">Ginisleyin</a>
                </div>
            </div>
            <div class="container flex-container">
                <img src="./images/bolum2.jpeg" alt="" class="img-fluid">
                <div class="text-button">
                    <label class="text">Dolandyrys hojalyk mudirligi</label>
                    <a href="" class="btn btn-primary">Ginisleyin</a>
                </div>
            </div>
            <div class="container flex-container">
                <img src="./images/bolum1.png" alt="" class="img-fluid">
                <div class="text-button">
                    <label class="text">Dolandyrys hojalyk mudirligi</label>
                    <a href="" class="btn btn-primary">Ginisleyin</a>
                </div>
            </div>
            <div class="container flex-container">
                <img src="./images/bolum2.jpeg" alt="" class="img-fluid">
                <div class="text-button">
                    <label class="text">Dolandyrys hojalyk mudirligi</label>
                    <a href="" class="btn btn-primary">Ginisleyin</a>
                </div>
            </div>
            <div class="container flex-container">
                <img src="./images/bolum1.png" alt="" class="img-fluid">
                <div class="text-button">
                    <label class="text">Dolandyrys hojalyk mudirligi</label>
                    <a href="" class="btn btn-primary">Ginisleyin</a>
                </div>
            </div>
            <div class="container flex-container">
                <img src="./images/bolum2.jpeg" alt="" class="img-fluid">
                <div class="text-button">
                    <label class="text">Dolandyrys hojalyk mudirligi</label>
                    <a href="" class="btn btn-primary">Ginisleyin</a>
                </div>
            </div>
            <div class="container flex-container">
                <img src="./images/bolum1.png" alt="" class="img-fluid">
                <div class="text-button">
                    <label class="text">Dolandyrys hojalyk mudirligi</label>
                    <a href="" class="btn btn-primary">Ginisleyin</a>
                </div>
            </div>
            <div class="container flex-container">
                <img src="./images/bolum2.jpeg" alt="" class="img-fluid">
                <div class="text-button">
                    <label class="text">Dolandyrys hojalyk mudirligi</label>
                    <a href="" class="btn btn-primary">Ginisleyin</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 position-relative">
        <!-- Section Title -->
        <h2 class="text-center text-success fw-bold mb-4">Tazelikler</h2>

        <!-- Filter Buttons -->
        <div class="filter-buttons">
            <button class="btn btn-outline-success me-2">Ählisi</button>
            <button class="btn btn-outline-success">Ählisi</button>
        </div>

        <!-- Cards -->
        <div class="row mt-4">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card position-relative">
                    <img src="./images/news1.png" class="card-img-top" alt="...">
                    <button class="heart-btn text-white border-0"><i class="bi bi-heart"></i></button>
                    <div class="card-footer">
                        Virtual Reality Training Simulations
                        <a href="#" class="btn btn-primary btn-sm rounded-circle"><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card position-relative">
                    <img src="./images/news2.jpg" class="card-img-top" alt="...">
                    <button class="heart-btn text-white border-0"><i class="bi bi-heart"></i></button>
                    <div class="card-footer">
                        Natural Language Processing Chatbots
                        <a href="#" class="btn btn-primary btn-sm rounded-circle"><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card position-relative">
                    <img src="./images/kitapgana.jpeg" class="card-img-top" alt="...">
                    <button class="heart-btn text-white border-0"><i class="bi bi-heart"></i></button>
                    <div class="card-footer">
                        Cybersecurity Incident Response Platform
                        <a href="#" class="btn btn-primary btn-sm rounded-circle"><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

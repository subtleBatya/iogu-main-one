@extends('front.layouts.app') @section('title')
    IOGU
@endsection
@section('section')
    <header id="header">
        <div class="overlay">
            <h1>Bilim edarasy barada maglumat</h1>
        </div>
    </header>


    <section id="main-information">
        <center>
            <h1>Esasy maglumatlar</h1>
        </center>
        <p class="text">Uniwersitetin ady</p>
        <ul>
            <li>Doly ady: Yagsygeldi Kakayew adyndaky Halkara <br> nebit we gaz uniwersiteti</li>
            <li>Gysgaldylan ady: HNGU</li>
            <li>Inlis dilinde ady: Yagshygeldi Kakayew International oil and gas university</li>
            <li>Inlis dilinde gysgaldylan ady: IOGU</li>
        </ul>
        <p class="text">Doredilen senesi</p>
        <ul>
            <li>2012 yylyn 25-nji mayy</li>
            <li>Salgysy: 744036, Turkmenistan, Ashgabat s, Arcabil sayoly</li>
        </ul>
        <p class="text">Habarlaşmak ucin maglumatlar</p>
        <ul>
            <li>Kabulhana tel: (+993 12) 39-13-00, 39-13-01</li>
            <li>Faks: (+993 12) 48-97-29, 39-14-00</li>
            <li>Email: iuog@sanly.tm</li>
            <li>Web sayty: iogu.edu.tm</li>
        </ul>
        <p class="text">Talyplar ucin 2023-2024-nji okuw yyly ucin toleg bank rekwiziti</p>
        <ul>
            <li>S/b 104111000120;</li>
            <li>H/b 23201934150643400209000</li>
            <li>“Türkmenistan” DTB Aşgabat ş.;</li>
            <li>MFO 390101506;</li>
            <li>K/h 21101934110100900009000</li>
        </ul>
        <p class="text">Okuw tolegi -7820.00 manat</p>

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

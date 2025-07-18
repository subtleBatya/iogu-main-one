@extends('front.layouts.app') @section('title') IOGU @endsection
@section('section')
<header id="header">
    <div class="overlay">
        <h1>Bedenterbiýe we sport</h1>
    </div>
</header>

<section>
    <center><h1>Bildirisler</h1></center>
    <div
        class="d-flex justify-content-center align-items-center w-100"
        style="flex-direction: row; flex-wrap: wrap"
    >
        <div class="container flex-container">
            <img src="./images/sport1.jpeg" alt="" class="img-fluid" />
            <div class="text-button">
                <label class="text"
                    >Yaksygedi Kakayew adyndaky halkara nebit we gaz
                    uniwersiteti <br />
                    <span style="font-size: 15px"
                        >151 <i class="bi bi-eye-fill"></i></span
                ></label>
                <a href="" class="btn btn-primary">Ginisleyin</a>
            </div>
        </div>
        <div class="container flex-container">
            <img src="./images/sport2.jpeg" alt="" class="img-fluid" />
            <div class="text-button">
                <label class="text"
                    >Yaksygedi Kakayew adyndaky halkara nebit we gaz
                    uniwersiteti <br />
                    <span style="font-size: 15px"
                        >151 <i class="bi bi-eye-fill"></i></span
                ></label>
                <a href="" class="btn btn-primary">Ginisleyin</a>
            </div>
        </div>
        <div class="container flex-container">
            <img src="./images/sport1.jpeg" alt="" class="img-fluid" />
            <div class="text-button">
                <label class="text"
                    >Yaksygedi Kakayew adyndaky halkara nebit we gaz
                    uniwersiteti <br />
                    <span style="font-size: 15px"
                        >151 <i class="bi bi-eye-fill"></i></span
                ></label>
                <a href="" class="btn btn-primary">Ginisleyin</a>
            </div>
        </div>
        <div class="container flex-container">
            <img src="./images/sport2.jpeg" alt="" class="img-fluid" />
            <div class="text-button">
                <label class="text"
                    >Yaksygedi Kakayew adyndaky halkara nebit we gaz
                    uniwersiteti <br />
                    <span style="font-size: 15px"
                        >151 <i class="bi bi-eye-fill"></i></span
                ></label>
                <a href="" class="btn btn-primary">Ginisleyin</a>
            </div>
        </div>
    </div>

    <div class="paginator">
        <div class="progress-bar"></div>
        <div class="page-number active" data-index="1">1</div>
        <div class="page-number" data-index="2">2</div>
        <div class="page-number" data-index="3">3</div>
        <div class="page-number" data-index="4">4</div>
        <div class="page-number" data-index="5">5</div>
        <div class="page-number" data-index="6">6</div>
        <div class="page-number" data-index="7">7</div>
        <div class="page-number" data-index="8">8</div>
        <div class="page-number" data-index="9">9</div>
        <div class="page-number" data-index="10">10</div>
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
                <img src="./images/news1.png" class="card-img-top" alt="..." />
                <button class="heart-btn text-white border-0">
                    <i class="bi bi-heart"></i>
                </button>
                <div class="card-footer">
                    Virtual Reality Training Simulations
                    <a href="#" class="btn btn-primary btn-sm rounded-circle"
                        ><i class="bi bi-arrow-right"></i
                    ></a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card position-relative">
                <img src="./images/news2.jpg" class="card-img-top" alt="..." />
                <button class="heart-btn text-white border-0">
                    <i class="bi bi-heart"></i>
                </button>
                <div class="card-footer">
                    Natural Language Processing Chatbots
                    <a href="#" class="btn btn-primary btn-sm rounded-circle"
                        ><i class="bi bi-arrow-right"></i
                    ></a>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card position-relative">
                <img
                    src="./images/kitapgana.jpeg"
                    class="card-img-top"
                    alt="..."
                />
                <button class="heart-btn text-white border-0">
                    <i class="bi bi-heart"></i>
                </button>
                <div class="card-footer">
                    Cybersecurity Incident Response Platform
                    <a href="#" class="btn btn-primary btn-sm rounded-circle"
                        ><i class="bi bi-arrow-right"></i
                    ></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

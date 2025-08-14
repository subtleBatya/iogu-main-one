@extends('front.layouts.app') @section('title') IOGU @endsection
@section('section')
<header id="header">
    <div class="overlay">
        <h1>Bedenterbiýe we sport</h1>
    </div>
</header>

<section>
    <center><h1>Bildirisler</h1></center>
    {{-- <div
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
    </div> --}}


    <div class="d-flex justify-content-center align-items-center w-100" style="flex-direction: row; flex-wrap: wrap;">
        <div class="container flex-container">
            <div class="col-lg-5 col-md-6">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="./images/news2.jpg" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis mb-2">Sport</span>
                        <h5 class="card-title fw-bold">Foans</h5>
                        <p class="card-text text-muted">
                            Yagşygeldi Kakaýew adyndaky halkara nebit we gaz uniwersiteti.
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 pt-0 d-flex justify-content-between align-items-center">
                        <small class="text-muted">151 <i class="bi bi-eye-fill"></i></small>
                        <a href="#" class="fw-semibold text-primary text-decoration-none">Giňişleýin →</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex-container">
            <div class="col-lg-5 col-md-6">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="./images/news1.png" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis mb-2">Sport</span>
                        <h5 class="card-title fw-bold">Foans</h5>
                        <p class="card-text text-muted">
                            Yagşygeldi Kakaýew adyndaky halkara nebit we gaz uniwersiteti.
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 pt-0 d-flex justify-content-between align-items-center">
                        <small class="text-muted">151 <i class="bi bi-eye-fill"></i></small>
                        <a href="#" class="fw-semibold text-primary text-decoration-none">Giňişleýin →</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex-container">
            <div class="col-lg-5 col-md-6">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="./images/kitapgana.jpeg" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis mb-2">Sport</span>
                        <h5 class="card-title fw-bold">Foans</h5>
                        <p class="card-text text-muted">
                            Yagşygeldi Kakaýew adyndaky halkara nebit we gaz uniwersiteti.
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 pt-0 d-flex justify-content-between align-items-center">
                        <small class="text-muted">151 <i class="bi bi-eye-fill"></i></small>
                        <a href="#" class="fw-semibold text-primary text-decoration-none">Giňişleýin →</a>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>



    <section class="d-flex justify-content-center mt-5">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
    
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
    
                <li class="page-item disabled">
                    <span class="page-link">...</span>
                </li>
                
                <li class="page-item"><a class="page-link" href="#">10</a></li>
    
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
</section>

<div class="container py-5 position-relative">
    <!-- Section Title -->
    <h2 class="text-center text-success fw-bold mb-4">Tazelikler</h2>

    <!-- Filter Buttons -->
    <div class="filter-buttons">
        <button class="btn btn-outline-success me-2">Ählisi</button>
        {{-- <button class="btn btn-outline-success">Ählisi</button> --}}
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

@extends('front.layouts.app') @section('title')
    IOGU
@endsection
@section('section')
    <header id="header">
        <div class="overlay">
            <h1>Ýolbaşçylar</h1>
        </div>
    </header>



    <div class="container mt-5" style="overflow-x: scroll;">
        <h1 class="table-header text-center">Uniwersitetiň ýolbaşçylary</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>T/b</th>
                    <th>F.A.Aa</th>
                    <th>Wezipesi</th>
                    <th>Telefon</th>
                    <th>Elektron poçtasy</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="blue-text">Atamanyrat Baýrammyrat Yaylymowiç</td>
                    <td class="green-text">REKTOR, T.Y.D.</td>
                    <td>(+99312)39-13-00</td>
                    <td><a href="mailto:rector@ioglu.edu.tm">rector@ioglu.edu.tm</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="blue-text">Hudayberdenow Salyh Nuryýewiç</td>
                    <td class="green-text">OKUW IŞLERI BOÝUNÇA PROREKTOR</td>
                    <td>(+99312)39-13-02</td>
                    <td><a href="mailto:q.prorektor@ioglu.edu.tm">q.prorektor@ioglu.edu.tm</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="blue-text">Amanýazow Ýakupgeldi Gulgeldiýewiç</td>
                    <td class="green-text">YLYM IŞLERI BOÝUNÇA PROREKTOR</td>
                    <td>(+99312)39-13-02</td>
                    <td><a href="mailto:iogus.scientific@sanly.tm">iogus.scientific@sanly.tm</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="blue-text">Babayew Marly</td>
                    <td class="green-text">OKUW BÖLÜMINIŇ BAŞLYGY, T.Y.K.</td>
                    <td>(+99312)39-13-05</td>
                    <td><a href="mailto:ag.charyyev@gmail.com">ag.charyyev@gmail.com</a></td>
                </tr>
            </tbody>
        </table>
    </div>


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

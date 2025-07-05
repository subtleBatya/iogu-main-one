@extends('front.layouts.app') @section('title')
    IOGU
@endsection
@section('section')
    <header id="header">
        <div class="overlay">
            <h1>Fakultetler we kafedralar</h1>
        </div>
    </header>



    <section style="height: auto; padding:2vw; color: #3F4E70;">
        <h3 class="text-center">ÝAGŞYGELDI KAKAÝEW ADYNDAKY HALKARA NEBIT WE GAZ UNIWERSITETI</h3>
        <div style="color: #3F4E70;">
            <p><strong>Fakultetler we kafedralar</strong></p>

            <ul>
                <li>
                    <p><strong>Nebit we gaz fakulteti</strong></p>
                    <ul>
                        <li>Nebit we gaz guýularyny burawlamak kafedrasy</li>
                        <li>Nebit we gaz çykaryşyny düzüleşdirmek kafedrasy</li>
                        <li>Nebitgazyçirijilerini we nebitgazy saklanýan ýerlerini taslamak, gurmak we ulanmak kafedrasy
                        </li>
                    </ul>
                </li>

                <li>
                    <p><strong>Diller kafedrasy</strong></p>
                </li>

                <li>
                    <p><strong>Geologiýa fakulteti</strong></p>
                    <ul>
                        <li>Päsgelçilikli magdanlary gözlemek we barlamak boýunça geofiziki usullar kafedrasy</li>
                        <li>Geologiýa we geohimiýa kafedrasy</li>
                        <li>Gidrogeologiýa we inžener geologiýasy kafedrasy</li>
                        <li>Dag işleri kafedrasy</li>
                        <li>Geologik kartalaşdyrma we markşeýder işi kafedrasy</li>
                        <li>Çyzuw we materiallaryň garşylygy kafedrasy</li>
                    </ul>
                </li>

                <li>
                    <p><strong>Energetika we inženerçilik desgalary fakulteti</strong></p>
                    <ul>
                        <li>Senagat gurluşygy we geodeziýa kafedrasy</li>
                        <li>Kompressorlar we sowadyjy desgalary kafedrasy</li>
                        <li>Nebit we gaz känleriniň maşynlary we enjamlary kafedrasy</li>
                        <li>Elektrik üpjünçiligi we awtomatika kafedrasy</li>
                        <li>Fizika we elektronika kafedrasy</li>
                        <li>Amaly mehanika kafedrasy</li>
                    </ul>
                </li>

                <li>
                    <p><strong>Himiýa tehnologiýasy we ekologiýa fakulteti</strong></p>
                    <ul>
                        <li>Senagat ekologiýasy kafedrasy</li>
                        <li>Nebit, gazy gaýtadan işlemek himiki tehnologiýasy kafedrasy</li>
                        <li>Jemgyýet öwreniş ylymlary kafedrasy</li>
                        <li>Umumy himiýa kafedrasy</li>
                    </ul>
                </li>

                <li>
                    <p><strong>Ykdysadýet we dolandyryş fakulteti</strong></p>
                    <ul>
                        <li>Nebit we gaz pudagynyň ykdysadýeti we dolandyrylyşy kafedrasy</li>
                        <li>Ýokary matematika kafedrasy</li>
                        <li>Bedenterbiýe kafedrasy</li>
                        <li>Logistika kafedrasy</li>
                        <li>Sanly tehnologiýalar we kiberhowpsuzlyk</li>
                        <li>Kiberhowpsuzlyk kafedrasy</li>
                        <li>Informatika we maglumat tehnologiýalary kafedrasy</li>
                    </ul>
                </li>

                <li>
                    <p><strong>Häzirki zaman kompýuter tehnologiýalary kafedrasy</strong></p>
                </li>

                <li>
                    <p><strong>Nebit senagaty (Balkanabat bölümi) fakulteti</strong></p>
                    <ul>
                        <li>Geologiýa we geofizika kafedrasy</li>
                        <li>Nebitçileriň enjamlar kafedrasy</li>
                        <li>Nebit we gaz guýularyny burawlamak kafedrasy</li>
                        <li>Umumy tehniki dersler kafedrasy</li>
                    </ul>
                </li>

                <li>
                    <p><strong>Himiýa we energetika kafedrasy</strong></p>
                </li>

                <li>
                    <p><strong>Hünär derejesini ýokarlandyryş kafedrasy</strong></p>
                </li>
            </ul>
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

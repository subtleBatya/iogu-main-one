@extends('front.layouts.app') @section('title')
    IOGU
@endsection
@section('section')
    <header id="header">
        <div class="overlay">
            <h1>Okuw bölümi</h1>
        </div>
    </header>

    <section style="height: auto; padding: 2vw; color: #3f4e70">
        <h3 class="text-center">
            ÝAGŞYGELDI KAKAÝEW ADYNDAKY HALKARA NEBIT WE GAZ UNIWERSITETI
        </h3>
        <div style="color: #3f4e70">
            <p><strong>Okuw bölüminiň işiniň esasy ugurlary</strong></p>
            <p>
                Ýagşygeldi Kakaýew adyndaky Halkara nebit we gaz uniwersitetiniň
                (HNGU) okuw bölüminiň işiniň esasy ugurlary: okuw işini döwrüň
                talabyna laýyklykda guramak, talyplara ýokary hilli bilim bermek,
                mugallymlary, hünärmenleri taýýarlamak we işgärleri gaýtadan
                taýýarlamak işlerini ýola goýmak hem-de sanly bilim ulgamyny
                yzygiderli durmuşa geçirmek we kämilleşdirmek.
            </p>

            <p><strong>Bölümiň wezipeleri:</strong></p>
            <ul>
                <li>
                    Türkmenistanyň Prezidentiniň Permanlaryny, Kararlaryny,
                    Ministrler Kabinetiniň we Bilim ministrliginiň görkezmelerini
                    okuw işinde amal etmek;
                </li>
                <li>
                    Daşary ýurt dillerini, tebigy we takyk ylmy dersleri okatmagy
                    kämilleşdirmek; sanly bilim ulgamyny ösdürmek boýunça degişli
                    maksatnamalary ornaşdyrmak;
                </li>
                <li>
                    Okuw işini guramakda usuly görkezmeleri, okuw-usuly işleriň
                    görnüşlerini düzgünleşdirmek;
                </li>
                <li>
                    Universitetiň işini kadalaşdyrýan içerki düzgünnamalary we
                    resminamalary işläp düzmek;
                </li>
                <li>
                    Ykdysadyýetiň pudaklary üçin ylmy-amaly taýdan kämil
                    hünärmenleri, bakalawrlary we magistrleri taýýarlamak;
                </li>
                <li>Ýokary taýýarlykly işgärlere bolan talaby kanagatlandyrmak;</li>
                <li>
                    Professor-mugallymlaryň işini kämilleşdirmek, okuw-usuly
                    maslahatlary guramak;
                </li>
                <li>
                    Talyplaryň halkara we döwlet derejesindäki bäsleşiklere
                    gatnaşmagyny işjeňleşdirmek boýunça meýilnamalaýyn işler;
                </li>
                <li>Professor-mugallymlaryň hünär derejesini ýokarlandyrmak;</li>
                <li>
                    Okuw tertiplerini düzende ähli bölümleriň işini utgaşdyrmak;
                </li>
                <li>
                    Okuw sapaklarynyň, aralyk jemlemeleriň, hasap-synaglaryň
                    tertibini düzmek;
                </li>
                <li>
                    Bilim bermek we hünär öwretmek işlerini kanunçylyk esasynda
                    guramak, işgär saýlawyny amala aşyrmak;
                </li>
                <li>
                    Okuw tertipleriniň berjaý edilişine, dersleriň okadylyşyna we
                    jemlemelere gözegçilik etmek;
                </li>
                <li>
                    Jemleýji döwletsynag toparynyň işini taýýarlamak we geçirmek;
                </li>
                <li>Kafedralarda okuw ýüküniň dogrulygyna gözegçilik etmek;</li>
                <li>Okuw meýilnamalaryny we maksatnamalaryny taýýarlamak;</li>
                <li>
                    Okuw-usuly çäreleri guramak, daşary ýurt we ýerli hünärmenleriň
                    gatnaşmagyny üpjün etmek;
                </li>
                <li>
                    Maddy-tehniki taýdan üpjünçilik we döwrebap enjamlaşdyrmak, okuw
                    otaglaryny abzallaşdyrmak;
                </li>
                <li>
                    Okuw meseleleri boýunça hatlara jogap bermek we güwänamalary
                    taýýarlamak;
                </li>
                <li>
                    Okuw kitaplaryny, gollanmalary we beýleki edebiýatlary
                    taýýarlamak;
                </li>
                <li>
                    Talyplaryň tejribelik işlerini (önümçilik, diplom öňýany)
                    utgaşdyrmak;
                </li>
                <li>
                    Bilim ministrliginiň, rektoryň we prorektoryň görkezmeleriniň
                    ýerine ýetirilişine gözegçilik etmek.
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
                    <img src="./images/news1.png" class="card-img-top" alt="..." />
                    <button class="heart-btn text-white border-0">
                        <i class="bi bi-heart"></i>
                    </button>
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
                    <img src="./images/news2.jpg" class="card-img-top" alt="..." />
                    <button class="heart-btn text-white border-0">
                        <i class="bi bi-heart"></i>
                    </button>
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
                    <img src="./images/kitapgana.jpeg" class="card-img-top" alt="..." />
                    <button class="heart-btn text-white border-0">
                        <i class="bi bi-heart"></i>
                    </button>
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

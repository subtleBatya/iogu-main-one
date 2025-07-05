@extends('front.layouts.app') @section('title')
    IOGU
@endsection
@section('section')
    <header id="header">
        <div class="overlay">
            <h1>Uçurymlar</h1>
        </div>
    </header>

    <section style="height: auto; padding: 2vw">
        <h3>Olimpiadalarda we döwlet ýaryşlarynda talyplaryň üstünlikleri</h3>
        <p>15 sentyabr 2022</p>
        <article class="mt-5">
            <p class="text" style="font-weight: 100; text-align: justify; font-style: normal">
                Berkarar döwletiň täze eýýamynyň Galkynyşy döwründe
                Türkmenistanyň Hormatly Prezidentiniň 2012-nji ýylyň 25-nji maýynda
                çykaran Permany bilen Türkmen politehniki instituty ýapylyp,
                Ýagşygeldi Kakaýew adyndaky Halkara nebit we gaz uniwersiteti
                döredildi. <br />
                2023-nji ýylda uiwersiteti 23 hünär we 5 ugur  boýunça
                Türkmenistanyň Nebitgaz toplumynyň pudaklaýyn dolandyryş kärhanalary
                bolan “Türkmengeologiýa” döwlet korporasiýasy, “Türkmengaz”,
                “Türkmennebit”, “Türkmenhimiýa” döwlet konsernleri,
                “Türkmennebitönümleri” baş müdirligi, Türkmenbaşydaky Nebiti
                gaýtadan işleýän zawodlar toplumy, Türkmenistanyň Merkezi bankynyň
                toplumlary, “Türkmenstandartlary” baş döwlet gullugy we beýleki
                döwlet edara-kärhanalary üçin ýokary bilimli bakalawrlary,
                hünärmenleri we magistrleri taýýarlaýar we goýberýär. <br />
                Täze döredilen uniwersitet tarapyndan hünärmenleriň ilkinji
                goýberilişi 2017-nji ýylda amala aşyryldy. <br />
                Ýagşygeldi Kakaýew adyndaky Halkara nebit we gaz
                uniwersitetiniň uçurymlary Türkmenistanyň nebitgaz toplumynyň
                pudaklaýyn dolandyryş  kärhanalarynda üstünlikli  zähmet çekýärler,
                özlerini döredijilikli zehinli  hünärmenler we gowy guramaçylar
                hökmünde görkezýärler, taslama guramalarynda, dolandyryş
                edaralarynda (şäherleriň, welaýatlaryň, etraplaryň), ylmy we
                ylmy-taslama institutlarynda, şeýle hem ýokary okuw we orta hünär
                mekdeplerinde, mugallymçylyk işlerinde özlerini gowy görkezmek bilen
                bir hatarda,Türkmenistanyň döwlet kanun çykaryjy we ýerine ýetiriji
                häkimiýetlerinde jogapkär wezipeleri ýerine ýetirýärler. <br />
                Uniwersitetiň uçurymlarynyň işi nebit we gaz känlerini
                gözlemäge, burawlamaga, özleşdirmäge, taslamaga, nebiti we gazy
                gaýtadan işlemäge innowasion tehnologiýalary önümçilige
                ornaşdyrmaga, inženerçilik dolandyryş hyzmatlaryny  ösdürmäge
                ugrukdyrylandyr.
            </p>
        </article>
    </section>

    <section>
        <center>
            <h2 style="color: #3f4e70">
                Ýagşygeldi Kakaýew adyndaky Halkara nebit we gaz uniwersitetini
                tamamlan uçurymlar barada <br />
                MAGLUMAT <br /><span class="text fs-5">Yyllar boyunca uniwersiteti tamamlan ucurymlaryn sany
                </span>
            </h2>
        </center>
        <div class="container my-5">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center align-middle rounded-custom">
                    <thead class="">
                        <tr>
                            <th style="background-color: #dee5ea">Ýyl</th>
                            <th style="background-color: #dee5ea">2017</th>
                            <th style="background-color: #dee5ea">2018</th>
                            <th style="background-color: #dee5ea">2019</th>
                            <th style="background-color: #dee5ea">2020</th>
                            <th style="background-color: #dee5ea">2021</th>
                            <th style="background-color: #dee5ea">2022</th>
                            <th style="background-color: #dee5ea">2023</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="background-color: #dee5ea">
                                ucurymlaryn sany
                            </td>
                            <td style="background-color: #dee5ea">403</td>
                            <td style="background-color: #dee5ea">403</td>
                            <td style="background-color: #dee5ea">416</td>
                            <td style="background-color: #dee5ea">431</td>
                            <td style="background-color: #dee5ea">473</td>
                            <td style="background-color: #dee5ea">599</td>
                            <td style="background-color: #dee5ea">819</td>
                        </tr>
                    </tbody>
                </table>
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

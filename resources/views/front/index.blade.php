@extends('front.layouts.app')
@section('title')
    IOGU
@endsection
@section('section')
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('./images/main_picture.jpeg')">
                <div class="carousel-overlay"></div>

                <!-- Caption -->
                <div class="carousel-caption-custom">
                    <h2 class="fw-bold">{{ __('messages.about_university') }}</h2>
                    <p>
                        {{ __('messages.university_description') }}
                    </p>
                </div>
            </div>

            <!-- Slide 2 (optional) -->
            <div class="carousel-item" style="background-image: url('./images/bilim_header_img.jpeg')">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption-custom">
                    <h2 class="fw-bold">{{ __('messages.second_slide') }}</h2>
                    <p>
                        {{ __('messages.second_slide_description') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <!-- Previous Button -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon d-flex justify-content-center align-items-center" aria-hidden="true"
                style="
                background: white;
                border-radius: 50%;
                width: 48px;
                height: 48px;
                box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
            ">
                <i class="bi bi-arrow-left" style="color: black; font-size: 24px"></i>
            </span>
        </button>

        <!-- Next Button -->
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon d-flex justify-content-center align-items-center" aria-hidden="true"
                style="
                background: white;
                border-radius: 50%;
                width: 48px;
                height: 48px;
                box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
            ">
                <i class="bi bi-arrow-right" style="color: black; font-size: 24px"></i>
            </span>
        </button>
    </div>

    <section id="section-icons mx-auto" style="position: relative; top: -20vh; height: 20vh">
        <div class="d-flex justify-content-between align-items-center p-5" style="flex-wrap: wrap">
            <a href="" style="text-decoration: none; color: black">
                <div class="icons d-flex justify-content-center align-items-center bg-white">
                    <svg width="119" height="119" viewBox="0 0 119 119" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25.3918 91.0125C35.4653 85.3186 47.1032 82.0689 59.5 82.0689C71.8969 82.0689 83.5347 85.3186 93.6082 91.0125M74.375 52.3189C74.375 60.5342 67.7152 67.1939 59.5 67.1939C51.2848 67.1939 44.625 60.5342 44.625 52.3189C44.625 44.1037 51.2848 37.4439 59.5 37.4439C67.7152 37.4439 74.375 44.1037 74.375 52.3189ZM104.125 62.2356C104.125 86.8813 84.1457 106.861 59.5 106.861C34.8543 106.861 14.875 86.8813 14.875 62.2356C14.875 37.5899 34.8543 17.6106 59.5 17.6106C84.1457 17.6106 104.125 37.5899 104.125 62.2356Z"
                            stroke="#0F172A" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h5 class="text-center">{{ __('messages.dalasgar_2025') }}</h5>
                </div>
            </a>
            <a href="" style="text-decoration: none; color: black">
                <div class="icons d-flex justify-content-center align-items-center bg-white" style="color: black">
                    <svg width="150" height="150" viewBox="0 0 150 150" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25 118.75V31.25C25 24.3464 30.5964 18.75 37.5 18.75H121.25C123.321 18.75 125 20.4289 125 22.5V104.464"
                            stroke="#000" stroke-width="7" stroke-linecap="round" />
                        <path d="M50 18.75V68.75L65.625 58.75L81.25 68.75V18.75" stroke="#000" stroke-width="7"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M37.5 106.25H125" stroke="#000" stroke-width="7" stroke-linecap="round" />
                        <path d="M37.5 131.25H125" stroke="#000" stroke-width="7" stroke-linecap="round" />
                        <path d="M37.5 131.25C30.5964 131.25 25 125.654 25 118.75C25 111.846 30.5964 106.25 37.5 106.25"
                            stroke="#000" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h5 class="text-center">{{ __('messages.student_life') }}</h5>
                </div>
            </a>

            <a href="" style="text-decoration: none; color: black">
                <div class="icons d-flex justify-content-center align-items-center bg-white">
                    <svg width="157" height="157" viewBox="0 0 157 157" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.7188 25.9458C34.6022 26.0367 48.4618 28.5364 57.7837 32.9902C66.8249 37.3099 71.6668 43.482 73.744 51.6818C74.2955 53.8586 76.2544 55.3832 78.5 55.3832C80.7456 55.3832 82.7046 53.8586 83.2561 51.6818C85.3333 43.482 90.1752 37.3099 99.2163 32.9902C108.538 28.5364 122.398 26.0367 142.281 25.9457V114.258C106.868 114.258 89.4757 120.606 78.4996 131.457C67.5617 120.656 50.1462 114.269 14.8106 114.258C14.7687 114.15 14.7188 113.959 14.7188 113.666V25.9458ZM10.9694 16.8717C12.1643 16.3793 13.4449 16.1284 14.7373 16.1332C35.1868 16.225 50.7614 18.7602 62.0139 24.1363C69.3327 27.6331 74.7759 32.3147 78.5 38.1218C82.2242 32.3147 87.6674 27.6331 94.9861 24.1363C106.239 18.7602 121.81 16.225 142.259 16.1333C143.552 16.1284 144.836 16.3793 146.031 16.8717C147.226 17.364 148.311 18.0879 149.225 19.0018C150.139 19.9157 150.863 21.0014 151.355 22.1963C151.846 23.3876 152.097 24.664 152.094 25.9524V114.258C152.094 116.861 151.06 119.356 149.22 121.197C147.38 123.037 144.884 124.071 142.281 124.071C103.612 124.071 90.3191 131.869 82.3313 141.854C81.4 143.018 79.9898 143.696 78.4989 143.696C77.008 143.695 75.5982 143.017 74.6674 141.853C66.7339 131.926 53.385 124.071 14.7188 124.071C11.7594 124.071 9.1696 122.818 7.39392 120.732C5.68012 118.719 4.90628 116.165 4.90628 113.666V25.9534C4.90285 24.6647 5.15378 23.3879 5.64473 22.1963C6.13706 21.0014 6.86102 19.9157 7.77488 19.0018C8.68874 18.0879 9.77444 17.364 10.9694 16.8717Z"
                            fill="#000" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M78.5 45.5707C81.2096 45.5707 83.4062 47.7673 83.4062 50.4769V138.789C83.4062 141.499 81.2086 143.696 78.4989 143.696C75.7893 143.696 73.5938 141.499 73.5938 138.789V50.4769C73.5938 47.7673 75.7904 45.5707 78.5 45.5707Z"
                            fill="#000" />
                    </svg>
                    <h5 class="text-center">{{ __('messages.achievements') }}</h5>
                </div>
            </a>

            <a href="" style="text-decoration: none; color: black">
                <div class="icons d-flex justify-content-center align-items-center bg-white">
                    <svg width="131" height="130" viewBox="0 0 131 130" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_17_892)">
                            <path
                                d="M49.125 61.0776C61.1832 61.0776 70.9583 51.3771 70.9583 39.4109C70.9583 27.4448 61.1832 17.7443 49.125 17.7443C37.0667 17.7443 27.2916 27.4448 27.2916 39.4109C27.2916 51.3771 37.0667 61.0776 49.125 61.0776Z"
                                stroke="#0F172A" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16.375 115.244V104.411C16.375 98.6646 18.6753 93.1536 22.7698 89.0903C26.8644 85.027 32.4178 82.7443 38.2083 82.7443H60.0417C65.8322 82.7443 71.3856 85.027 75.4802 89.0903C79.5747 93.1536 81.875 98.6646 81.875 104.411V115.244"
                                stroke="#0F172A" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M87.3334 18.4485C92.0298 19.6418 96.1925 22.3523 99.1651 26.1527C102.138 29.9531 103.751 34.6271 103.751 39.4381C103.751 44.249 102.138 48.9231 99.1651 52.7235C96.1925 56.5239 92.0298 59.2344 87.3334 60.4277"
                                stroke="#0F172A" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M114.625 115.244V104.411C114.597 99.6289 112.976 94.9903 110.014 91.2181C107.052 87.446 102.916 84.7522 98.25 83.5568"
                                stroke="#0F172A" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_17_892">
                                <rect width="131" height="130" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <h5 class="text-center">{{ __('messages.programs') }}</h5>
                </div>
            </a>
        </div>
    </section>

    <section id="particles-js">
        <div class="d-flex particles">
            <div class="col">
                <div class="row">
                    <div class="div-text">
                        <p class="text fs-1 text-white text-uppercase fw-bold">7</p>
                        <p class="text fs-3 text-white text-uppercase fw-normal" style="margin-top: -10px">
                            {{ __('messages.faculties') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="div-text">
                        <p class="text fs-1 text-white text-uppercase fw-bold">
                            10
                        </p>
                        <p class="text fs-3 text-white text-uppercase fw-normal" style="margin-top: -10px">
                            {{ __('messages.specialties') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="div-text">
                        <p class="text fs-1 text-white text-uppercase fw-bold">
                            6372
                        </p>
                        <p class="text fs-3 text-white text-uppercase fw-normal" style="margin-top: -10px">
                            {{ __('messages.electronic_books') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="div-text">
                        <p class="text fs-1 text-white text-uppercase fw-bold">
                            32
                        </p>
                        <p class="text fs-3 text-white text-uppercase fw-normal" style="margin-top: -10px">
                            {{ __('messages.departments') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="div-text">
                        <p class="text fs-1 text-white text-uppercase fw-bold">
                            14
                        </p>
                        <p class="text fs-3 text-white text-uppercase fw-normal" style="margin-top: -10px">
                            {{ __('messages.bachelor') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="div-text">
                        <p class="text fs-1 text-white text-uppercase fw-bold">
                            86
                        </p>
                        <p class="text fs-3 text-white text-uppercase fw-normal" style="margin-top: -10px">
                            {{ __('messages.laboratories') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="div-text">
                        <p class="text fs-1 text-white text-uppercase fw-bold">
                            23
                        </p>
                        <p class="text fs-3 text-white text-uppercase fw-normal" style="margin-top: -10px">
                            {{ __('messages.specialties') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="div-text">
                        <p class="text fs-1 text-white text-uppercase fw-bold">2</p>
                        <p class="text fs-3 text-white text-uppercase fw-normal" style="margin-top: -10px">
                            {{ __('messages.master') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="div-text">
                        <p class="text fs-1 text-white text-uppercase fw-bold">
                            6540
                        </p>
                        <p class="text fs-3 text-white text-uppercase fw-normal" style="margin-top: -10px">
                            {{ __('messages.students_count') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news" class="mx-auto" style="position: relative">
        <div
            style="
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.4);
            left: 0;
            top: 0;
        ">
        </div>
        <div class="d-flex justify-content-center align-items-center" style="flex-direction: column">
            <h1 style="z-index: 1000; color: #04602a; font-weight: bold">
                {{ __('messages.latest_news') }}
            </h1>
        </div>
        <!-- Swiper Container -->
        <div class="swiper mx-auto">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper-slide-custom2">
                    <img src="./images/image.png" alt="Slide Image" class="slide-img slide-img-custom2" />
                </div>
                <div class="swiper-slide swiper-slide-custom2">
                    <img src="./images/image.png" alt="Slide Image" class="slide-img slide-img-custom2" />
                </div>
                <div class="swiper-slide swiper-slide-custom2">
                    <img src="./images/image.png" alt="Slide Image" class="slide-img slide-img-custom2" />
                </div>
                <div class="swiper-slide swiper-slide-custom2">
                    <img src="./images/image.png" alt="Slide Image" class="slide-img slide-img-custom2" />
                </div>
                <div class="swiper-slide swiper-slide-custom2">
                    <img src="./images/image.png" alt="Slide Image" class="slide-img slide-img-custom2" />
                </div>
            </div>
            <!-- Pagination (optional) -->
            <div class="swiper-pagination custom-pagination2"></div>
        </div>
    </section>

    <section id="notification" class="mx-auto">
        <div class="d-flex justify-content-center align-items-center" style="flex-direction: column">
            <h1>{{ __('messages.notifications') }}</h1>
            <p class="text fs-3 text-center">
                {{ __('messages.university_notifications') }}
            </p>
        </div>
        <!-- Swiper Container -->
        <div class="swiper-container mx-auto">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper-slide-custom">
                    <img src="./images/header_pic.jpeg" alt="Slide Image" class="slide-img slide-img-custom" />
                    <div class="slide-text slide-text-custom">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Velit quibusdam est veniam enim animi in at, iste quos atque
                        reiciendis! At debitis officiis explicabo unde neque nobis
                        soluta illo eligendi.
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-custom">
                    <img src="./images/lg.jpeg" alt="Slide Image" class="slide-img slide-img-custom" />
                    <div class="slide-text slide-text-custom">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Error, molestias eos labore, aspernatur nulla laborum porro
                        repellat animi suscipit enim perspiciatis dolorum, vel
                        laudantium fuga omnis ducimus quibusdam quia possimus.
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-custom">
                    <img src="./images/main_picture.jpeg" alt="Slide Image" class="slide-img slide-img-custom" />
                    <div class="slide-text slide-text-custom">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Error consequuntur ad eum fugit nulla quos ducimus optio,
                        ipsum harum, reprehenderit voluptatem similique dolorum, eos
                        veniam enim ipsam corrupti rem ab?
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-custom">
                    <img src="./images/mat.jpeg" alt="Slide Image" class="slide-img slide-img-custom" />
                    <div class="slide-text slide-text-custom">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Porro distinctio recusandae ullam blanditiis accusantium hic
                        modi ratione, vero explicabo aliquid error, repudiandae
                        repellendus quia aspernatur laborum veritatis ea saepe
                        assumenda.
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-custom">
                    <img src="./images/header_pic.jpeg" alt="Slide Image" class="slide-img slide-img-custom" />
                    <div class="slide-text slide-text-custom">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aspernatur, molestias placeat asperiores eligendi est
                        aliquam quidem dignissimos itaque cupiditate tempore ducimus
                        beatae ad nobis temporibus esse deserunt iste laboriosam
                        culpa.
                    </div>
                </div>
            </div>
            <!-- Pagination (optional) -->
            <div class="swiper-pagination custom-pagination"></div>
        </div>
    </section>

    <section id="tazelikler">
        <div class="carousel-slide1">
            <h1 class="carousel-title1">{{ __('messages.sport_news') }}</h1>
            <div class="carousel-container1">
                <button class="nav-btn1 prev-btn1">&#10094;</button>
                <div class="carousel-image-wrapper1">
                    <img src="./images/tazelikler.png" alt="Celebration" class="carousel-image1" />
                    <div class="gradient-overlay1"></div>
                    <div class="carousel-content1">
                        <p class="desc1-1">{{ __('messages.volleyball_team_first') }}</p>
                        <p class="desc2-1">{{ __('messages.congratulations') }}</p>
                        <button class="read-more1">{{ __('messages.read_more') }}</button>
                    </div>
                </div>
                <button class="nav-btn1 next-btn1">&#10095;</button>
            </div>
            <div class="paginator1">
                <span class="dot1 active1"></span>
                <span class="dot1"></span>
                <span class="dot1"></span>
            </div>
        </div>
    </section>
@endsection

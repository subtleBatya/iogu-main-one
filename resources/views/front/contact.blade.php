@extends('front.layouts.app') @section('title')
    IOGU
@endsection
@section('section')
    <header id="header">
        <div class="overlay">
            <h1>Habarlaşmak</h1>
        </div>
    </header>

    <section class="mt-5">
        <div style="color: #3f4e70" class="m-5">
            <h2 class="m-2 fw-bold">Habarlasmak ucin</h2>
            {{-- <textarea id="tm-editor" class="text-editor"></textarea> --}}
            <div class="w-50">
                

                <!-- Phone Number Input -->
                <div class="form-group">
                    <label for="phoneInput">Telefon nomer</label>
                    <input type="tel" class="form-control border border-green-700 py-3" id="phoneInput"
                        placeholder="+993-65-65-65">
                </div>

                <!-- Email Input -->
                <div class="form-group">
                    <label for="emailInput">Pocta</label>
                    <input type="email" class="form-control border border-green-700 py-3" id="emailInput"
                        placeholder="aman@gmail.com">
                </div>

                <div class="form-group">
                    <label for="nameInput fw-bold">Maglumat</label>
                    <input type="text" class="form-control border border-green-700 py-3" id="nameInput"
                        placeholder="Giriz">
                </div>
            </div>

        </div>
    </section>

    <div class="contact-map-container m-5" style="background-color: #dae1e7d9">
        <div class="contact-info">
            <p>
                <strong>Salgysy:</strong> 744036, Türkmenistan, Aşgabat ş., Arçabil
                şaýoly, 8
            </p>
            <p>
                <strong>Tel:</strong>
                <a href="tel:+99312391300">(+993 12) 391300</a>
            </p>
            <p>
                <strong>Faks:</strong>
                <a href="tel:+99312391400">(+993 12) 391400</a>
            </p>
            <p>
                <strong>E-mail:</strong>
                <a href="mailto:iuog@sanly.tm">iuog@sanly.tm</a>
            </p>
            <p>
                <strong>Web-saýt:</strong>
                <a href="https://iogu.edu.tm" target="_blank">iogu.edu.tm</a>
            </p>
        </div>

        <div class="map">
            <!-- Example map embed (Google Maps iframe) -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2943.7689341589734!2d58.3872188!3d37.9405418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414fdf3d4baee7d7%3A0x22871b5981d77507!2sInternational%20Oil%20and%20Gas%20University!5e0!3m2!1sen!2s!4v1713350000000"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
@endsection

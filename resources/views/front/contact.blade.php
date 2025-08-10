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
        
        <div class="w-75">
            <form action="#" method="POST">
                <!-- Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-medium">Doly ady</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Aman amanow">
                </div>
            
                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-medium">Pocta</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="sen@example.com">
                </div>
            
                <!-- Subject Field -->
                <div class="mb-3">
                    <label for="subject" class="form-label fw-medium">Yuzlenme</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Sowal">
                </div>
            
                <!-- Message Field -->
                <div class="mb-3">
                    <label for="message" class="form-label fw-medium">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your message here..."></textarea>
                </div>
            
                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-primary btn-lg fw-semibold">
                        Send Message
                    </button>
                </div>
            </form>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.265373292227!2d58.38615457535503!3d37.87747620623808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f6ffd4640043691%3A0x522b65994863214c!2z0KPQvdC40LLQtdGA0YHQuNGC0LXRgiDQvdC10YTRgtC4INC4INCz0LDQt9Cw!5e0!3m2!1sru!2sus!4v1754821382418!5m2!1sru!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection

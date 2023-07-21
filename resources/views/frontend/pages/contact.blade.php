@extends('frontend.app')
@section('main_content')
<!-- Contact Start -->
<section class="section-contact">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6 pe-md-0 ps-lg-0">
                <div class="bg-white pt-lg-100 ps-lg-80 height-md-600">
                    <h2 class="contact-title">keep in touch with us</h2>
                    <div class="contact-media">
                        <span class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </span>
                        <span class="content">
                            <h3 class="contact-subtitle">address</h3>
                            <p class="contact-text">28 Tamworth Street,Oldham,Manchester, UK OL97QY</p>
                        </span>
                    </div>
                    <div class="contact-media">
                        <span class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <span class="content">
                            <h3 class="contact-subtitle">phone</h3>
                            <p class="contact-text">+44 7724 222007 / +44 7448 835717 / +44 7448 178374</p>
                        </span>
                    </div>
                    <div class="contact-media">
                        <span class="icon">
                            <i class="fas fa-envelope-open"></i>
                        </span>
                        <span class="content">
                            <h3 class="contact-subtitle">email</h3>
                            <p class="contact-text">info@uk-fasteners.co.uk</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 ps-md-0">
                <div class="pe-lg-80">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2371.235090321259!2d-2.1334551!3d53.5357165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb766452a1e77%3A0x80e66a6321199a94!2s28%20Tamworth%20St%2C%20Oldham%20OL9%207QY%2C%20UK!5e0!3m2!1sen!2s!4v1689851265328!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->

<!-- Contact Form Start -->
<section class="section-contact-form">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-10 col-lg-10 text-center mx-auto">
                <h2 class="contact-form-title">know about with us</h2>
                <p class="contact-form-text">Morbi eleifend, felis non hendrerit sollicitudin, neque urna cursus neque, eu commodo augue nibh id nisl. Nam sed odio in ligula consectetur varius a id est. Aenean sed augue vitae nisl cursus consequat. Aliquam malesuada pellentesque est ut semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <form>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="your name*">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="your email*">
                        </div>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="your phone*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="your address*">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <textarea class="form-control" cols="30" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-submit">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form End -->
@endsection
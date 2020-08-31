@extends('layouts.app')

@section('content')
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h1>Kontakt</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-box">
                    <ul class="breadcrumbs">
                        <li>Home</li>
                        <li>Kontakt</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact section-padding-top section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="contact-form-content">
                    <div class="contact-title">
                        <h2 class="section-title">Irgendwelche Fragen?</h2>
                    </div>
                    <div class="contact-form">
                        <form method="post" action="#">
                            <div class="form-group contact-field-group">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                                        <div class="form-field-name">
                                            <input class="question-form-name form-control" type="text" name="name"
                                                   placeholder="Ihr Name"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                                        <div class="form-field-email">
                                            <input class="question-form-email form-control" type="email"
                                                   name="email"
                                                   placeholder="Ihr E-Mail"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group contact-field-group mt-4">
                                <div class="form-field-message">
                                    <textarea class="textarea form-control" placeholder="Nachricht"
                                              name="home-textarea" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-submit">
                                    <button class="btn contact-btn">Senden</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="address">
                    <h3>GEWERBE-SPIEL.ch</h3>
                    <h4>c/o Rüegg Management GmbH.</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Waldegg 14a, 8623 Wetzikon</p>
                    <p><i class="fas fa-phone"></i> Tel. +41 78 680 90 40</p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@gewerbe-spiel.ch">info@gewerbe-spiel.ch</a></p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2704.262435188095!2d8.825348615467695!3d47.328745815124144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479ab95c206c6395%3A0xf61bd7488e47480b!2sWaldegg%2014A%2C%208623%20Wetzikon%2C%20Switzerland!5e0!3m2!1sen!2sba!4v1598890202286!5m2!1sen!2sba"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

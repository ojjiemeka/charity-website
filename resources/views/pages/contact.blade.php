@extends('components.layout.sub')

@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Contact Us</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <main id="body-content">

        <section class="wide-tb-100 pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <h1 class="heading-main">
                            <small>Get In Touch</small>
                            Contact With Us
                        </h1>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                            in the lives of the poor, the abused and the helpless. Spread sunshine in their lives no matter
                            what the weather may be.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-8 col-md-12 order-lg-last">
                        <div class="contact-wrap">
                            <div class="contact-icon-xl">
                                <i class="charity-love_hearts"></i>
                            </div>
                            <div id="sucessmessage"> </div>
                            <form action="#" method="post" id="contact_form" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" name="lastname" id="lastname" class="form-control"
                                                placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" name="email" id="email" class="form-control"
                                                placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="form-group">
                                            <input type="number" name="phone" id="phone" class="form-control"
                                                placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-0">
                                        <div class="form-group">
                                            <textarea name="comment" id="comment" class="form-control" rows="6" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary text-nowrap">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">

                        <div class="icon-box-4 bg-orange mb-4">
                            <i data-feather="map-pin"></i>
                            <h3>Our Address</h3>
                            <div>Envato Pty Ltd 13/2 Elizabeth St melbourne VLC 3000 Australia</div>
                        </div>


                        <div class="icon-box-4 bg-green mb-4">
                            <i data-feather="phone"></i>
                            <h3>Phone Number</h3>
                            <div>+1234567899<br>1-800-763-5400</div>
                        </div>


                        <div class="icon-box-4 bg-gray mb-4">
                            <i data-feather="mail"></i>
                            <h3>Email Address</h3>
                            <div><a
                                    href="https://mannatstudio.com/cdn-cgi/l/email-protection#9af3f4fcf5daf2f5eaffe8fbf3e9ffb4f9f5f7"><span
                                        class="__cf_email__"
                                        data-cfemail="7d14131b123d15120d180f1c140e18531e1210">[email&#160;protected]</span></a>
                            </div>
                            <div><a
                                    href="https://mannatstudio.com/cdn-cgi/l/email-protection#88fee7e4fde6fcededfac8e0e7f8edfae9e1fbeda6ebe7e5"><span
                                        class="__cf_email__"
                                        data-cfemail="2d5b424158435948485f6d45425d485f4c445e48034e4240">[email&#160;protected]</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="wide-tb-100">
            <div class="map-frame">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="callout-style-side-img d-lg-flex align-items-center top-broken-grid mb-0">
                            <div class="img-callout">
                                <img src="assets/images/callout_side_img.jpg" alt>
                            </div>
                            <div class="text-callout">
                                <div class="d-md-flex align-items-center">
                                    <div class="heading">
                                        <h2>Let Us Come Together To Make A Difference</h2>
                                    </div>
                                    <div class="icon">
                                        <a href="{{route('donations')}}" class="btn btn-default">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection

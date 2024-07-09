@extends('components.layout.sub')

@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Join As Volunteer</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Join As Volunteer</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <main id="body-content">

        <section class="wide-tb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="text-center">
                            <img src="https://i.pinimg.com/564x/91/55/e5/9155e5a4b803d9ec4e662ef655db7229.jpg" alt>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <h1 class="heading-main">
                            <small>Joining Process</small>
                            Requirements For A Volunteer
                        </h1>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused, the helpless, and endangered wildlife. Spread sunshine in their lives no matter what the weather may be.</p>
                        <div class="mb-5 mt-5">
                            <ul class="list-unstyled icons-listing theme-green">
                                <li>Passion and Commitment: A genuine desire to help those in need and protect wildlife.</li>
                                <li>Reliability: Consistent availability to volunteer as per the scheduled commitments.</li>
                                <li>Empathy and Compassion: The ability to understand and share the feelings of others.</li>
                                <li>Teamwork: Willingness to work collaboratively with other volunteers and staff members.</li>
                                <li>Adaptability: Flexibility to handle various tasks and adjust to changing situations.</li>
                                <li>Communication Skills: Clear and effective communication to interact with those we serve and fellow volunteers.</li>
                            </ul>
                        </div>
                        <p>By joining our team, you will be part of a dedicated community striving to make a meaningful impact. Together, we can create a brighter future for people and wildlife in need.</p>
                        <div class="d-flex">
                            <a class="nav-link btn btn-default mr-3" href="#volunteer">Join Now</a>
                            <div class="about-phone">
                                <i data-feather="phone-call"></i>
                                Conatct Us <br> +1234567899
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 map-bg bg-navy-blue pt-0" id="volunteer">
            <div class="container">
                <div class="pos-rel become-volunteers bg-orange">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-6 col-md-12">
                            <div class="inner-form">
                                <h1 class="heading-main light-mode">
                                    <small>Become A Volunteer</small>
                                </h1>
                                <div class="form">
                                    <form>
                                        <div class="form-group">
                                            <label for="fullname"><strong>Full Name</strong></label>
                                            <input type="text" class="form-control form-light" id="fullname">
                                        </div>
                                        <div class="form-group">
                                            <label for="email"><strong>Email Address</strong></label>
                                            <input type="email" class="form-control form-light" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone"><strong>Phone Number</strong></label>
                                            <input type="tel" class="form-control form-light" id="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="refrence"><strong>Refrence Contact</strong></label>
                                            <input type="tel" class="form-control form-light" id="refrence">
                                        </div>
                                        <div class="form-group">
                                            <label for="msg"><strong>Your Reason to join</strong></label>
                                            <textarea class="form-control form-light" rows="5" id="msg"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-outline-light mt-3">Send Request</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-12 volunteers-img-bg">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h1 class="heading-main light-mode">
                                <small>Help Other People</small>
                                We Dream to Create A Bright Future Of The Underprivileged Children
                            </h1>
                        </div>
                        <div class="col-sm-12 text-md-end">
                            <a href="{{route('donations')}}" class="btn btn-primary">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @include('components.partners')

    </main>
@endsection

@extends('components.layout.main')

@section('content')
    <section class="static-banner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="banner-text">
                        <h3>Hope and Healing</h3>
                        <h1>
                            Support Wildlife and Vulnerable Communities Today
                        </h1>
                        <div class="hstack">
                            <a class="btn btn-primary me-3" href="causes-list.html" role="button">Join Us Now</a>
                            <a class="slider-link popup-video" href="https://player.vimeo.com/video/7449107" target="_blank"
                                role="button">Watch the video <i class="charity-play_button"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner-img">
                        <img src="{{ asset('assets/images/volunteer-2.jpg') }}" alt>
                        <div class="funds-committed">
                            <small>Total Funds Committed</small>
                            <span class="counter">1,754,721</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <main id="body-content">

        <section class="welcom-section-3">
            <div class="hand-heart"><img src="assets/images/heart_hand.png" alt> </div>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 col-md-12">
                        <h1 class="heading-main light-mode">
                            <small>Welcome To Raise Hope</small>
                            Small Actions Lead To Big changes
                        </h1>
                        <p class="txt-white">
                            Every day, millions of people and countless wildlife species face incredible challenges. 14% of
                            the world’s population lives without hope in unimaginable conditions, struggling with
                            homelessness and displacement. At the same time, many wildlife species are on the brink of
                            extinction due to habitat loss and environmental threats.
                        </p>
                        <div class="row my-5 align-items-center home-second-welcome">

                            <div class="col-sm-6 mb-sm-0">
                                <div class="icon-box-1">
                                    <i class="charity-volunteer_people"></i>
                                    <div class="text">
                                        <h3>3,750 <br> <span>Dedicated Volunteers</span></h3>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="icon-box-1">
                                    <i class="charity-donate_money"></i>
                                    <div class="text">
                                        <h3>$1,754,721 <br> <span>Trusted Funds Donated</span></h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="spacer-60 border-top"></div>
                        <a href="{{ route('becomeAVolunteer') }}" class="btn btn-default">Become a Volunteer</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="row mt-md-5">
                            <div class="col-lg-6 col-md-6 mb-0">

                                <div class="icon-box-2">
                                    <div class="icon-font">
                                        <i class="charity-healthy_food"></i>
                                    </div>
                                    <div class="text">
                                        <h3>Help For Food</h3>
                                        <p>Providing nourishing meals to those in need and sustainable feeding programs for
                                            wildlife. Together, we can ensure no one—human or animal—goes hungry.</p>
                                        <div class="text-md-end">
                                            <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="icon-box-2 bg-white">
                                    <div class="icon-font">
                                        <i class="charity-water_drops"></i>
                                    </div>
                                    <div class="text">
                                        <h3>Help For Water</h3>
                                        <p>Bringing clean, safe water to communities and restoring natural water sources for
                                            wildlife. Access to clean water is a basic right for all living beings.</p>
                                        <div class="text-md-end">
                                            <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6">

                                <div class="icon-box-2 mt-lg-5 bg-white">
                                    <div class="icon-font">
                                        <i class="charity-school_icon"></i>
                                    </div>
                                    <div class="text">
                                        <h3>Help For Education</h3>
                                        <p>Empowering people through education and fostering a greater understanding of
                                            wildlife conservation. Education transforms lives and protects our planet.</p>
                                        <div class="text-md-end">
                                            <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="icon-box-2">
                                    <div class="icon-font">
                                        <i class="charity-medical_emergency"></i>
                                    </div>
                                    <div class="text">
                                        <h3>Help For Health</h3>
                                        <p>A wonderful serenity has taken possession of my entire soul</p>
                                        <div class="text-md-end">
                                            <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 bg-white pb-0 featured-causes-img-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="featured-content">
                            <h1 class="heading-main">
                                <small>Featured Cause</small>
                                Emergency Relief Donations for a Mighty Cause
                            </h1>
                            <p>In times of crisis, your support makes a world of difference. Our emergency relief fund
                                provides immediate assistance to wildlife and displaced communities affected by disasters
                                and emergencies worldwide. Your donations enable us to deliver essential supplies like food,
                                water, shelter, and medical aid swiftly and efficiently. Together, we can provide hope and
                                rebuild lives.</p>
                            <div class="featured-cause-timer">
                                <h3><strong class="txt-orange">$75,864</strong> pledged of <strong
                                        class="txt-blue">$100,000</strong></h3>
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-bar"></div>
                                </div>
                                <ul id="featured-cause" class="list-unstyled list-inline">
                                    <li class="list-inline-item"><span class="days">00</span>
                                        <div class="days_text">Days</div>
                                    </li>
                                    <li class="list-inline-item"><span class="hours">00</span>
                                        <div class="hours_text">Hours</div>
                                    </li>
                                    <li class="list-inline-item"><span class="minutes">00</span>
                                        <div class="minutes_text">Minutes</div>
                                    </li>
                                    <li class="list-inline-item"><span class="seconds">00</span>
                                        <div class="seconds_text">Seconds</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <a href="{{ route('donations') }}" class="btn btn-default">Donate Now</a>
                                <div class="share-on-text">
                                    <strong>Share On</strong> <a href="#"><img
                                            src="{{ asset('assets/images/facebook.svg') }}" alt></a> <a
                                        href="#"><img src="assets/images/instagram.svg" alt></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-causes-img-2">
                            <img src="{{ asset('assets/images/causes/featured_cause_2.jpg') }}" alt>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-4 col-md-6">
                        <h1 class="heading-main">
                            <small>Help Us Now</small>
                            More Recent Causes
                        </h1>
                    </div>
                    <div class="col-lg-8 col-md-6 text-md-end btn-team">
                        <a href="causes-list.html" class="btn btn-outline-dark">View All Causes</a>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="home-second-causes">

                    <div class="item">
                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="causes-single.html"><img src="assets/images/causes/causes_img_1.jpg" alt></a>
                                <div class="Donated-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $10086 Donated of $15000
                                        </div>
                                        <div class="skillbar" data-percent="67%">
                                            <div class="skillbar-percent">67%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">Education</span>
                                <h3><a href="causes-single.html">Education for Poor Childrens</a></h3>
                                <p>Inventore veritatis et quasi archit see ecto beatae vitae dicta sunt explaemo enim
                                    voluptatem quia</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="causes-single.html">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="causes-single.html"><img src="assets/images/causes/causes_img_2.jpg" alt></a>
                                <div class="Donated-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $10086 Donated of $15000
                                        </div>
                                        <div class="skillbar" data-percent="87%">
                                            <div class="skillbar-percent">87%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">People</span>
                                <h3><a href="causes-single.html">Help For Homeless People</a></h3>
                                <p>Inventore veritatis et quasi archit see ecto beatae vitae dicta sunt explaemo enim
                                    voluptatem quia</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="causes-single.html">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="causes-single.html"><img src="assets/images/causes/causes_img_3.jpg" alt></a>
                                <div class="Donated-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $10086 Donated of $15000
                                        </div>
                                        <div class="skillbar" data-percent="57%">
                                            <div class="skillbar-percent">57%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">Health</span>
                                <h3><a href="causes-single.html">Supply Water For Good Health</a></h3>
                                <p>Inventore veritatis et quasi archit see ecto beatae vitae dicta sunt explaemo enim
                                    voluptatem quia</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="causes-single.html">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="causes-single.html"><img src="assets/images/causes/causes_img_4.jpg" alt></a>
                                <div class="Donated-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $10086 Donated of $15000
                                        </div>
                                        <div class="skillbar" data-percent="80%">
                                            <div class="skillbar-percent">80%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">Education</span>
                                <h3><a href="causes-single.html">Help For Child Malnutrition</a></h3>
                                <p>Inventore veritatis et quasi archit see ecto beatae vitae dicta sunt explaemo enim
                                    voluptatem quia</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="causes-single.html">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="causes-single.html"><img src="assets/images/causes/causes_img_5.jpg" alt></a>
                                <div class="Donated-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $10086 Donated of $15000
                                        </div>
                                        <div class="skillbar" data-percent="77%">
                                            <div class="skillbar-percent">77%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">People</span>
                                <h3><a href="causes-single.html">Help For Good Food</a></h3>
                                <p>Inventore veritatis et quasi archit see ecto beatae vitae dicta sunt explaemo enim
                                    voluptatem quia</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="causes-single.html">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="causes-single.html"><img src="assets/images/causes/causes_img_6.jpg" alt></a>
                                <div class="Donated-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $10086 Donated of $15000
                                        </div>
                                        <div class="skillbar" data-percent="70%">
                                            <div class="skillbar-percent">70%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">Health</span>
                                <h3><a href="causes-single.html">Help From Natural Disaster</a></h3>
                                <p>Inventore veritatis et quasi archit see ecto beatae vitae dicta sunt explaemo enim
                                    voluptatem quia</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="causes-single.html">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="wide-tb-100 bg-scroll bg-img-1 pos-rel callout-style-1">
            <div class="bg-overlay black opacity-50"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="heading-main light-mode orange">
                            <small>Our Statistics</small>
                            We Provide Effortless Help To People
                        </h1>
                        <p>At [Your Charity Name], we believe in making a meaningful impact with ease. Through our dedicated volunteers and trusted partnerships, we provide seamless support to both people in need and wildlife facing critical challenges. From emergency relief to sustainable development projects, your contributions ensure that assistance reaches those who need it most. Join us in making a difference effortlessly. </p>
                        <div class="row mt-5">

                            <div class="col col-12 col-lg-6 col-sm-6 mb-sm-0">
                                <div class="counter-style-box bg-dark-shade bg-green">
                                    <div class="counter-txt"><span class="counter">180</span>+</div>
                                    <h4>Fundraising & Donation Campaign </h4>
                                </div>
                            </div>


                            <div class="col col-12 col-lg-6 col-sm-6">
                                <div class="counter-style-box bg-dark-shade bg-orange">
                                    <div class="counter-txt"><span class="counter">7120</span>+</div>
                                    <h4>Success Full Project Complate</h4>
                                </div>
                            </div>

                        </div>
                        <div class="spacer-40"></div>
                        <div class="row">

                            <div class="col col-12 col-lg-6 col-sm-6 offset-lg-2  mb-sm-0">
                                <div class="counter-style-box">
                                    <div class="counter-txt"><span class="counter">250</span>+</div>
                                    <h4>Award Winning Campaign</h4>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="become-volunteers-links">
                                    <a href="{{route('becomeAVolunteer')}}">
                                        <i class="icofont-plus"></i>
                                        <h3>Become a Volunteer</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="text-center">
                            <img src="assets/images/about_img.png" alt>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <h1 class="heading-main">
                            <small>About Us</small>
                            Step Forward Serve The Huminity Reach Out & Help
                        </h1>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused, and the helpless. Together, let's spread sunshine in their lives, no matter what the weather may be.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 pattern-green pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="heading-main light-mode green">
                            <small>Donation</small>
                            Don't Let Poverty Destroy Someone's Dreams
                        </h1>
                        <p class="txt-white">The key to happiness lies in helping others, whether they are struggling humans or endangered wildlife. Your impact can transform the lives of the poor, the abused, and the helpless, alongside preserving the habitats of our planet's most vulnerable species. Let's bring warmth and hope to those in need, regardless of the challenges they face.</p>
                        <div class="our-donator-slider">
                            <div class="our-donator-slider-warp">
                                <h3>Our Donators</h3>
                                <div class="owl-carousel owl-theme" id="our-donator-slider-warp">

                                    @foreach ($users as $user)
                                    <div class="item">
                                        <div class="our-donators-slide">
                                            <img src="{{ $user['thumbnail'] }}" alt>
                                            <div>
                                                <h4 class="name">{{ $user['name'] }} </h4>
                                                <div class="money">Donated ${{ $user['amount'] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <a class="btn btn-secondary mr-3" href="{{route('becomeAVolunteer')}}">Become a Volunteer</a>
                            <div class="about-phone light-color">
                                <i data-feather="phone-call"></i>
                                Conatct Us <br> +1234567899
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 offset-lg-1 mt-5 mt-lg-0">
                        <div class="home-second-donation-form img">
                            <form class="form-style">
                                <h3 class="h3-sm fw-7 txt-white mb-3">Easy Donation</h3>
                                <div class="form-group">
                                    <label for="name"><strong>Full Name</strong></label>
                                    <input type="text" class="form-control form-light" id="name"
                                        placeholder="e.g John Doe">
                                </div>
                                <div class="form-group">
                                    <label for="email"><strong>Email Address</strong></label>
                                    <input type="email" class="form-control form-light" id="email"
                                        placeholder="e.g example@sitename.com">
                                </div>
                                <div class="form-group">
                                    <label for="state"><strong>Select Causes</strong></label>
                                    <select class="theme-combo home-charity" id="state" name="state"
                                        style="height: 400px">
                                        <option>Select Causes</option>
                                        <option value="Charity For Food">Charity For Food</option>
                                        <option value="Charity For Education">Charity For Education</option>
                                        <option value="Charity For Medical">Charity For Medical</option>
                                        <option value="Charity For Water">Charity For Water</option>
                                        <option value="Charity For Natural Disaster">Charity For Natural Disaster</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div><label for="customRadioInline1"><strong>Amount</strong></label></div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-light" type="radio" name="Amount"
                                            id="amount1" value="option1">
                                        <label class="form-check-label label-dark" for="amount1">$10</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-light" type="radio" name="Amount"
                                            id="amount2" value="option2">
                                        <label class="form-check-label label-dark" for="amount2">$20</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-light" type="radio" name="Amount"
                                            id="amount3" value="option3">
                                        <label class="form-check-label label-dark" for="amount3">$30</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-light" type="radio" name="Amount"
                                            id="amount4" value="option3">
                                        <label class="form-check-label label-dark" for="amount4">$40</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-light" type="radio" name="Amount"
                                            id="amount5" value="option3">
                                        <label class="form-check-label label-dark" for="amount5">$50</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-light" type="radio" name="Amount"
                                            id="amount6" value="option3">
                                        <label class="form-check-label label-dark" for="amount6">$100</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-light" type="radio" name="Amount"
                                            id="amount7" value="option3">
                                        <label class="form-check-label label-dark" for="amount7">$500</label>
                                    </div>
                                    <div class="mt-3">
                                        <input type="text" class="form-control form-light" id="custom"
                                            placeholder="Custom Amount">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div><label for="paymentForm"><strong>Payment Method</strong></label></div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-light" type="radio" name="Payment_Method"
                                            id="Test_Donation" value="option1">
                                        <label class="form-check-label label-dark" for="Test_Donation">Test
                                            Donation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-light" type="radio" name="Payment_Method"
                                            id="Offline_Donation" value="option1">
                                        <label class="form-check-label label-dark" for="Offline_Donation">Offline
                                            Donation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-light" type="radio" name="Payment_Method"
                                            id="Credit_Card" value="option1">
                                        <label class="form-check-label label-dark" for="Credit_Card">Credit Card</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default mt-3 btn-block">Donate now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100">
            <div class="container top-event-spacing">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-6 col-md-8">
                        <h1 class="heading-main">
                            <small>Join Us</small>
                            Reach Out & Help In Our Latest Events
                        </h1>
                    </div>
                    <div class="col-lg-6 col-md-4 text-md-end btn-team">
                        <a href="events-list.html" class="btn btn-outline-dark">View All Events</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-wrap">

                            <div class="img-wrap">
                                <a href="events-single.html"><img src="assets/images/events/event_img_1.jpg" alt></a>
                            </div>
                            <div class="content-wrap">
                                <div class="date-wrap d-lg-flex align-items-end">
                                    <div class="date-box">
                                        05 <span>Aug</span>
                                    </div>
                                    <div class="event-details">
                                        <div><i data-feather="clock"></i> 09:00 Am</div>
                                        <div><i data-feather="map-pin"></i> Midpoint Center</div>
                                    </div>
                                </div>
                                <h3><a href="events-single.html">Everyone Let’s Run For The Humanity This Time</a></h3>
                                <p>Throughout the year the Foundation participates in many charitable events; put on both by
                                    the USBG Foundation and by our friends.</p>
                            </div>
                            <div class="text-md-end read-more-wrap">
                                <a href="events-single.html" class="read-more-line"><span>Read More</span></a>
                            </div>

                        </div>
                    </div>

                    <div class="w-100 d-none d-sm-none d-lg-none spacer-60 d-md-block"></div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 bg-white">
            <div class="container">
                <h1 class="heading-main">
                    <small>Our Testimonials</small>
                    What People Say
                </h1>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme" id="home-client-testimonials">

                            <div class="item">
                                <div class="client-testimonial dark">
                                    <div class="client-inner-content">
                                        <i class="charity-quotes"></i>
                                        <p>I never thought my small donation could make such a big difference. Seeing the impact on both communities and wildlife has been truly heartwarming. Thank you, Raise Hope!</p>
                                    </div>
                                    <div class="client-testimonial-icon">
                                        <img src="https://i.pinimg.com/564x/8b/bc/a2/8bbca2b6b29d1b33c7779618d699e3ca.jpg" alt>
                                        <div class="text">
                                            <div class="name">Morgane Renard</div>
                                            <div class="post">Activist</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="client-testimonial dark">
                                    <div class="client-inner-content">
                                        <i class="charity-quotes"></i>
                                        <p>Raising awareness and providing aid for people and wildlife in crisis—it's what Raise Hope does best. Proud to be part of their mission.</p>
                                    </div>
                                    <div class="client-testimonial-icon">
                                        <img src="https://i.pinimg.com/564x/87/13/e5/8713e5a4996b69964a57527507ac53ed.jpg" alt>
                                        <div class="text">
                                            <div class="name">Graciela Caballero</div>
                                            <div class="post"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="client-testimonial dark">
                                    <div class="client-inner-content">
                                        <i class="charity-quotes"></i>
                                        <p>From feeding the hungry to protecting endangered species, Raise Hope's holistic approach to charity is unmatched. They're making a real, lasting impact.</p>
                                    </div>
                                    <div class="client-testimonial-icon">
                                        <img src="https://i.pinimg.com/564x/2d/6c/01/2d6c018905526feb388fe7ee09a4096d.jpg" alt>
                                        <div class="text">
                                            <div class="name">Brooklyn Bradley</div>
                                            <div class="post"> Activist</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="client-testimonial dark">
                                    <div class="client-inner-content">
                                        <i class="charity-quotes"></i>
                                        <p>I've seen firsthand how your initiatives empower communities. Your work is changing lives for the better.</p>
                                    </div>
                                    <div class="client-testimonial-icon">
                                        <img src="https://i.pinimg.com/736x/97/53/0a/97530a744fb6db6ef97fd8e43f9f41c0.jpg" alt>
                                        <div class="text">
                                            <div class="name">Lia Da Silva</div>
                                            <div class="post"> Activist</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 pb-0 home-blog-post-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <h1 class="heading-main">
                            <small>News & Blogs</small>
                            Some Of Our Recent Stories & News Blog
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme" id="home-blog-post">

                            <div class="item">
                                <div class="blog-post-broken">
                                    <div class="post-img">
                                        <a href="blog-single.html"><img src="assets/images/blogs/blog_img_1.jpg" alt></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-date">17, Aug, 2020</div>
                                        <h3 class="post-title"><a href="blog-single.html">Grant Distributions Continue to
                                                Increase</a></h3>
                                        <div class="post-category">Food Charity</div>
                                        <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                            aliquet</p>
                                        <div class="text-md-end">
                                            <a href="blog-single.html" class="read-more-line"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="blog-post-broken">
                                    <div class="post-img">
                                        <a href="blog-single.html"><img src="assets/images/blogs/blog_img_2.jpg" alt></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-date">17, Aug, 2020</div>
                                        <h3 class="post-title"><a href="blog-single.html">Grant Distributions Continue to
                                                Increase</a></h3>
                                        <div class="post-category">Food Charity</div>
                                        <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                            aliquet</p>
                                        <div class="text-md-end">
                                            <a href="blog-single.html" class="read-more-line"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="blog-post-broken">
                                    <div class="post-img">
                                        <a href="blog-single.html"><img src="assets/images/blogs/blog_img_3.jpg" alt></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-date">17, Aug, 2020</div>
                                        <h3 class="post-title"><a href="blog-single.html">Grant Distributions Continue to
                                                Increase</a></h3>
                                        <div class="post-category">Food Charity</div>
                                        <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                            aliquet</p>
                                        <div class="text-md-end">
                                            <a href="blog-single.html" class="read-more-line"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="blog-post-broken">
                                    <div class="post-img">
                                        <a href="blog-single.html"><img src="assets/images/blogs/blog_img_4.jpg" alt></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-date">17, Aug, 2020</div>
                                        <h3 class="post-title"><a href="blog-single.html">Grant Distributions Continue to
                                                Increase</a></h3>
                                        <div class="post-category">Food Charity</div>
                                        <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                            aliquet</p>
                                        <div class="text-md-end">
                                            <a href="blog-single.html" class="read-more-line"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="heading-main">
                            <small>Global Providers</small>
                            Our World Wide Partner
                        </h1>
                    </div>
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme" id="home-clients">

                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client1.png" alt>
                                </div>
                            </div>


                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client2.png" alt>
                                </div>
                            </div>


                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client3.png" alt>
                                </div>
                            </div>


                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client4.png" alt>
                                </div>
                            </div>


                            <div class="item">
                                <div class="clients-logo">
                                    <img src="assets/images/clients/client5.png" alt>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

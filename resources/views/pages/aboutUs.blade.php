@extends('components.layout.sub')

@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>About Us</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                            <img src="https://i.pinimg.com/564x/14/82/1b/14821b44b6ba11efaec69dc9ffea4e39.jpg" alt>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <h1 class="heading-main">
                            <small>About Us</small>
                            Step Forward Serve The Huminity Reach Out & Help
                        </h1>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                            in the lives of the poor, the abused and the helpless. Spread sunshine in their lives no matter
                            what the weather may be.</p>
                        <div class="icon-box-1 my-4">
                            <i class="charity-volunteer_people"></i>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 bg-white mb-spacer-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <h1 class="heading-main">
                            <small>Get to Know Us</small>
                            Let Us Come Together To Make a Difference
                        </h1>
                        <p>At [Your Charity Name], we believe in the power of community and compassion. Our mission is to provide essential support to homeless individuals, displaced communities, and to protect and preserve wildlife. Together, we can create a brighter future for all.</p>

                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Food Help
                            </div>
                            <div class="skillbar" data-percent="67%">
                                <div class="skillbar-percent">67%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>


                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Medical Help
                            </div>
                            <div class="skillbar" data-percent="75%">
                                <div class="skillbar-percent">75%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>

                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Financial Aid
                            </div>
                            <div class="skillbar" data-percent="82%">
                                <div class="skillbar-percent">82%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>

                    </div>

                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>

                    <div class="col-lg-7 col-md-12">

                        <ul class="nav nav-pills theme-tabbing mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill"
                                    href="#pills-mission" role="tab" aria-controls="pills-mission"
                                    aria-selected="true">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-vision-tab" data-bs-toggle="pill" href="#pills-vision"
                                    role="tab" aria-controls="pills-vision" aria-selected="false">Our Vision</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-history-tab" data-bs-toggle="pill" href="#pills-history"
                                    role="tab" aria-controls="pills-history" aria-selected="false">Our History</a>
                            </li>
                        </ul>
                        <div class="tab-content theme-tabbing" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-mission" role="tabpanel"
                                aria-labelledby="pills-mission-tab">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="about-img-small">
                                            <img src="https://i.pinimg.com/564x/f4/41/6f/f4416f41cb700ffa3223d08ce95188f7.jpg" class="about-us-2" alt>
                                            <div class="since-year">
                                                <span>Since</span>
                                                14
                                                <span class="text-end">Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list-unstyled icons-listing theme-orange mb-0">
                                            <li>Support the Homeless: Providing shelter, food, and essential services to those in need.</li>
                                            <li>Aid Displaced Communities: Offering relief and assistance to those affected by displacement.</li>
                                            <li>Conserve Wildlife: Implementing initiatives to protect endangered species and their habitats.
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="about-img-small">
                                            <img src="https://i.pinimg.com/564x/81/78/1b/81781bf12df99051d3c76a36a0804130.jpg" class="about-us-2" alt>
                                            <div class="since-year">
                                                <span>Since</span>
                                                14
                                                <span class="text-end">Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list-unstyled icons-listing theme-orange mb-0">
                                            <li>Our vision is a world where no one is left behind, and every living being thrives. We aspire to build a compassionate society where every homeless individual finds shelter, every displaced person finds stability, and every wildlife species flourishes in their natural habitat.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-history" role="tabpanel"
                                aria-labelledby="pills-history-tab">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="about-img-small">
                                            <img src="https://i.pinimg.com/564x/26/d7/c4/26d7c4227a347e1d80751728c4e7315e.jpg" class="about-us-2" alt>
                                            <div class="since-year">
                                                <span>Since</span>
                                                14
                                                <span class="text-end">Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list-unstyled icons-listing theme-orange mb-0">
                                            <li>[Your Charity Name] was founded in [Year] with a heartfelt commitment to addressing the urgent needs of vulnerable populations and wildlife. Our journey began with a small group of dedicated volunteers who believed in the power of collective action. Over the years, we have grown into a robust organization, making significant strides in providing shelter and support to the homeless, aiding displaced communities, and implementing vital wildlife conservation projects.</li>
                                            <li>From our humble beginnings to our present-day impact, our unwavering dedication to creating positive change has been the cornerstone of our work. Each milestone achieved and every life touched fuels our passion to continue our mission, ensuring that hope and help are always within reach.</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 team-bg mb-spacer-md">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-4 col-md-6">
                        <h1 class="heading-main">
                            <small>Team Member</small>
                            Our Expert Volunteer
                        </h1>
                    </div>
                    <div class="col-lg-8 col-md-6 text-md-end btn-team">
                        <a href="#" class="btn btn-outline-dark">View All Members</a>
                    </div>
                </div>
                <div class="row">

                    @foreach ($volunteers as $volunteers)
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="team-section-wrap mb-0">
                            <div class="img green">
                                <div class="social-icons">
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </div>
                                <img src="{{ $volunteers['thumbnail'] }}" alt class="rounded-circle">
                            </div>
                            <h4>{{ $volunteers['name'] }}</h4>
                            <h5>Volunteer</h5>
                            <div class="text-md-end">
                                <a href="#" class="read-more-line"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

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


        <section class="wide-tb-150 bg-scroll bg-img-6 pos-rel callout-style-1">
            <div class="bg-overlay blue opacity-80"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="heading-main light-mode">
                            <small>Help Other People</small>
                            We Dream to Create A Bright Future Of The Underprivileged Children
                        </h1>
                    </div>
                    <div class="col-sm-12 text-md-end">
                        <a href="{{route('donations')}}" class="btn btn-default">Donate Now</a>
                    </div>
                </div>
            </div>
        </section>


        @include('components.partners')

    </main>
@endsection

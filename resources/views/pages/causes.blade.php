@extends('components.layout.sub')

@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Explore Causes</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Explore Causes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <main id="body-content">

        <section class="wide-tb-100">
            <div class="container">
                <h1 class="heading-main">
                    <small>Help Us Now</small>
                    More Recent Causes
                </h1>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="{{route('cause1')}}"><img
                                        src="https://i.pinimg.com/564x/e4/ff/d4/e4ffd4725ffe644962fe990162e27bf9.jpg"
                                        alt></a>
                                <div class="raised-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $6,003,600 raised of $15,000,000
                                        </div>
                                        <div class="skillbar" data-percent="40%">
                                            <div class="skillbar-percent">40.02</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">Relief</span>
                                <h3><a href="{{route('cause1')}}">Emergency Relief for Displaced Ukrainian Families</a></h3>
                                <p>The ongoing conflict in Ukraine has left countless families without homes and basic
                                    necessities. Our emergency relief efforts provide food, shelter, medical supplies, and
                                    support to those affected by the war. Your donations help us bring immediate aid to
                                    those in crisis.</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="{{route('donations')}}">Donate Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="{{route('cause2')}}"><img src="https://i.pinimg.com/564x/45/d5/72/45d57274ffff88c31e583c94f926fe42.jpg" alt></a>
                                <div class="raised-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $10,086 raised of $150,000
                                        </div>
                                        <div class="skillbar" data-percent="7%">
                                            <div class="skillbar-percent">6.73%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">Wildlife</span>
                                <h3><a href="{{route('cause2')}}">Wildlife Rescue Amidst Conflict Zones in Ukraine</a></h3>
                                <p>The war in Ukraine has not only affected humans but also endangered wildlife. We are
                                    working to rescue and rehabilitate animals trapped in conflict zones, providing them
                                    with safe havens and medical care. Your support ensures these innocent lives are
                                    protected during turbulent times.</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="{{route('donations')}}">Donate Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="https://www.ifaw.org/international/press-releases/new-nature-reserve-rescued-wildlife-ukraine"><img src="https://i.pinimg.com/564x/c4/a1/23/c4a12344bf2b646aaf5ea35e88c7f475.jpg" alt></a>
                                <div class="raised-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $70,650 raised of $1,000,000
                                        </div>
                                        <div class="skillbar" data-percent="7%">
                                            <div class="skillbar-percent">7.06%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">Wildlife</span>
                                <h3><a href="https://www.ifaw.org/international/press-releases/new-nature-reserve-rescued-wildlife-ukraine">Protecting Endangered Species in Ukraine</a></h3>
                                <p>Ukraine is home to a variety of endangered species that are now at greater risk due to
                                    the conflict. Our conservation efforts focus on protecting these species and their
                                    habitats from the adverse effects of war, including pollution and habitat destruction.
                                </p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="{{route('donations')}}">Donate Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="{{route('error')}}"><img src="https://i.pinimg.com/564x/e1/6e/47/e16e474f1d4e7c1a7361a559d959df5b.jpg" alt></a>
                                <div class="raised-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $440,250 raised of $800,000
                                        </div>
                                        <div class="skillbar" data-percent="55%">
                                            <div class="skillbar-percent">55.03%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">People</span>
                                <h3><a href="https://www.aa.com.tr/en/africa/the-human-cost-of-tanzanias-anti-poaching-laws/3258404">Anti-Poaching and Wildlife Protection Initiatives</a></h3>
                                <p>Poaching remains a critical threat to many species. Our anti-poaching initiatives involve
                                    patrolling protected areas, rescuing injured animals, and supporting local communities
                                    to prevent poaching. Your support helps us safeguard wildlife from illegal hunting and
                                    exploitation.</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="{{route('donations')}}">Donate Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="https://www.aa.com.tr/en/africa/the-human-cost-of-tanzanias-anti-poaching-laws/3258404"><img src="https://i.pinimg.com/564x/02/0a/50/020a508fc3c808d59b1517c5bf891e4b.jpg" alt></a>
                                <div class="raised-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $110,300 raised of $1,200,00
                                        </div>
                                        <div class="skillbar" data-percent="15%">
                                            <div class="skillbar-percent">9.19%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">Wildlife</span>
                                <h3><a href="{{route('error')}}">Rehabilitating War-Affected Ecosystems</a></h3>
                                <p>The war has severely impacted Ukraine’s natural ecosystems. We are committed to restoring
                                    damaged landscapes, cleaning up polluted areas, and reintroducing native species to
                                    ensure the long-term health and biodiversity of Ukraine’s natural environment.</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="{{route('donations')}}">Donate Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="{{route('error')}}"><img src="https://i.pinimg.com/564x/59/aa/e6/59aae6606319163b372f60be0bf2ed76.jpg" alt></a>
                                <div class="raised-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            $238,460 raised of $600,000
                                        </div>
                                        <div class="skillbar" data-percent="40%">
                                            <div class="skillbar-percent">39.74%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">Health</span>
                                <h3><a href="{{route('error')}}">Help From Natural Disaster</a></h3>
                                <p>Inventore veritatis et quasi archit see ecto beatae vitae dicta sunt explaemo enim
                                    voluptatem quia</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="{{route('donations')}}">Donate Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-150 bg-white featured-heart-icon-hidden">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="featured-causes-img">
                            <img src="assets/images/causes/featured_cause.jpg" alt>
                            <div class="featured-cause-timer">
                                <h3><strong class="txt-orange">$1,750,864</strong> pledged of <strong
                                        class="txt-blue">$4,000,000</strong></h3>
                                <div class="skillbar" data-percent="43%">
                                    <div class="skillbar-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-content">
                            <div class="featured-heart-icon"><i class="charity-hearts"></i></div>
                            <h1 class="heading-main">
                                <small>Featured Cause</small>
                                Emergency Relief Donations for Ukraine Bombing Survivors
                            </h1>
                            <p>
                                Certainly! Here’s a revised version focusing on recent Ukraine bombing survivors:
                             
                                Emergency Relief Donations for Ukraine Bombing Survivors
                                In the wake of the recent bombings in Ukraine, countless individuals and families are in urgent need of assistance. Our emergency relief fund is dedicated to providing essential support to those affected by these devastating events. Your donations help us deliver critical supplies such as food, shelter, medical care, and emotional support to survivors of the bombings. 
                                </p>

                            <p>
                                Join us in bringing hope and relief to those who have endured unimaginable hardships. Together, we can make a life-saving difference.
                            </p>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <a href="{{route('donations')}}" class="btn btn-defaul{{route('donations')}}">Donate Now</a>
                                <div class="share-on-text">
                                    <strong>Share On</strong> <a href="#"><img src="assets/images/facebook.svg"
                                            alt></a> <a href="#"><img src="assets/images/instagram.svg" alt></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('components.partners')

    </main>
@endsection

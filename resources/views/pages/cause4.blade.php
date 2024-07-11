@extends('components.layout.sub')

@section('content')
<section class="breadcrumbs-page-wrap">
    <div class="bg-fixed pos-rel breadcrumbs-page">
      <div class="container">
        <h1>Emergency Relief for Displaced Ukrainian Families</h1>
        <nav aria-label="breadcrumb" class="breadcrumb-wrap">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Emergency Relief for Displaced Ukrainian Families
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <main id="body-content">
    <section class="wide-tb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-12">
            <div class="sidebar-spacer">
              <h1 class="heading-main">
                <small>Help Us Now</small>
                Emergency Relief for Displaced Ukrainian Families
              </h1>

              <div class="causes-wrap single">
                <div class="img-wrap">
                  <span class="tag-single">Relief</span>
                  <img src="https://www.unhcr.org/sites/default/files/styles/standard_08/public/2023-03/rf1260853_2.webp?h=f2790038&itok=TOv29_oJ" alt />
                </div>
                <div class="content-wrap-single">
                  <div class="featured-cause-timer">
                    <h3>
                      <strong class="txt-orange">$6,003,600</strong> pledged of
                      <strong class="txt-blue">$15,000,000</strong>
                    </h3>
                    <div class="skillbar" data-percent="40%">
                      <div class="skillbar-percent">
                        <h3><strong>40.02%</strong></h3>
                      </div>
                      <div class="skillbar-bar"></div>
                    </div>
                    <div
                      class="d-md-flex align-items-end justify-content-between">
                      <ul
                        id="featured-cause"
                        class="list-unstyled list-inline w-50">
                        <li class="list-inline-item">
                          <span class="days">00</span>
                          <div class="days_text">Days</div>
                        </li>
                        <li class="list-inline-item">
                          <span class="hours">00</span>
                          <div class="hours_text">Hours</div>
                        </li>
                        <li class="list-inline-item">
                          <span class="minutes">00</span>
                          <div class="minutes_text">Minutes</div>
                        </li>
                        <li class="list-inline-item">
                          <span class="seconds">00</span>
                          <div class="seconds_text">Seconds</div>
                        </li>
                      </ul>
                      <a
                        class="btn-outline-default btn"
                        href="{{route('donations')}}"
                        >Donate Now</a
                      >
                    </div>
                  </div>
                </div>
                <div class="content-wrap-single border-top">
                  <p>
                    In the wake of recent conflicts in Ukraine, countless families have been forced to flee their homes, leaving behind everything they know and love. Our emergency relief efforts are focused on providing immediate support to these displaced families, ensuring they have access to food, shelter, medical care, and emotional support.
                  </p>
                  <p>
                    Your donations play a crucial role in helping us deliver these essential services. With your support, we can bring hope and stability to those who have lost so much.
                  </p>
                  <div class="row my-5">
                    <div class="col-md-6">
                      <img
                        src="https://i.pinimg.com/564x/8b/d6/6a/8bd66a03f3f2ed70e05b5012b8a29ff5.jpg"
                        class="rounded"
                        alt />
                    </div>
                    <div class="col-md-6">
                      <img
                        src="https://i.pinimg.com/564x/ff/3e/1c/ff3e1cab6515a38497bc75f434867ddb.jpg"
                        class="rounded"
                        alt />
                    </div>
                  </div>
                  <h3>Summary</h3>
                  <p>
                    The ongoing conflict in Ukraine has displaced numerous families, creating an urgent need for basic necessities. Our organization is committed to offering comprehensive relief efforts to support these individuals in their time of need.
                  </p>
                  <h3>Challenge</h3>
                  <p>
                    Providing relief in conflict zones presents significant challenges, including ensuring safe delivery of aid, addressing the diverse needs of displaced populations, and overcoming logistical hurdles. Despite these difficulties, we remain dedicated to our mission of supporting those affected by the conflict in Ukraine.
                  </p>
                </div>
                <div class="share-this-wrap">
                  <div class="share-line">
                    <div class="pe-4">
                      <strong>Share This</strong>
                    </div>
                    <div class="ps-4">
                      <ul class="list-unstyled list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#"><i class="icofont-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"><i class="icofont-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"><i class="icofont-instagram"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <h1 class="heading-main mb-4">
                <small>Leave a Reply</small>
              </h1>
              <form class="comment-form">
                <div class="row">
                  <div class="col-md-12 mb-0">
                    <div class="form-group">
                      <textarea
                        class="form-control"
                        rows="5"
                        placeholder="Your Comments"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6 mb-0">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        placeholder="Your Name" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-0">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Your Email" />
                    </div>
                  </div>
                </div>
                <div
                  class="d-md-flex justify-content-between align-items-center mt-3">
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="inlineCheckbox2"
                      value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2"
                      >Save my name, email, and website in this browser for
                      the next time I comment.</label
                    >
                  </div>
                  <button type="submit" class="btn btn-default text-nowrap">
                    Post Comment
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-3 col-md-12">
            <aside class="row sidebar-widgets">
              <div class="sidebar-primary col-lg-12 col-md-6">
                <div class="widget-wrap">
                  <h3 class="widget-title">Recent Causes</h3>

                  <div class="causes-wrap">
                    <div class="img-wrap">
                      <a href="#"
                        ><img src="https://i.pinimg.com/564x/e8/df/b7/e8dfb7cacac3261dc2c1cf74742084f0.jpg" alt
                      /></a>
                      <div class="raised-progress">
                        <div class="skillbar-wrap">
                          <div class="clearfix">
                            <span class="txt-orange">$19,686</span> raised of
                            <span class="txt-green">$750,000</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="content-wrap">
                      <span class="tag">Wildlife</span>
                      <h3>
                        <a href="#"
                          >Conservation Efforts in Deforestation Areas</a
                        >
                      </h3>
                      <div class="text-md-end">
                        <a href="#" class="read-more-line"
                          ><span>Read More</span></a
                        >
                      </div>
                    </div>
                  </div>

                  <div class="causes-wrap">
                    <div class="img-wrap">
                      <a href="#"
                        ><img src="https://i.pinimg.com/564x/18/47/b8/1847b84df2a60024d5827ebea02a3aed.jpg" alt
                      /></a>
                      <div class="raised-progress">
                        <div class="skillbar-wrap">
                          <div class="clearfix">
                            <span class="txt-orange">$3,086</span> raised of
                            <span class="txt-green">$250,000</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="content-wrap">
                      <span class="tag">Wildlife</span>
                      <h3>
                        <a href="#"
                          >Saving Endangered Species from Illegal Trade</a
                        >
                      </h3>
                      <div class="text-md-end">
                        <a href="#" class="read-more-line"
                          ><span>Read More</span></a
                        >
                      </div>
                    </div>
                  </div>

                  <div class="causes-wrap">
                    <div class="img-wrap">
                      <a href="#"
                        ><img src="https://i.pinimg.com/564x/23/ea/e6/23eae689e9660f2af9f7b4cbfe9dc859.jpg" alt
                      /></a>
                      <div class="raised-progress">
                        <div class="skillbar-wrap">
                          <div class="clearfix">
                            <span class="txt-orange">$230,660</span> raised of
                            <span class="txt-green">$720,000</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="content-wrap">
                      <span class="tag">Education</span>
                      <h3>
                        <a href="#"
                          >Education and Awareness Campaigns</a
                        >
                      </h3>
                      <div class="text-md-end">
                        <a href="#" class="read-more-line"
                          ><span>Read More</span></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sidebar-secondary col-lg-12 col-md-6">
                <div class="widget-wrap">
                  <h3 class="widget-title">Our Donators</h3>
                  <div class="our-donators">
                    <ul class="list-unstyled">
                    @foreach ($volunteers as $volunteers)
                      <li>
                        <img src="{{ $volunteers['thumbnail'] }}" alt />
                        <div>
                          <h4 class="name">{{ $volunteers['name'] }}</h4>
                          <div class="money">Donated ${{ $volunteers['amount'] }}</div>
                        </div>
                      </li>
                    @endforeach
                    </ul>
                    <a
                      href="{{route('donations')}}"
                      class="btn-block btn btn-default"
                      >Become Donators</a
                    >
                  </div>
                </div>

                <div class="widget-wrap">
                  <h3 class="widget-title">Categories</h3>
                  <div class="blog-list-categories">
                    <ul class="list-unstyled icons-listing theme-orange mb-0">
                      <li><a href="#">Wildlife</a></li>
                      <li><a href="#">Healthcare</a></li>
                      <li><a href="#">Education</a></li>
                      <li><a href="#">Children</a></li>
                      <li><a href="#">Environment</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </aside>
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
              We Dream to Create A Bright Future Of The Underprivileged
              Children
            </h1>
          </div>
          <div class="col-sm-12 text-md-end">
            <a href="#" class="btn btn-default">Donate Now</a>
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
                  <img src="assets/images/clients/client1.png" alt />
                </div>
              </div>

              <div class="item">
                <div class="clients-logo">
                  <img src="assets/images/clients/client2.png" alt />
                </div>
              </div>

              <div class="item">
                <div class="clients-logo">
                  <img src="assets/images/clients/client3.png" alt />
                </div>
              </div>

              <div class="item">
                <div class="clients-logo">
                  <img src="assets/images/clients/client4.png" alt />
                </div>
              </div>

              <div class="item">
                <div class="clients-logo">
                  <img src="assets/images/clients/client5.png" alt />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

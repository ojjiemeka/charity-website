@extends('components.layout.sub')

@section('content')
    <main id="body-content" class="w-100 error-style">
        <div class="container">
            <div class="row align-items-center">
                <div class="row mt-5">
                    <div class="col-lg-12 col-md-12 order-lg-last">
                        <div class="contact-wrap">
                            <div class="contact-icon-xl">
                                <i class="charity-love_hearts"></i>
                            </div>
                            <div id="sucessmessage"></div>
                            <div class="mb-5">
                                <a href="{{route('donations')}}" class="btn btn-secondary" type="button">Back to home</a>
                            </div>
                            <div class="heading mb-3">
                                <h2 class="">Thank You for Your Generosity!</h2>
                                 <p>Your donation is currently set to remain {{ $data['anon_state'] }}. If you wish to make your donation known, please turn off the anonymous button before completing your donation.</p>
                            </div>
                            <form action="#" method="post" id="contact_form" novalidate="novalidate">
                                <div class="row team-bg">

                                    <div class="col-md-12 mb-3">
                                        <p>Name: {{ $data['fname'] }} {{ $data['lname'] }}</p>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <p>Email: {{ $data['email'] }}</p>
                                    </div>

                                    {{-- <div class="col-md-12 mb-3">
                                        <p>Phone: {{ $data['amount'] }}</p>
                                    </div> --}}

                                    <div class="col-md-12 mb-3 form-results">
                                        @if (!empty($data['cus_amount']))
                                            <p>Amount: ${{ $data['cus_amount'] }}</p>
                                        @elseif (!empty($data['amount']))
                                            <p>Amount: ${{ $data['amount'] }}</p>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <ul class="d-flex justify-content-between light mb-3 nav nav-pills theme-tabbing mb-4 mt-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                    href="#pills-home" role="tab" aria-controls="pills-home"
                                                    aria-selected="true">BTC</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                    href="#pills-profile" role="tab" aria-controls="pills-profile"
                                                    aria-selected="false">USDT</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-paypal-tab" data-bs-toggle="pill"
                                                    href="#pills-paypal" role="tab" aria-controls="pills-paypal"
                                                    aria-selected="false">Others</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content theme-tabbing" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                               <div class="">
                                                <div class="align-items-center mb-0">
                                                    <div class="form-group text-center">
                                                        <input type="text" name="name" id="name" class="text-center form-control"
                                                            value="bc1qskgptr84fmr6lde958374dywk70c3nzzn35eka" readonly />
                                                            <button type="submit" class="mt-3 btn btn-secondary text-nowrap">
                                                                copy
                                                            </button>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center mb-0">
                                                    <img src="{{asset('assets/images/btc.jpg')}}" alt="" class="w-50" srcset="">
                                                </div>
                                               </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <div class="">
                                                    <div class="align-items-center mb-0">
                                                        <div class="form-group text-center">
                                                            <input type="text" name="name" id="name" class="text-center form-control"
                                                                value="0xf0184459Fbd9801A91f446bA496514C1aCc119c5" readonly />
                                                                <button type="submit" class="mt-3 btn btn-secondary text-nowrap">
                                                                    copy
                                                                </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center mb-0">
                                                        <img src="{{asset('assets/images/usdt.jpg')}}" alt="" class="w-50" srcset="">
                                                    </div>
                                                   </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-paypal" role="tabpanel" aria-labelledby="pills-paypal-tab">
                                                    <h2 class="mb-3">Prefer to Donate Through CashApp, Venmo, or Wire Transfer?</h2>
                                                    <p>
                                                        We appreciate your willingness to support our cause! For donations via CashApp, Venmo, Wire Transfer, or other alternative payment methods, please send an email to <a class="text-danger" href="mailto:donations@raisehope.org">donations@raisehope.org</a> or contact our support team to make arrangements.
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

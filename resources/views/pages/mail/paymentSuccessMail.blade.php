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

                            <div class="heading mb-3z team-bg">
                                <h2 class=" text-center"> Thank You for Your Generous Donation!! </h2>
                                <div class="text-center">
                                    <img class="w-50" src="https://i.pinimg.com/564x/a1/35/a1/a135a1a05d33f466290a880e6d20e95e.jpg"
                                        alt="" srcset="">
                                </div>
                                {{-- <p>Dear {{$data['fname']}} ,</p> --}}
                                <p>We are delighted to inform you that your recent donation to Eurasia Wildlife Alliance was
                                    successfully processed. Thank you for your generosity and support!</p>

                                <div class="mt-5 mb-5">
                                    <h3 class="text-center mb-4">Donation Details:</h3>
                                    <div>

                                        {{-- @if (!empty($data['cus_amount']))
                                            <div class="d-flex justify-content-around">
                                                <p>Amount:</p>
                                                <p>
                                                    ${{ $data['cus_amount'] }}
                                                </p>
                                            </div>
                                        @elseif (!empty($data['amount']))
                                            <div class="d-flex justify-content-around">
                                                <p>Amount:</p>
                                                <p>
                                                    ${{ $data['amount'] }}
                                                </p>
                                            </div>
                                        @endif --}}

                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <p>Date:</p>
                                        {{-- <p>{{ $date }}</p> --}}
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <p>Transaction ID:</p>
                                        {{-- <p>{{ $transactionID }}</p> --}}
                                    </div>
                                </div>

                                <p>Your contribution plays a crucial role in supporting our efforts to provide aid to
                                    homeless individuals, displaced communities, and wildlife conservation. With your help,
                                    we can continue to bring hope and stability to those in need and protect our precious
                                    wildlife.</p>
                                <p>If you have any questions or need further assistance, please do not hesitate to contact
                                    us at <a class="text-danger" href="mailto:info@eurasiawildlifealliance.online">info@eurasiawildlifealliance.online</a>.</p>
                                    <div>
                                        <p>Eurasia Wildlife Alliance</p>
                                         <img src="https://www.earthisland.org/projects/logos/EWP_logo_Full_Color.png" style="width: 75px;" alt>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

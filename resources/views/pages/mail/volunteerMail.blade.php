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
                            
                            <div class="heading mb-3 team-bg">
                                <div>
                                    <img src="https://www.cta.org/wp-content/uploads/2020/10/Depositphotos_13845187_l-2015-1160x700.jpg" alt="" srcset="">
                                </div>
                                <h2 class="mb-4"> Thank You for Volunteering with Eurasia Wildlife Alliance! </h2>
                                 <p>Thank you {{$recipientName}}  for your interest in volunteering with Eurasia Wildlife Alliance! We are thrilled to welcome you to our team and appreciate your willingness to make a difference.</p>
                                 <p>Your application has been received, and we are currently processing it. Our team will review your information and get back to you shortly regarding the next steps in the volunteer onboarding process.</p>
                                 <p>At Eurasia Wildlife Alliance, volunteers like you are integral to our mission of supporting homeless individuals, displaced communities, and wildlife conservation. Your dedication will help us continue providing essential services and making a positive impact in our community.</p>
                                 <p>If you have any questions in the meantime or would like to learn more about our volunteer opportunities, please feel free to reach out to us at <a class="text-danger" href="mailto:info@eurasiawildlifealliance.online">info@eurasiawildlifealliance.online</a>.</p>
                                 <p>Thank you once again for choosing to volunteer with us. We look forward to working together and achieving great things!</p>
                                 <p>Your Full Name</p>
                                 <p>C.E.O</p>
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

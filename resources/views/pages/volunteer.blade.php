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
                                <h2 class=" text-center"> Your Request to Join Our Organization Has Been Received </h2>
                                <div class="mb-4 mt-4 text-center">
                                    <img class="" src="{{asset('assets/images/pending.png')}}"
                                        alt="" srcset="">
                                </div>
                                <p>
                                    We have successfully received your request to become a part of our mission to support homeless individuals, displaced communities, and wildlife conservation. We are thrilled to have individuals like you who are passionate about making a difference.
                                </p>

                                <div class="mt-3 mb-3">
                                    <h3 class="text-center fw-bold mb-4">What Happens Next?</h3>
                                    <div>
                                        <p>
                                            <strong>Review Process:</strong> Our team will carefully review your application to understand how your skills and enthusiasm can best contribute to our cause.
                                        </p>
                                        <p>
                                            <strong>Follow-Up:</strong> You will receive an email from us within the next few days with further details regarding your application status and the next steps.
                                        </p>
                                        <p>
                                            <strong>Orientation:</strong> If your application is accepted, we will schedule an orientation session to introduce you to our work, values, and the various ways you can get involved.
                                        </p>
                                    </div>
                                </div>
                                <h3 class="mt-5 fw-bold">Stay Connected</h3>

                                <p>
                                    If you have any questions or need further assistance, please do not hesitate to contact us at <a class="text-danger" href="mailto:info@eurasiawildlifealliance.online">info@eurasiawildlifealliance.online</a>.
                                </p>
                                <p>
                                    We look forward to the possibility of working together and making a positive impact!
                                </p>
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

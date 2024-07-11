@extends('components.layout.sub')

@section('content')
<main id="body-content" class="w-100 error-style">
    <div class="container">
      <div class="row align-items-center">
        
        <div class="col-lg-3">
          <h1 class="heading-main">
            <small>404 Error</small>
            Oops!
          </h1>
          <p>
            Something is broken, please try again later or go to home page
          </p>
          <a class="btn btn-primary mt-4" href="{{route('causes')}}">Back to Causes</a>
        </div>
        <div class="col-lg-9">
          <div class="text-center error-img">
            <img src="assets/images/404_img.png" alt />
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

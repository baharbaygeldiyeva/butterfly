@extends('layouts/blankLayout')

@section('title', 'Home')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
@endsection

@section('content')
   
            <!-- range -->
            <div class="col-lg-6 col-md-12 col-xs-12 order-1 d-flex flex-column justify-content-center px-9 ">
                <h3 id="textAboveRange"><span class="highlighted">02.</span> For Advanced</h3>
                <div class="range">
                    <div class="sliderValue">
                        <span id="sliderValue">1</span>
                    </div>
                    <div class="field">
                        <input type="range" name="sliders" id="sliders" min="1" max="3"
                            value="1" step="1" />
                    </div>
                    <div id="textUnderRange">
                        <p>Главное в моей работе — чтобы вы ощущали
                            себя красивыми, неповторимыми и счастливыми</p>
                    </div>
                </div>
            </div>
            


    @endsection

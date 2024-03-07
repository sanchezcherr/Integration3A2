@extends('layouts.app')
@section('app')
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">

                        <p class="margin_0">A homestay provides an opportunity to stay with a local family for a fee.
                            It's an affordable accommodation alternative, ideal for independent leisure travellers of all
                            ages, interns, gap year students, students living abroad and anyone seeking a real and genuine
                            travel experience. It allows them to experience the local community and culture of the place
                            they’re visiting. </p>
                        <a class="read_more" href="Javascript:void(0)"> Read More</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="{{ asset('/assets/images/about.png') }}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
@endsection

@extends('layouts.app')
@section('app')
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">

                        <p class="margin_0">OTHER SERVICES</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('/assets/images/FOOD.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>FOOD PACKAGE</h3>
                            <span>- SEA FOOD </span>
                            <p>- SEA FOOD</p>
                            <p>- FILIPINO FOOD </p>
                            <p>- DESSERT</p>
                            <p>- AMERICAN FOOD </p>
                            <p>- CHINESE FOOD</p>
                            <p>- For availability inquire call: +9123455678 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('/assets/images/VAN.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>VAN RENTAL</h3>
                            <span>- For Land Tour </span>
                            <p>- 14 seater 3,500 </p>
                            <p>- 16 seater 4,000</p>
                            <p>- 18 seater 4,500 </p>
                            <p>- 20 seater 5,000 </p>
                            <p>- For availability inquire call: +9123455678 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('/assets/images/BOAT.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>BOAT RENTAL</h3>
                            <span>- For Island Hopping </span>
                            <p>- 7 pax capacity 1,500 </p>
                            <p>- 10 pax capacity 3,000 </p>
                            <p>- 12 pax capacity 3,500 </p>
                            <p>- 16 pax capacity 4,000</p>
                            <p>- 18 pax capacity 4,500 </p>
                            <p>- 20 pax capacity 5,000 </p>
                            <p>- For availability inquire call: +9123455678 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection

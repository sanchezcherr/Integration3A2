@extends('layouts.app')
@section('app')
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Our House</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_room -->
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <p class="margin_0">Budget Friendly Homestay </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('/assets/images/HOUSE 9.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>LJRC HOMESTAY</h3>
                            <p>3,500/NIGHT</p>
                            <p>INCLUSION: 3 rooms, 2 comfort rooms and own kitchen</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('/assets/images/HOUSE 11.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>JADESTAR</h3>
                            <p>5,000/NIGHT</p>
                            <p>INCLUSION: 4 rooms, 3 comfort rooms, own kitchen and shared mini pool</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('/assets/images/HOUSE 8.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>MALAZA HOMESTAY</h3>
                            <p>2,000/NIGHT</p>
                            <p>INCLUSION: 2 rooms, own comfort rooms</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('/assets/images/HOUSE 3.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>YAHOO HOMESTAY</h3>
                            <p>2,500/NIGHT</p>
                            <p>INCLUSION: 2 rooms, 2 comfort rooms and own kitchen</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('/assets/images/HOUSE 6.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>R&R HOMESTAY</h3>
                            <p>1,500/NIGHT</p>
                            <p>INCLUSION: 2 rooms, 1 comfort room</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('/assets/images/HOUSE 7.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>ROSE HOMESTAY</h3>
                            <p>3,000/NIGHT</p>
                            <p>INCLUSION: 2 rooms, 2 comfort room,own kitchen and garage</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our_room -->
@endsection

@extends('layouts.app')
@section('app')
    <!-- banner -->
    <section class="banner_main">
        <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ asset('/assets/images/banner1.jpg') }}" alt="First slide">
                    <div class="container">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ asset('/assets/images/banner2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{ asset('/assets/images/banner3.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="booking_ocline">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="book_room">
                            @guest
                                <a class="btn btn-primary" href="{{ route('client.index') }}">Book now Your Stay with Us!</a>
                            @endguest
                            @auth
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">Book now Your
                                    Stay with Us!</button>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>About Us</h2>
                        <p>A homestay provides an opportunity to stay with a local family for a fee.

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
    <!-- our_room -->
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Houses</h2>
                        <p>Budget Homestay rate</p>
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
    {{-- available date --}}
    <div class="blog">
        <div class="calendar1 my-5">
            <div class="titlepage">
                <h2>Available Date</h2>
                <p>LOOK FOR AVAILABLE HOMESTAY</p>
            </div>
            <div class="calendar" id="calendar-app">
                <div class="calendar--day-view" id="day-view">
                    <span class="day-view-exit" id="day-view-exit">&times;</span>
                    <span class="day-view-date" id="day-view-date">MAY 29 2016</span>
                    <div class="day-view-content">
                        <div class="day-highlight">
                            You <span class="day-events" id="day-events">had no events for today</span>. &nbsp; <span
                                tabindex="0" onkeyup="if(event.keyCode != 13) return; this.click();"
                                class="day-events-link" id="add-event" data-date>Add a new event?</span>
                        </div>
                        <div class="day-add-event" id="add-day-event-box" data-active="false">
                            <div class="row1">
                                <div class="half">
                                    <label class="add-event-label">
                                        Name of event
                                        <input type="text" class="add-event-edit add-event-edit--long"
                                            placeholder="New event" id="input-add-event-name">

                                    </label>
                                </div>
                                <div class="qtr">
                                    <label class="add-event-label">
                                        Start Time
                                        <input type="text" class="add-event-edit" placeholder="8:15"
                                            id="input-add-event-start-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12"
                                            data-format="datetime">
                                        <input type="text" class="add-event-edit" placeholder="am"
                                            id="input-add-event-start-ampm" data-options="a,p,am,pm">
                                    </label>
                                </div>
                                <div class="qtr">
                                    <label class="add-event-label">
                                        End Time
                                        <input type="text" class="add-event-edit" placeholder="9"
                                            id="input-add-event-end-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12"
                                            data-format="datetime">
                                        <input type="text" class="add-event-edit" placeholder="am"
                                            id="input-add-event-end-ampm" data-options="a,p,am,pm">
                                    </label>
                                </div>
                                <div class="half">
                                    <a onkeyup="if(event.keyCode != 13) return; this.click();" tabindex="0"
                                        id="add-event-save" class="event-btn--save event-btn">save</a>
                                    <a tabindex="0" id="add-event-cancel"
                                        class="event-btn--cancel event-btn">cancel</a>
                                </div>
                            </div>

                        </div>
                        <div id="day-events-list" class="day-events-list">

                        </div>
                        <div class="day-inspiration-quote" id="inspirational-quote">
                            Every child is an artist. The problem is how to remain an artist once he grows up. –Pablo
                            Picasso
                        </div>
                    </div>
                </div>
                <div class="calendar--view" id="calendar-view">
                    <div class="cview__month">
                        <span class="cview__month-last" id="calendar-month-last">Apr</span>
                        <span class="cview__month-current" id="calendar-month">May</span>
                        <span class="cview__month-next" id="calendar-month-next">Jun</span>
                    </div>
                    <div class="cview__header">Sun</div>
                    <div class="cview__header">Mon</div>
                    <div class="cview__header">Tue</div>
                    <div class="cview__header">Wed</div>
                    <div class="cview__header">Thu</div>
                    <div class="cview__header">Fri</div>
                    <div class="cview__header">Sat</div>
                    <div class="calendar--view" id="dates">
                    </div>
                </div>
                <div class="footer1">
                    <span><span id="footer1-date" class="footer1__link">Today is May 30</span></span>
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}
    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('/assets/images/gallery1.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('/assets/images/gallery2.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('/assets/images/gallery3.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('/assets/images/gallery4.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('/assets/images/gallery5.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('/assets/images/gallery6.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('/assets/images/gallery7.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('/assets/images/gallery8.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Blog</h2>
                        <p>OTHER SERVICES </p>
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
    <!--  contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Name" type="type" name="Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="600" height="400" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
@endsection

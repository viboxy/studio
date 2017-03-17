@extends('layouts.users-master')

@section('title')
    Home
@endsection

@section('content')
    @include('includes.users-default-navbar')

    <!-- Carousel -->
    <div class="col-md-12 col-sm-12 col-12 homeCarousel">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="images/carousel1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="images/carousel2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="images/carousel3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Quote -->
    <div class="container-fluid">
        <div class="row" id="quote">
            <span>
                <span class="larger">“</span>
                There are no rules for good photographs, there are only good photographs.
                <span class="larger">”</span>
            </span>
        </div>
    </div>

    <!-- Web Services -->
    <div class="container-fluid web">
        <div class="row services">
            <div class="col-md-4">
                <div class="col-md-12">
                    <h1><span class="title">Our Services</span></h1>
                </div>
                <div class="col-md-12">
                    <div id="webSlideshow">
                        <div>
                            <img src="../images/slideshow1.jpg">
                        </div>
                        <div>
                            <img src="../images/slideshow2.jpg">
                        </div>
                        <div>
                            <img src="../images/slideshow3.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 servicesList">
                <ul>
                    <li>Architectural, Interiors and Exteriors</li>
                    <li>Departmental Group Photos</li>
                    <li>Digitisation and Scanning Services</li>
                    <li>Event and Conference Photography</li>
                    <li>Experiments and equipment</li>
                    <li>Images of London</li>
                    <li>Photos of the Graduation Ceremonies</li>
                    <li>Portraits of Staff and Students</li>
                    <li>Reportage images</li>
                    <li>Staff and Students in their working environment, Labs, Offices and Workshops</li>
                    <li>Student Group Photos</li>
                    <li>360 Virtual Tours</li>
                    <li>Works of Art, Museum objects and specimens</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Mobile Services -->
    <div class="container-fluid mobile">
        <div class="row services">
            <div class="col-sm-12">
                <h1><span class="title">Our Services</span></h1>
            </div>
            <div class="col-md-12">
                <div id="mobileSlideshow">
                    <div>
                        <img src="../images/slideshow1.jpg">
                    </div>
                    <div>
                        <img src="../images/slideshow2.jpg">
                    </div>
                    <div>
                        <img src="../images/slideshow3.jpg">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 servicesList">
                <ul>
                    <li>Architectural, Interiors and Exteriors</li>
                    <li>Departmental Group Photos</li>
                    <li>Digitisation and Scanning Services</li>
                    <li>Event and Conference Photography</li>
                    <li>Experiments and equipment</li>
                    <li>Images of London</li>
                    <li>Photos of the Graduation Ceremonies</li>
                    <li>Portraits of Staff and Students</li>
                    <li>Reportage images</li>
                    <li>Staff and Students in their working environment, Labs, Offices and Workshops</li>
                    <li>Student Group Photos</li>
                    <li>360 Virtual Tours</li>
                    <li>Works of Art, Museum objects and specimens</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div class="container-fluid">
        <div class="row aboutUs">
            <div class="col-md-12 col-sm-12">
                <h1><span class="title">About Us</span></h1>
            </div>
            <div class="col-md-12 col-sm-12" id="aboutUs">
                So for this article I have scoured the Internet putting together 30 beautiful portfolio websites of
                photographers. The designs are often very minimalist with a big focus on the photographs themselves.
                Photographers will often share a small bio and links out to their social profiles, but for the most
                part their websites are slimmed down to focus on the pictures. I hope this collection may inspire
                other photographers to put together a small online portfolio for themselves as well.
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="container-fluid">
        <div class="row contactUs">
            <div class="col-md-12 col-sm-12 col-12">
                <h1><span class="title">Contact Us</span></h1>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <div id="map"></div>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <form>
                    <div class="form-group">
                        <label for="contactUsFirstName" class="form-control-label">First Name<span class="required">*</span> : </label>
                        <input type="text" name="contactUsFirstName" id="contactUsFirstName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="contactUsLastName" class="form-control-label">Last Name<span class="required">*</span> : </label>
                        <input type="text" name="contactUsLastName" id="contactUsLastName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="contactUsEmail" class="form-control-label">Email<span class="required">*</span> : </label>
                        <input type="email" name="contactUsEmail" id="contactUsEmail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="contactUsMessage" class="form-control-label">Message<span class="required">*</span> : </label>
                        <textarea type="text" name="contactUsMessage" id="contactUsMessage" class="form-control" required></textarea>
                    </div>
                </form>
                <button type="button" class="btn btn-secondary" id="contactUsClose">Send</button>
            </div>
        </div>
    </div>

    @include('includes.users-default-footer')

    @include('includes.users-signin-modal')
    @include('includes.users-signup-modal')
@endsection


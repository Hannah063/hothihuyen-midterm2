@extends('layouts.master')

@section('hero')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>About Us</h1>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique.</p>
                    <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                            class="btn btn-white-outline">Explore</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="{{ asset('assets/images/couch.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="why-choose-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h2 class="section-title">Why choose Us</h2>
                        <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit
                            imperdiet dolor tempor tristique.</p>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('assets/images/truck.svg') }}" alt="">
                                <h6 style="color: black">Fast & Free Shipping</h6>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('assets/images/bag.svg') }}" alt="">
                                <h6 style="color: black">Easy to Shop</h6>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('assets/images/support.svg') }}" alt="">
                                <h6 style="color: black">24/7 Support</h6>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('assets/images/return.svg') }}" alt="">
                                <h6 style="color: black">Hassle Free Returns</h6>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-5">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/images/why-choose-us-img.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center">
                    <h2 class="section-title">Our Team</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($team as $info)
                    <x-team_cart :file="$info['file']" :name="$info['name']" :job="$info['job']" :describe="$info['describe']">
                    </x-team_cart>
                @endforeach
            </div>
        </div>
    </div>
    <div class="testimonial-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center">
                    <h2 class="section-title">Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-inner">
                        <div style="text-align: center;">
                            <div class="carousel-item active">
                                <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus
                                    malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor
                                    tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                    fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.”</p>
                                <br>
                                <img src="{{ asset('assets/images/person-1.png') }}" alt=""
                                    style="border-radius: 100%; width: 60px ">
                                <h6>Maria Jones</h6>
                                <p>CEO, Co-Founder, XYZ Inc.</p>
                            </div>
                            @for ($i = 0; $i <= 2; $i++)
                                <div class="carousel-item">
                                    <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus
                                        malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor
                                        tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                        fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.”</p>
                                    <br>
                                    <img src="{{ asset('assets/images/person-1.png') }}" alt=""
                                        style="border-radius: 100%; width: 60px ">
                                    <h6>Maria Jones</h6>
                                    <p>CEO, Co-Founder, XYZ Inc.</p>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

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
            <div class="row">
                @foreach ($team as $member)
                    @foreach ($member as $info)
                        <x-team_cart>
                            <x-slot name="fileName">{{ $name['name'] }}</x-slot>
                        </x-team_cart>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('main')
    <!-- Slider -->
    @include('frontend.home.slider')
    <!-- About -->
    @include('frontend.home.about')
    <!-- Projects 2 -->
    @include('frontend.home.projects')
    <!-- Testiominals -->
    @include('frontend.home.testimonial')
    <!-- Blog -->
    @include('frontend.home.blog')

@endsection

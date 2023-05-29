@extends('layouts.layout')
@section ('title','about')
@section ('subtitle','About Us')
@section ('subheader','about-sub-header')
@section('menu')
@include('include.menu')
@endsection

@section('aboutcontent')
<div style="background: linear-gradient(to right, #7EE8FA, #EEC0C6);">
    <section class="aboutus">
      <div class="row">
        <div class="about-col">
          <h1>We are team of young professionals who provide technology solutions. </h1>
          <p>
            <span style="color:rgb(238, 41, 41)"> RML technology founded in 2022 is an IT Services company which
              provide wide range of services like web development, mobile app
              development,SEO, website update and maintinance. <br />
              We also have a wide range of software products that fullfill the requirement of clients according to their
              need.</span>
          </p>
          <a href="" class="hero-btn red-btn">EXPLORE MORE</a>
        </div>
        <div class="about-col">
          <img src="/images/about.jpg" />
        </div>
      </div>
    </section>
  </div>
@endsection


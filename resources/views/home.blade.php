@extends('layouts.layout')
@section ('title','home')
@section ('changeimg')
onload=changeimg()
@endsection
@section ('header')
@include('include.header')
@include('include.whatwedo')
@include('include.whychooseus')
@include('include.technology')
@include('include.testimonials')
@include('include.calltoaction')
@endsection